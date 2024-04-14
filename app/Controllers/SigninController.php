<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SigninController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('signin');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/home');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
        session()->set([
            'isLoggedIn' => true,
            'name' => $userData['name'] // Assuming you have the user's name stored in $userData
        ]);
    }
    public function profile()
    {
        $session = session();
        if ($session->get('isLoggedIn')) {
            $userModel = new UserModel();
            $userId = $session->get('id');
            $userData = $userModel->find($userId);
            
            // Pass user data to profile view and display it
            return view('user/profile', ['user' => $userData]);
        } else {
            return redirect()->to('/signin');
        }
    }
    public function logout()
    {
        $session = session();
        $session->remove(['id', 'name', 'email', 'isLoggedIn']);
        return redirect()->to('/signin');
    }
}