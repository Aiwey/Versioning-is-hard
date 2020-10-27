<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 20:14:37
  from 'E:\Studia\5sem\ApkWebPHP\htdocs\Serenity\app\views\adminPanelUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f946f0d059871_92011066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ee1a48ff281da93dcaa1824c60187d0225fd54' => 
    array (
      0 => 'E:\\Studia\\5sem\\ApkWebPHP\\htdocs\\Serenity\\app\\views\\adminPanelUsers.tpl',
      1 => 1603563238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f946f0d059871_92011066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1725871995f946f0d052bf3_44571474', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1725871995f946f0d052bf3_44571474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1725871995f946f0d052bf3_44571474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Manage Users </h1> <br/>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
      <th scope="col">Avatar</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idUser"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserLogin"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserPassword"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserRole"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserAvatarPath"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserDescription"];?>
</td>
                <td>
                    <form action="userDelete" method="post" >
                    <input type="hidden" name="idperson" value ="<?php echo $_smarty_tpl->tpl_vars['row']->value["idUser"];?>
">
                    <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Delete User">
                    </form>
                    </td>
   
                </tr>            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            
            </tbody>
</table>
<?php
}
}
/* {/block 'content'} */
}
