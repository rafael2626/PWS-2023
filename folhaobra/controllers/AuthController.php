<?php
require_once 'models\Auth.php';
require_once  'controllers\Controller.php';

class  AuthController extends Controller
{
    public function index()
    {
        $this->renderView('auth','registo');
    }
    public function CheckAuth($username, $password)
    {
        session_start();

        $user = User::find_by_username_and_password($username,$password);
            if(is_null($user))
            {
                return false;
            }else
            {
                $_SESSION['auth'] ['username'] ['user_id']['user_role'] = $user;
                return true;
            }
    }
   public function IsLoggedIn()
    {

        if (isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }
    public function logout()
    {
        $auth = new Auth();
        $auth->Logout();
        $this->redirectToRoute('auth','index');
    }
    public  function  checklogin()
    {
      //por echos
    }
}