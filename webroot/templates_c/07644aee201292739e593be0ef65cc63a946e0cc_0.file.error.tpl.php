<?php
/* Smarty version 3.1.30, created on 2017-10-06 11:49:31
  from "C:\xampp\htdocs\Views\Admin\Logger\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d751ab362d77_26591056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07644aee201292739e593be0ef65cc63a946e0cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\Logger\\error.tpl',
      1 => 1507283370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../logger.tpl' => 1,
  ),
),false)) {
function content_59d751ab362d77_26591056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17238039359d751ab3625e6_41436630', 'table');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../logger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'table'} */
class Block_17238039359d751ab3625e6_41436630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h1 align="center">Error Reporting</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Error text</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ers']->value, 'value', false, 'key');
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
