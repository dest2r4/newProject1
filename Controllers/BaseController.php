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


    public function __construct()
    {
        global  $smarty;
        $this->smarty=$smarty;
    }


    public function getSmarty(){

        return $this->smarty;
    }

























}