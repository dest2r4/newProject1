<?php
/* Smarty version 3.1.30, created on 2017-10-06 11:50:29
  from "C:\xampp\htdocs\Views\Admin\Logger\request.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d751e5451ab2_59375474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c349ba5d5ff1f35ed9ec954bab7518d2553242fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\Logger\\request.tpl',
      1 => 1507283418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../logger.tpl' => 1,
  ),
),false)) {
function content_59d751e5451ab2_59375474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74227151559d751e54513b3_09793120', 'table');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../logger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'table'} */
class Block_74227151559d751e54513b3_09793120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h1 align="center">Request Reporting</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Request text</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reqs']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['msg'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'table'} */
}
