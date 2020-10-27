<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 18:55:44
  from 'C:\xampp\htdocs\Serenity\app\views\browseAlbums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f985f2051a532_28874886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de980a784c188c552b7cac17a29e4534b493a05b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\browseAlbums.tpl',
      1 => 1603529296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f985f2051a532_28874886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20011677825f985f204b7307_39132887', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2082247555f985f204be390_78711445', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_20011677825f985f204b7307_39132887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_20011677825f985f204b7307_39132887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. browse albums<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_2082247555f985f204be390_78711445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2082247555f985f204be390_78711445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Browse Albums</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Album Name</th>
      <th scope="col">Album Genre</th>
      <th scope="col">Album Description</th>
      <th scope="col">Album Release</th>
      <th scope="col">Cover</th>
      <th scope="col">Label</th>
      <th scope="col">Band</th>      
      <th scope ="col">Action</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idAlbum"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumGenre"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumDescription"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumReleaseDate"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumCoverPath"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["BandName"];?>
</td>
                
                <td>
                    <form action="showComment" method="post">
                        <input type="hidden" name="idAlbum" value=<?php echo $_smarty_tpl->tpl_vars['row']->value["idAlbum"];?>
>
                        <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="comments">
                    </form>
                    <!--<a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->value["idAlbum"];
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"showComment",'id'=>$_prefixVariable1),$_smarty_tpl ) );?>
"><button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">comments</button></a>-->
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
