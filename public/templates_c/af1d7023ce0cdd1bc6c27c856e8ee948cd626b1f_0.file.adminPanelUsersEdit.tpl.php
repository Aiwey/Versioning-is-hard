<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 19:47:36
  from 'C:\xampp\htdocs\Serenity\app\views\adminPanelUsersEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f986b486bb463_83569812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af1d7023ce0cdd1bc6c27c856e8ee948cd626b1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\adminPanelUsersEdit.tpl',
      1 => 1603824452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f986b486bb463_83569812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7710049045f986b486a78c6_36920164', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_7710049045f986b486a78c6_36920164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7710049045f986b486a78c6_36920164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Edit User </h1> <br/>
    
    <form action="UserEdit">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['records']->value["UserLogin"];?>
">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['records']->value["UserRole"];?>
">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['records']->value["UserAvatarPath"];?>
">
        <input type="text" value ="<?php echo $_smarty_tpl->tpl_vars['records']->value["UserDescription"];?>
">
    </form>
       
<?php
}
}
/* {/block 'content'} */
}
