<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('Site/common/HeaderSite');
        echo view('login', $data);
        echo view('Site/common/FooterSite');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                if(empty($data["key"])){    
                    $cookie = [
                        'name'   => 'user_id',
                        'value'  => sha1(md5(microtime(true).mt_rand(10000,50000))),
                        'expire' => '36500'
                    
                ];
                
                $this->response->setCookie($cookie)->send();
                $test=   $this->response->getCookie('user_id');
                dd($test);
                $data_save =[
                    'key'   => $test["value"]
                ];
            
                $model->where('user_id',$data['user_id'])
                ->set($data_save)
                ->update();
                }else{
                    $cookie = [
                        'name'   => 'user_id',
                        'value'  => $data["key"],
                        'expire' => '36500'
                    
                ];
                
                $this->response->setCookie($cookie)->send();
                $test=   $this->response->getCookie('user_id');
                dd($test);
                }


                return redirect()->to('/site/home');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('Site/common/HeaderSite');
            echo view('login', $data);
            echo view('Site/common/FooterSite');
        }
         
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 
?>