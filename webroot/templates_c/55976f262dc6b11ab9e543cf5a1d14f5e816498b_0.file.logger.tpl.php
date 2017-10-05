<?php
/* Smarty version 3.1.30, created on 2017-10-05 18:37:20
  from "C:\xampp\htdocs\Views\Admin\logger.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d65fc00ae536_09522160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55976f262dc6b11ab9e543cf5a1d14f5e816498b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\logger.tpl',
      1 => 1507221439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59d65fc00ae536_09522160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34001080059d65fc00adcb5_64450060', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_34001080059d65fc00adcb5_64450060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>ADMIN LOGGER</h1>
    <div class="container">
        <h1>Error table</h1>
        <table class="table">
            <thead>
            <tr>
                <th> Message</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['err']->value, 'bug');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bug']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['bug']->value['msg'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['bug']->value['time'];?>
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
    <h1>Request table</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Number</th>
            <th> Message</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reqs']->value, 'req', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['req']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['msg'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['time'];?>
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
/* {/block 'body'} */
}
