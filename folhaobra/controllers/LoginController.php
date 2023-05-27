<?php

class LoginController extends  Controller
{
    public function index()
    {
        $this->renderView('bo', 'login',[],'login');

    }
  /*  public  function checklogin()
    {
        //verificar roles
        $auth = new Auth();
        if($this->Chec())
    }*/
}