<?php
/**
 * Created by PhpStorm.
 * User: louis
 * Date: 29/04/16
 * Time: 11:30
 */

require('lib/libs/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/home/louis/PhpstormProjects/russian/smarty/templates');
$smarty->setCompileDir('/home/louis/PhpstormProjects/russian/smarty/templates_c');
$smarty->setCacheDir('/home/louis/PhpstormProjects/russian/smarty/cache');
$smarty->setConfigDir('/home/louis/PhpstormProjects/russian/smarty/configs');

$smarty->assign('test', 'Ned');
$smarty->display('tpl/layout.tpl');


//header('Location: php/layout.php');
//exit;