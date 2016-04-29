<?php
/**
 * Created by PhpStorm.
 * User: louis
 * Date: 29/04/16
 * Time: 12:47
 */

class Smarty_Loader {

    private $smarty = null;

    function Smarty_Loader() {
        require('../../lib/libs/Smarty/Smarty.class.php');
        $this->smarty = new Smarty();

        $this->smarty->setTemplateDir('/home/louis/PhpstormProjects/russian/tpl/');
        $this->smarty->setCompileDir('/home/louis/PhpstormProjects/russian/smarty/templates_c/');
        $this->smarty->setCacheDir('/home/louis/PhpstormProjects/russian/smarty/cache/');
        $this->smarty->setConfigDir('/home/louis/PhpstormProjects/russian/smarty/configs/');
        return $this->smarty;
    }

    function assign($var, $res) {
        $this->smarty->assign($var, $res);
    }

    function display($path) {
        $this->smarty->display($path);
    }

    function testInstall() {
        $this->smarty->testInstall();
    }

}