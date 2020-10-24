<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 20:15:01
  from 'C:\xampp\htdocs\Serenity\app\views\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f834ba58000b4_43420713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc32cceec4e76c13c253876b1a9b1ef766d0a356' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\homepage.tpl',
      1 => 1601318214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f834ba58000b4_43420713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7949007675f834ba57f36b2_80307769', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20113418905f834ba57faa44_27284930', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_7949007675f834ba57f36b2_80307769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_7949007675f834ba57f36b2_80307769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | Homepage <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_20113418905f834ba57faa44_27284930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20113418905f834ba57faa44_27284930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container" style="display: flex; flex-direction: row;align-items: center; padding: 2em;">
      <h2 class="display-4">discover<br/>&nbsp;&nbsp;discuss<br/>&nbsp;&nbsp;&nbsp;&nbsp;share.</h2>
      <img src="assets/images/homepageImage.png" style="width: 33%; margin-left: auto">
     </div>
<?php
}
}
/* {/block 'content'} */
}
