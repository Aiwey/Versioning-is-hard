<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-28 00:52:28
  from 'C:\xampp\htdocs\Serenity\app\views\adminPanelComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f98b2bc820b17_78048873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658e1532811edfc02406e4b6dd387a0700229833' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\adminPanelComment.tpl',
      1 => 1603842654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f98b2bc820b17_78048873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20768431725f98b2bc7ee1b1_40704658', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_20768431725f98b2bc7ee1b1_40704658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20768431725f98b2bc7ee1b1_40704658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Album</th>
      <th scope="col">Comment</th>
      <th scope="col">User</th>
      <th scooe="col">Action</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["Album_idAlbum"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["CommentContent"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["User_idUser"];?>
</td>
                <td> <form action="CommentDelete" method="post" style="margin: 1em;">
                    <input type="hidden" name="idComment" value ="<?php echo $_smarty_tpl->tpl_vars['row']->value["idComment"];?>
">
                    <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Delete Comment">
                    </form>
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
