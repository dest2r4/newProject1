<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 05.10.2017
 * Time: 16:43
 */

class AuthController extends BaseController
{
    public function indexAction(){
        $this->loginAction();
    }


    public function loginAction(){
        if($_SERVER['REQUEST_METHOD']=="GET")$this->getSmarty()->display('Auth/login.tpl');
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        $user=new UserModel($login,$pass);
        if(!$user->loginUser())die("Can`t login user");
        $this->getSession()->set('user',$user);
        $this->getSession()->set('admin',$user->isAdmin());
        #die(print_r($user,true));
        header("Location:/");
    }
    public function logoutAction(){
        $this->getSession()->forget('user');
        header("Location:/");
    }
    public function registerAction(){
        if($_SERVER['REQUEST_METHOD']=="GET")$this->getSmarty()->display('Auth/register.tpl');
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        $user=new UserModel($login,$pass);
        if(!$user->registerUser())die("Registration Error");
        $this->getSession()->set('user',$user);
        #die(print_r($user,true));
        header("Location:/main");
    }


































}