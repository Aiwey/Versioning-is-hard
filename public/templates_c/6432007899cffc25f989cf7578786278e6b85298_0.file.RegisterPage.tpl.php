<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 16:58:56
  from 'E:\Studia\5sem\ApkWebPHP\htdocs\Serenity\app\views\RegisterPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f89b530323947_61230558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6432007899cffc25f989cf7578786278e6b85298' => 
    array (
      0 => 'E:\\Studia\\5sem\\ApkWebPHP\\htdocs\\Serenity\\app\\views\\RegisterPage.tpl',
      1 => 1602858018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89b530323947_61230558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13529462595f89b530320db1_34256520', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6350868975f89b530321490_21817750', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_13529462595f89b530320db1_34256520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13529462595f89b530320db1_34256520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | register <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_6350868975f89b530321490_21817750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6350868975f89b530321490_21817750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br/></br>
    <h1> Create an serenity account </h1>
    <form action="register" method="post">
  <div class="form-group">
    <label for="id_login">Your Login</label>
    <input type="login" class="form-control" id="id_login" name="login" value ="<?php echo $_smarty_tpl->tpl_vars['reg']->value->login;?>
" aria-describedby="loginHelp" placeholder="Enter Login">
    <small id="loginhelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="id_password" value="<?php echo $_smarty_tpl->tpl_vars['reg']->value->password;?>
" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}
}
/* {/block 'content'} */
}
