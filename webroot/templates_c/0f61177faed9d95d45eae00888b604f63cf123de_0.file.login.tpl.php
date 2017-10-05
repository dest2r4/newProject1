<?php
/* Smarty version 3.1.30, created on 2017-10-05 16:43:04
  from "C:\xampp\htdocs\Views\Auth\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d644f8708c55_72248593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f61177faed9d95d45eae00888b604f63cf123de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Auth\\login.tpl',
      1 => 1507214583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59d644f8708c55_72248593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173657464259d644f8707fb8_42555789', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_173657464259d644f8707fb8_42555789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="/auth/login" method="post">
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
