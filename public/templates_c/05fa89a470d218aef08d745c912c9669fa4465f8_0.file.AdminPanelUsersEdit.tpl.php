<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 22:41:32
  from 'C:\xampp\htdocs\Serenity\app\views\AdminPanelUsersEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f98940c8650e6_78878575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05fa89a470d218aef08d745c912c9669fa4465f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\AdminPanelUsersEdit.tpl',
      1 => 1603834890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f98940c8650e6_78878575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20211014165f98940c8361d2_09863566', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_20211014165f98940c8361d2_09863566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20211014165f98940c8361d2_09863566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Edit User </h1> <br/>
    
    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"userSave"),$_smarty_tpl ) );?>
" method = "post" >
        <div class="form-group">
            <label for="userLogin"> User Login </label>
        <input type="text" name = "userLogin" id="userLogin" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->userLogin;?>
">
        </div>
        <div class="form-group">
            <label for="UserAvatarPath"> User Avatar Path </label>
        <input type="text" id="UserAvatarPath" name ="UserAvatarPath" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->UserAvatarPath;?>
">
         </div>
        <div class="form-group">
            <label for="UserDescription"> User Description </label>
        <input type="text" id="UserDescription" name = "UserDescription" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->UserDescription;?>
">
         </div>
        <div class="form-group">
            <label for="UserRole"> User Role </label>
        <input type="text" name = "UserRole" value ="<?php echo $_smarty_tpl->tpl_vars['form']->value->UserRole;?>
">
         </div>
        <input type="hidden" name="idperson" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
        <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Edit User">
    </form>
       
<?php
}
}
/* {/block 'content'} */
}
