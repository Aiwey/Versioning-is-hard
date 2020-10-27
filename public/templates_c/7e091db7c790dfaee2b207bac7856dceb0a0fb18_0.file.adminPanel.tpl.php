<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 19:05:03
  from 'C:\xampp\htdocs\Serenity\app\views\adminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f98614f878411_21264367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e091db7c790dfaee2b207bac7856dceb0a0fb18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\adminPanel.tpl',
      1 => 1603532970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f98614f878411_21264367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3018318475f98614f857004_46539074', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18073512915f98614f85cac8_26775090', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_3018318475f98614f857004_46539074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_3018318475f98614f857004_46539074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | admin panel<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_18073512915f98614f85cac8_26775090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18073512915f98614f85cac8_26775090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
   
    <div class="container" style="display: flex; flex-direction: row;align-items: center; padding: 2em;">
     
    <p> What do you want to tinker with today? </p>
    <ul>
        <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'adminUsers'),$_smarty_tpl ) );?>
"><li> users </li></a>
        <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'adminAlbums'),$_smarty_tpl ) );?>
"><li> albums </li></a>
        <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'adminLabels'),$_smarty_tpl ) );?>
"><li> labels </li></a>
        <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'adminArtists'),$_smarty_tpl ) );?>
"><li> artists</li> </a>
        <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'adminComments'),$_smarty_tpl ) );?>
"><li> comments</li> </a>
        <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'adminBands'),$_smarty_tpl ) );?>
"><li> bands</li> </a>
    </ul>
    </div></div></main>
<?php
}
}
/* {/block 'content'} */
}
