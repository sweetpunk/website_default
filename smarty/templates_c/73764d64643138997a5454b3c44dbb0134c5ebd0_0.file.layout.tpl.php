<?php
/* Smarty version 3.1.29, created on 2016-04-29 13:33:31
  from "/home/louis/PhpstormProjects/russian/tpl/layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5723468bd83974_65241565',
  'file_dependency' => 
  array (
    '73764d64643138997a5454b3c44dbb0134c5ebd0' => 
    array (
      0 => '/home/louis/PhpstormProjects/russian/tpl/layout.tpl',
      1 => 1461929179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5723468bd83974_65241565 ($_smarty_tpl) {
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link href='../css/bootstrap-theme.css' rel='stylesheet' type='text/css' />
    <link href='../css/bootstrap.css' rel='stylesheet' type='text/css' />
    <!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />-->

    <?php echo '<script'; ?>
 type="text/javascript" src="../js/bootstrap.js"><?php echo '</script'; ?>
>
    <title>Swag</title>
</head>

<?php echo $_smarty_tpl->tpl_vars['test']->value;
}
}
