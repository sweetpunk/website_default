<?php
/**
 * Created by PhpStorm.
 * User: louis
 * Date: 29/04/16
 * Time: 11:34
 */

require('../lib/libs/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/home/louis/PhpstormProjects/russian/smarty/templates');
$smarty->setCompileDir('/home/louis/PhpstormProjects/russian/smarty/templates_c');
$smarty->setCacheDir('/home/louis/PhpstormProjects/russian/smarty/cache');
$smarty->setConfigDir('/home/louis/PhpstormProjects/russian/smarty/configs');


$smarty->assign('test', 'coucou');
$smarty->display('../tpl/layout.tpl');
