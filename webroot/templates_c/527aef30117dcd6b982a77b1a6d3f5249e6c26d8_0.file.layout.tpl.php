<?php
/* Smarty version 3.1.30, created on 2017-10-05 21:04:27
  from "C:\xampp\htdocs\Views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d6823bdbde87_62556712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '527aef30117dcd6b982a77b1a6d3f5249e6c26d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\layout.tpl',
      1 => 1507230267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d6823bdbde87_62556712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <?php if (isset($_SESSION['user'])) {?>
                <?php if ($_SESSION['user']->isAdmin()) {?>
                    <li><a href="admin/">ADMIN PAGE</a></li>
                    <?php }?>
                <li><a href="#"><?php echo $_SESSION['user']->getLogin();?>
</a></li>
                <li><a href="/auth/logout">LogOut</a></li>
                <?php } else { ?>
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>
                <?php }?>



        </ul>
    </div>
</nav>
    <h1 align="center">Admin Main Page</h1>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185747925359d6823bdbd4e3_75365626', 'body');
?>


</body>
</html><?php }
/* {block 'body'} */
class Block_185747925359d6823bdbd4e3_75365626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





    <?php
}
}
/* {/block 'body'} */
}
