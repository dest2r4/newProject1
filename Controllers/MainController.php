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
        echo "<h1>".__METHOD__;
        $q=new UserModel();
        $q->q();
    }
}