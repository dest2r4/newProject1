<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 05.10.2017
 * Time: 19:26
 */

class LogController extends BaseController
{
 public  function indexAction()
 {
     $err=Logger::getAllErrors();
     $reqs=Logger::getAllRequests();
     $smarty=$this->getSmarty();
     $smarty->assign(['err'=>$err,'reqs'=>$reqs]);
     $smarty->display('Admin/logger.tpl');

}






















}