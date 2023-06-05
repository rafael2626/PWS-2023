<?php
class Auth
{
    public function __construct()
    {
        if(session_status() != 2)
        {
            session_start();
        }
    }
    public function CheckAuth($username, $password)
    {
        $user = User::find_by_username_and_password($username,$password);
        if(is_null($user))
        {
            return false;
        }else
        {
            $_SESSION['auth']  ['username'] = $user->username;;
            //igual para todos
            $_SESSION ['auth']  ['id'] = $user->id;
            $_SESSION ['auth']  ['password'] = $user->password;
            $_SESSION   ['auth'] ['role'] = $user->role;

            return true;
        }
    }
   public function IsLoggedIn()
    {

        if (isset($_SESSION['auth'])) {
            return true;
        } else {
            return false;
        }
    }
   public function Logout()
    {
        session_destroy();
    }
    public function getUsername()
    {
        if ($this->IsLoggedIn())
        {
            //igual ao outros
          return  $_SESSION['auth']  ['username'];
        }else
        {
            return '';
        }
    }
    public  function  getUserId()
    {
        if($this->isLoggedIn())
        {
            return  $_SESSION['auth']  ['id'];
        }else
        {
            return '';
        }
    }
    public  function  getUserRole()
    {
        if($this->isLoggedIn())
        {
            return  $_SESSION['auth']  ['role'];
        }else
        {
            return '';
        }
    }
    public function  isLoggedInAs($roles = [])
    {
        if($this->isLoggedIn())
        {
           $role = $this->getUserRole();
           return in_array($role , $roles);
        }
    }
}
?>

