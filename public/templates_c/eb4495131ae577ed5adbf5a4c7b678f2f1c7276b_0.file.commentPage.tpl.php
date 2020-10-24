<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 19:03:29
  from 'E:\Studia\5sem\ApkWebPHP\htdocs\Serenity\app\views\commentPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f945e61129940_57310446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb4495131ae577ed5adbf5a4c7b678f2f1c7276b' => 
    array (
      0 => 'E:\\Studia\\5sem\\ApkWebPHP\\htdocs\\Serenity\\app\\views\\commentPage.tpl',
      1 => 1603559004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f945e61129940_57310446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_932633795f945e61121728_87463442', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9007876825f945e61121e10_80206695', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_932633795f945e61121728_87463442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_932633795f945e61121728_87463442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | comments<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_9007876825f945e61121e10_80206695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9007876825f945e61121e10_80206695',
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
            <form action="showAddComment" method="post">
                <input type="hidden" name="idAlbum" value="<?php echo $_smarty_tpl->tpl_vars['idAlbum']->value;?>
">
                <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Add New">                
            </form>  
        <!--<a class="btn btn-sm btn-outline-secondary" style="margin-top: 2em; margin-bottom: 2em;" href ="<?php ob_start();
echo ((string)$_smarty_tpl->tpl_vars['idAlbum']->value);
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"showAddComment",'id'=>$_prefixVariable1),$_smarty_tpl ) );?>
">Add New</a>-->    
<?php
}
}
/* {/block 'content'} */
}
