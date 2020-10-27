<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 18:55:51
  from 'C:\xampp\htdocs\Serenity\app\views\browseTracks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f985f27e77b58_38588653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5365f5c2a22d5915c786fa006103f6ed871e05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\browseTracks.tpl',
      1 => 1603509288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f985f27e77b58_38588653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6135670515f985f27e45a34_92125203', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_591615125f985f27e4b427_12122592', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_6135670515f985f27e45a34_92125203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6135670515f985f27e45a34_92125203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | browse labels<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_591615125f985f27e4b427_12122592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_591615125f985f27e4b427_12122592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Browse Tracks</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Track Name</th>
      <th scope="col">Album</th>
      <th scope="col">Band</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['track']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["TrackName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["BandName"];?>
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
