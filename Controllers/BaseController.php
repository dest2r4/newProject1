<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 05.10.2017
 * Time: 14:39
 */

abstract class BaseController
{
    abstract public function indexAction();


    private $smarty;
    private $session;

    public function __construct()
    {
        global  $smarty;
        $this->smarty=$smarty;
        global $session;
        $this->session=$session;
    }


    public function getSmarty(){

        return $this->smarty;
    }

    public function getSession(){
        return $this->session;
    }

























}