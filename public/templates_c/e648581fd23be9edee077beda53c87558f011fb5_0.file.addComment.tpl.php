<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 19:23:48
  from 'E:\Studia\5sem\ApkWebPHP\htdocs\Serenity\app\views\addComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9463243bc1f5_21834730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e648581fd23be9edee077beda53c87558f011fb5' => 
    array (
      0 => 'E:\\Studia\\5sem\\ApkWebPHP\\htdocs\\Serenity\\app\\views\\addComment.tpl',
      1 => 1603560215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9463243bc1f5_21834730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6220274055f9463243b9188_58691321', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9742330795f9463243b9866_22937592', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_6220274055f9463243b9188_58691321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6220274055f9463243b9188_58691321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | add comment<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_9742330795f9463243b9866_22937592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9742330795f9463243b9866_22937592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<form action="addComment" method="post" id="f">
  <div class="form-group">
        <label for="commentForm">Type your comment</label>
        <textarea form="f" class="form-control" id="commentForm" name="comment" rows="3"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</textarea>
        <!--<input type="text" class="form-control" id="commentForm" name="comment" rows="3" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->commentContent;?>
">-->
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
