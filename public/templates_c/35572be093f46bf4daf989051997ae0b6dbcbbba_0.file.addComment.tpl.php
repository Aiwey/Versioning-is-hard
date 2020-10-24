<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-18 16:40:52
  from 'C:\XAMPP\htdocs\Serenity\app\views\addComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8c53f4bbf559_24418423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35572be093f46bf4daf989051997ae0b6dbcbbba' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\Serenity\\app\\views\\addComment.tpl',
      1 => 1603032005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8c53f4bbf559_24418423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_890503615f8c53f4ba4c66_14155206', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12713973325f8c53f4bac5e4_41744246', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_890503615f8c53f4ba4c66_14155206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_890503615f8c53f4ba4c66_14155206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | add comment<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_12713973325f8c53f4bac5e4_41744246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12713973325f8c53f4bac5e4_41744246',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<form action="addComment" method="post" id="commentForm">
  <div class="form-group">
        <label for="commentForm">Type your comment</label>
        <textarea class="form-control" id="comment" name="comment" rows="3" form="commentForm"><?php echo $_smarty_tpl->tpl_vars['form']->value->commentContent;?>
</textarea>
  </div>
  <input type="hidden" name ="idAlbum" value =<?php echo $_smarty_tpl->tpl_vars['idAlbum']->value;?>
>
  <input type="submit" class="btn btn-primary" value="Add New">
</form>
<?php
}
}
/* {/block 'content'} */
}
