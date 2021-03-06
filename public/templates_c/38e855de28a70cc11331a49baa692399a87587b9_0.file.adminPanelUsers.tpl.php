<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 23:05:43
  from 'C:\xampp\htdocs\Serenity\app\views\adminPanelUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9899b7d2d6d9_87981435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e855de28a70cc11331a49baa692399a87587b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\adminPanelUsers.tpl',
      1 => 1603836313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9899b7d2d6d9_87981435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8382574625f9899b7ce4625_90609469', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_8382574625f9899b7ce4625_90609469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8382574625f9899b7ce4625_90609469',
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
                    <form action="userDelete" method="post" style="margin: 1em;">
                    <input type="hidden" name="idperson" value ="<?php echo $_smarty_tpl->tpl_vars['row']->value["idUser"];?>
">
                    <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Delete User" onsubmit="confirmLink('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"UserDelete"),$_smarty_tpl ) );?>
','Are you sure about that?')">
                    </form>
                    <form action="userEdit" method="post"  style="margin: 1em;">
                    <input type="hidden" name="idperson" value ="<?php echo $_smarty_tpl->tpl_vars['row']->value["idUser"];?>
">
                    <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Edit User">
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
