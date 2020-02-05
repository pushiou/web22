<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 05:02:22
  from 'D:\php\ugm\xampp\htdocs\web22\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3a3e4e52e083_96027347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c889770f5c83575fd486d17eac67bfffb5cd0583' => 
    array (
      0 => 'D:\\php\\ugm\\xampp\\htdocs\\web22\\templates\\user.tpl',
      1 => 1580875334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/admin.tpl' => 1,
    'file:tpl/login.tpl' => 1,
  ),
),false)) {
function content_5e3a3e4e52e083_96027347 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

  <head>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
   
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.css">

   
  </head>
  <body>
    <?php if ($_SESSION['admin']) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- 引入login.tpl -->
    <?php }?>

  
  </body>
</html>
<?php }
}
