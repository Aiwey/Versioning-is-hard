<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-18 15:03:08
  from 'C:\XAMPP\htdocs\Serenity\app\views\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8c3d0ce30052_17079822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c814f0ffaa9288b202ea49b6e19f3d8af2e0a0' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\Serenity\\app\\views\\homepage.tpl',
      1 => 1602826762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8c3d0ce30052_17079822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5048405115f8c3d0cda4799_19460610', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20991448995f8c3d0cdb3e99_81425070', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_5048405115f8c3d0cda4799_19460610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_5048405115f8c3d0cda4799_19460610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | Homepage <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_20991448995f8c3d0cdb3e99_81425070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20991448995f8c3d0cdb3e99_81425070',
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
