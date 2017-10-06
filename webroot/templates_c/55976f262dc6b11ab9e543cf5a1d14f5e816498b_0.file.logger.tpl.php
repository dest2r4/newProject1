<?php
/* Smarty version 3.1.30, created on 2017-10-05 20:54:07
  from "C:\xampp\htdocs\Views\Admin\logger.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d67fcf119855_04625308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55976f262dc6b11ab9e543cf5a1d14f5e816498b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\logger.tpl',
      1 => 1507229646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59d67fcf119855_04625308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60694728859d67fcf119377_10999681', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'table'} */
class Block_14613584959d67fcf118ae4_74062906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'table'} */
/* {block 'body'} */
class Block_60694728859d67fcf119377_10999681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 align="center">ADMIN LOGGER</h1>
    <div align="center" >
    <a href="/admin/log/error"><button type="button" class="btn btn-primary active" style="width: 25%;height: 20%" >Show Error</button></a>
    <a href="/admin/log/request"><button type="button" class="btn btn-primary active" style="width: 25%;height: 19%" >Show Request</button></a>
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14613584959d67fcf118ae4_74062906', 'table', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
