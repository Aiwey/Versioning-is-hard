<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 11:06:31
  from 'C:\XAMPP\htdocs\Serenity\app\views\browseLabels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f744a975322f8_13911158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d10e5128c82bfb39ad3b82ed85d03fa1056dafd' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\Serenity\\app\\views\\browseLabels.tpl',
      1 => 1601416433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f744a975322f8_13911158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16801058135f744a974e1133_96741907', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5561125425f744a974e8e67_82248863', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_16801058135f744a974e1133_96741907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16801058135f744a974e1133_96741907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | browse labels<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_5561125425f744a974e8e67_82248863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5561125425f744a974e8e67_82248863',
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
