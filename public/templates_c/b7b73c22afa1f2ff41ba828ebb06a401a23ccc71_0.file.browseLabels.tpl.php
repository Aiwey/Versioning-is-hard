<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 18:55:46
  from 'C:\xampp\htdocs\Serenity\app\views\browseLabels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f985f22573ed0_98420053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7b73c22afa1f2ff41ba828ebb06a401a23ccc71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\browseLabels.tpl',
      1 => 1603509288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f985f22573ed0_98420053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10132298485f985f225421e9_08579877', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7564758625f985f22547b40_41522868', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_10132298485f985f225421e9_08579877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10132298485f985f225421e9_08579877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | browse labels<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_7564758625f985f22547b40_41522868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7564758625f985f22547b40_41522868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Browse Labels</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Label Name</th>
      <th scope="col">Label Country</th>
      <th scope="col">Label City</th>
      <th scope="col">Label Street</th>
      <th scope="col">Label Property Number</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['label']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelCountry"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelCity"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelStreet"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelPropertyNumber"];?>
</td>
                <td> Click to see </td>
                </tr>            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            
            </tbody>
</table>
<?php
}
}
/* {/block 'content'} */
}
