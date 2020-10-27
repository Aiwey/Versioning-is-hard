<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 18:58:33
  from 'C:\xampp\htdocs\Serenity\app\views\addComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f985fc96c1915_60614451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d21144e36978e27250ede37af2a6c511111a27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\addComment.tpl',
      1 => 1603532522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f985fc96c1915_60614451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1075958645f985fc96b4e21_26466277', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_896802865f985fc96b87e5_37072432', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_1075958645f985fc96b4e21_26466277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1075958645f985fc96b4e21_26466277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | add comment<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_896802865f985fc96b87e5_37072432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_896802865f985fc96b87e5_37072432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<form action="addComment" method="post" id="f">
  <div class="form-group">
        <label for="commentForm">Type your comment</label>
        <textarea form="f" class="form-control" id="commentForm" name="comment" rows="3"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</textarea>
        <input type="hidden" name="idAlbum" value="<?php echo $_smarty_tpl->tpl_vars['idAlbum']->value;?>
">
  </div>
  <input type="submit" class="btn btn-primary" value="Add New">
</form>
<?php
}
}
/* {/block 'content'} */
}
