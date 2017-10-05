<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 05.10.2017
 * Time: 14:40
 */

class MainController extends BaseController
{
    public function indexAction()
    {
        $r= "<h1>".__METHOD__;
        $smarty=$this->getSmarty();
        $smarty->assign('r',$r);
        $smarty->display('layout.tpl');
    }
}