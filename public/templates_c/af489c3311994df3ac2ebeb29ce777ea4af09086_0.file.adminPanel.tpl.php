<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 19:49:43
  from 'E:\Studia\5sem\ApkWebPHP\htdocs\Serenity\app\views\adminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f946937438056_52087402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af489c3311994df3ac2ebeb29ce777ea4af09086' => 
    array (
      0 => 'E:\\Studia\\5sem\\ApkWebPHP\\htdocs\\Serenity\\app\\views\\adminPanel.tpl',
      1 => 1603561771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f946937438056_52087402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21135404395f946937435727_03064917', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1747219675f946937435e07_24972634', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_21135404395f946937435727_03064917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_21135404395f946937435727_03064917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | admin panel<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1747219675f946937435e07_24972634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1747219675f946937435e07_24972634',
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
