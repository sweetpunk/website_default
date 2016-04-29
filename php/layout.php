<?php
/**
 * Created by PhpStorm.
 * User: louis
 * Date: 29/04/16
 * Time: 11:34
 */

require_once('../lib/libs/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/home/louis/PhpstormProjects/russian/smarty/templates');
$smarty->setCompileDir('/home/louis/PhpstormProjects/russian/smarty/templates_c');
$smarty->setCacheDir('/home/louis/PhpstormProjects/russian/smarty/cache');
$smarty->setConfigDir('/home/louis/PhpstormProjects/russian/smarty/configs');


$array = array('bonjour', 'ceci', 'est', 'un', 'array');
$string = "<span style='color: red;'>exemple de fonctionnement basique de smarty !</span>";

$smarty->display('../tpl/layout.tpl');
