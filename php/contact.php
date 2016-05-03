<?php
/**
 * Created by PhpStorm.
 * User: louis
 * Date: 29/04/16
 * Time: 14:18
 */

include('./layout.php');

if (isset($_POST) && $_POST) {
    $res = mail('sweetpunk4242@gmail.com', 'Demande de contact', 'prise de contact');
}
$smarty->assign('isActive', "5");
$smarty->display('../tpl/layout.tpl');
$smarty->display('../tpl/contact.tpl');
$smarty->display('../tpl/footer.tpl');