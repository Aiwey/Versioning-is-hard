<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 10:01:08
  from 'C:\XAMPP\htdocs\Serenity\app\views\browseBands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f743b44460038_75211204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f38f5fca6f447e64b7c2b6af0c4b9555c68e8e6c' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\Serenity\\app\\views\\browseBands.tpl',
      1 => 1601350614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f743b44460038_75211204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12870378715f743b4441c118_18857391', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13085312165f743b44424663_10606534', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_12870378715f743b4441c118_18857391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12870378715f743b4441c118_18857391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | browse: bands<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_13085312165f743b44424663_10606534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13085312165f743b44424663_10606534',
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
