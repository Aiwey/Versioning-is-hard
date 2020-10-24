<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 20:15:01
  from 'C:\xampp\htdocs\Serenity\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f834ba58ceea8_14019088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19eddc8218c433bf746be14d586cc5b190e83f44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Serenity\\app\\views\\templates\\main.tpl',
      1 => 1601773154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f834ba58ceea8_14019088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5221073935f834ba581fec8_75591494', 'header');
?>
</title>
  <!--load bootstrap & other -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"><?php echo '</script'; ?>
>    
  <!--load fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spartan">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
      font-family: "Montserrat";
      font-weight: 300;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
  <!-- nav -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #ffffff;">
  <a class="navbar-brand" style="font-family: 'Spartan'; letter-spacing: 0.15em; margin-left: 10%;"href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'main'),$_smarty_tpl ) );?>
">serenity .</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto" style = "margin-right: 10em;">
     <?php if ((\core\RoleUtils::inRole('admin'))) {?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'admin'),$_smarty_tpl ) );?>
">Admin Panel</a>
      </li>
      <?php }?>
      <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Browse</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'browseBands'),$_smarty_tpl ) );?>
">Bands</a>
          <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'browseAlbums'),$_smarty_tpl ) );?>
">Albums</a>
          <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'browseLabels'),$_smarty_tpl ) );?>
">Labels</a>
        <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'browseTracks'),$_smarty_tpl ) );?>
">Tracks</a>
        </div>
      </li>
      <?php }?>
    </ul>
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8322472155f834ba5858925_36207912', 'search');
?>

    <form class="form-inline">
     
        <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
"><button class="btn btn-sm btn-outline-secondary" style ="margin-right: 1em;"type="button">log out</button></a>
        <?php } else { ?>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'loginShow'),$_smarty_tpl ) );?>
"><button class="btn btn-sm btn-outline-secondary" style ="margin-right: 1em;"type="button">sign in</button></a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'registerShow'),$_smarty_tpl ) );?>
"><button class="btn btn-sm btn-outline-secondary" style ="margin-right: 1em;background-color:#dbdbdb;" type="button">sign up</button></a>
        <?php }?>
        </form>
</nav>
   <main role="main">
         <div class="jumbotron" style="background-color: #f5f5f5;">
          
  <!-- inside -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15141364675f834ba5879140_66197456', 'content');
?>

<br/>
<section>
    <p><?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>Jesteś zalogowany <?php } else { ?>Jesteś niezalogowany<?php }?></p>
                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                    <div class="box fit">
                    <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    </div>
                    <?php }?>
                    </section>
            
         </div>
   </main>
<footer class="container">
    <p>&copy; Serenity. - Ewa Zielonka, 2020<br/> Created using <b><a href="http://amelia-framework.eu">Amelia</a></b> framework, by <a href="http://kudlacik.eu">Przemysław Kudłacik.</a><br/> Homepage Illustration: <a href="https://pl.freepik.com/pikisuperstar">pikisuperstar</a>, <a href="https://pl.freepik.com/darmowe-wektory/motyw-ilustracyjny-z-ludzmi-sluchajacymi-muzyki_5778617.htm#page=1&query=headphones&position=26">designed by freepic.</a></p>
</footer>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="../assets/js/vendor/jquery.slim.min.js"><\/script>')<?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</html>
<?php }
/* {block 'header'} */
class Block_5221073935f834ba581fec8_75591494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_5221073935f834ba581fec8_75591494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jumbotron Template · Bootstrap<?php
}
}
/* {/block 'header'} */
/* {block 'search'} */
class Block_8322472155f834ba5858925_36207912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_8322472155f834ba5858925_36207912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

           <form class="form-inline" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'trackList','p'=>'1'),$_smarty_tpl ) );?>
" method ="post">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="sf_trackname" >
    <button class="btn btn-sm btn-outline-secondary" type="submit" style="margin-right: 1em;" >Search</button>
           </form>
           <?php
}
}
/* {/block 'search'} */
/* {block 'content'} */
class Block_15141364675f834ba5879140_66197456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15141364675f834ba5879140_66197456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .. <?php
}
}
/* {/block 'content'} */
}
