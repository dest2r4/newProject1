<?php
/* Smarty version 3.1.30, created on 2017-10-05 18:00:39
  from "C:\xampp\htdocs\Views\Auth\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d657279a7948_14568572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581478edcdb2660248510ec37f610bcf096faa2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Auth\\register.tpl',
      1 => 1507218796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59d657279a7948_14568572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206921742159d657279a6c91_82139521', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_206921742159d657279a6c91_82139521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="/auth/register" method="post">
        <div class="form-group">
            <label for="email">Login</label>
            <input type="text" class="form-control" id="email" name="login">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="pass">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
<?php
}
}
/* {/block 'body'} */
}
