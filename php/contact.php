<?php
/**
 * Created by PhpStorm.
 * User: louis
 * Date: 29/04/16
 * Time: 14:18
 */

include('./layout.php');

if (isset($_POST) && $_POST['send']) {
    $res = mail('sweetpunk4242@gmail.com', 'Demande de contact', 'prise de contact');
}

$smarty->display('../tpl/contact.tpl');