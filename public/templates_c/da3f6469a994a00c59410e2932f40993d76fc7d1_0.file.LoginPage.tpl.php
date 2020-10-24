<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 10:00:59
  from 'C:\XAMPP\htdocs\Serenity\app\views\LoginPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f743b3b1d3753_96947105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da3f6469a994a00c59410e2932f40993d76fc7d1' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\Serenity\\app\\views\\LoginPage.tpl',
      1 => 1601350614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f743b3b1d3753_96947105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11744430955f743b3b1b1936_98891730', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12181910745f743b3b1b9175_97777876', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_11744430955f743b3b1b1936_98891730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_11744430955f743b3b1b1936_98891730',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | login <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_12181910745f743b3b1b9175_97777876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12181910745f743b3b1b9175_97777876',
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
