<?php
/* Smarty version 3.1.34-dev-7, created on 2022-01-10 21:20:38
  from '/var/www/datery/app/templates/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61dca326e51b33_82452534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d5c361d7886200b0317cb7084d34a22ddaa669' => 
    array (
      0 => '/var/www/datery/app/templates/default/header.tpl',
      1 => 1641849637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dca326e51b33_82452534 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="152x152" href="/templates/default/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/default/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/default/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/default/favicon/site.webmanifest">
    <link rel="mask-icon" href="/templates/default/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php echo '<script'; ?>
 src="/data/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/data/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/data/js/common.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['localfiles']->value) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['localfiles']->value['scripts'], 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
        <?php echo '<script'; ?>
 src="/templates/default/<?php echo $_smarty_tpl->tpl_vars['localfiles']->value['template'];?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo '</script'; ?>
>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['localfiles']->value['css'], 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    
    <style>html {opacity:0;}</style>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light" id = "navbar">
      <a class="navbar-brand" href="/index.php">Calendar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav-bar" aria-controls="main-nav-bar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-nav-bar">
        <hr class="d-xl-none d-lg-none d-sm-block d-md-block">
        <ul class="navbar-nav ml-auto">
          <li class='mr-2'><a data-class="modal-lg" data-href="/user" onclick="show_modalpage(this)"><span class="badge badge-pill badge-primary shadow p-2"><i class="fas fa-user mr-2"></i><?php echo $_SESSION['person'];?>
</span></a></li>
          <li><a data-class="modal-lg" data-href="/addevent" onclick="show_modalpage(this)"><span class="badge badge-pill badge-primary shadow p-2"><i class="fas fa-plus-circle mr-2"></i>Создать встречу</span></a></li>
        </ul>
      </div>
    </nav>
    <div class="bb mb-4 mr-5 ml-5" id='bb'></div><?php }
}
