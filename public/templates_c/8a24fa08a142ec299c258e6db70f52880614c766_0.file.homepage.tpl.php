<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 16:39:26
  from 'E:\Studia\5sem\ApkWebPHP\htdocs\Serenity\app\views\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f89b09e6db403_84700159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a24fa08a142ec299c258e6db70f52880614c766' => 
    array (
      0 => 'E:\\Studia\\5sem\\ApkWebPHP\\htdocs\\Serenity\\app\\views\\homepage.tpl',
      1 => 1602859162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89b09e6db403_84700159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16769189475f89b09e6d8726_63049692', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11612280965f89b09e6d9113_14671640', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_16769189475f89b09e6d8726_63049692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16769189475f89b09e6d8726_63049692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | Homepage <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_11612280965f89b09e6d9113_14671640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11612280965f89b09e6d9113_14671640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container" style="display: flex; flex-direction: row;align-items: center; padding: 2em;">
      <h2 class="display-4">discover<br/>&nbsp;&nbsp;discuss<br/>&nbsp;&nbsp;&nbsp;&nbsp;share.</h2>
      <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/homepageImage.png" style="width: 33%; margin-left: auto">
     </div>
<?php
}
}
/* {/block 'content'} */
}
