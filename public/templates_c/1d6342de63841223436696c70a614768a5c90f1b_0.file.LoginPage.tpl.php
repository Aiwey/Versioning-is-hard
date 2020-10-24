<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 16:31:53
  from 'E:\Studia\5sem\ApkWebPHP\htdocs\Serenity\app\views\LoginPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f89aed9124f36_01806297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6342de63841223436696c70a614768a5c90f1b' => 
    array (
      0 => 'E:\\Studia\\5sem\\ApkWebPHP\\htdocs\\Serenity\\app\\views\\LoginPage.tpl',
      1 => 1602858018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89aed9124f36_01806297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3605566995f89aed9122385_22750243', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19754822525f89aed9122a63_35747972', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_3605566995f89aed9122385_22750243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_3605566995f89aed9122385_22750243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | login <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_19754822525f89aed9122a63_35747972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19754822525f89aed9122a63_35747972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br/></br>
    <form action="login" method="post">
  <div class="form-group">
    <label for="id_login">Your Login</label>
    <input type="login" class="form-control" id="id_login" name="login" value ="<?php echo $_smarty_tpl->tpl_vars['log']->value->login;?>
" aria-describedby="loginHelp" placeholder="Enter Login">
    <small id="loginhelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="id_password" value="<?php echo $_smarty_tpl->tpl_vars['log']->value->password;?>
" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}
}
/* {/block 'content'} */
}
