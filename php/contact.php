<?php
/**
 * Created by PhpStorm.
 * User: louis
 * Date: 29/04/16
 * Time: 14:18
 */

require('../lib/libs/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/home/louis/PhpstormProjects/russian/smarty/templates');
$smarty->setCompileDir('/home/louis/PhpstormProjects/russian/smarty/templates_c');
$smarty->setCacheDir('/home/louis/PhpstormProjects/russian/smarty/cache');
$smarty->setConfigDir('/home/louis/PhpstormProjects/russian/smarty/configs');

if (isset($_POST) && $_POST['send']) {
    $res = mail('sweetpunk4242@gmail.com', 'Demande de contact', 'prise de contact');
}

$smarty->display('../tpl/contact.tpl');