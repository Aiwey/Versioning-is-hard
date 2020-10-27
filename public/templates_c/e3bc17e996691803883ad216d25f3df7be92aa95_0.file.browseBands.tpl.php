<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 18:55:42
  from 'C:\xampp\htdocs\Serenity\app\views\browseBands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f985f1e990c46_41879014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3bc17e996691803883ad216d25f3df7be92aa95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\browseBands.tpl',
      1 => 1603509288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f985f1e990c46_41879014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17344864175f985f1e955956_96046234', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8400109865f985f1e95bdf6_54930010', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_17344864175f985f1e955956_96046234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_17344864175f985f1e955956_96046234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | browse: bands<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_8400109865f985f1e95bdf6_54930010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8400109865f985f1e95bdf6_54930010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Manage Bands</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">BandName</th>
      <th scope="col">DateCreated</th>
      <th scope="col">DateEnded</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['band']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idBand"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["BandName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["DateCreated"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["DateEnded"];?>
</td>
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
