<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-18 16:26:00
  from 'C:\XAMPP\htdocs\Serenity\app\views\commentPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8c507888fde9_01106274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8045b261beec818bac2e3863a220a2ff25fb9b68' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\Serenity\\app\\views\\commentPage.tpl',
      1 => 1603031158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8c507888fde9_01106274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17848462245f8c50788452a6_40170365', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5601834955f8c507884d222_09879791', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_17848462245f8c50788452a6_40170365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_17848462245f8c50788452a6_40170365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | comments<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_5601834955f8c507884d222_09879791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5601834955f8c507884d222_09879791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Browse Comments</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Album</th>
      <th scope="col">Comment</th>
      <th scope="col">User</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["CommentContent"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserLogin"];?>
</td>
                </tr>            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            
            </tbody>
</table>
            
        <a class="btn btn-sm btn-outline-secondary" style="margin-top: 2em; margin-bottom: 2em;" href ="<?php ob_start();
echo $_smarty_tpl->tpl_vars['id_album']->value;
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"showAddComment",'id'=>$_prefixVariable1),$_smarty_tpl ) );?>
">Add New</a>    
<?php
}
}
/* {/block 'content'} */
}
