<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 12:31:02
  from 'C:\XAMPP\htdocs\Serenity\app\views\TrackList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79a46655a086_04347592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42475a2a3dbb246f36c290d590c3d529a18cb062' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\Serenity\\app\\views\\TrackList.tpl',
      1 => 1601807461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79a46655a086_04347592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6911434435f79a4663e4184_41933505', 'search');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18577974375f79a4664002a5_02794448', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'search'} */
class Block_6911434435f79a4663e4184_41933505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_6911434435f79a4663e4184_41933505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id='search'>
  <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'trackList','p'=>'1'),$_smarty_tpl ) );?>
">
      <input class="form-control mr-sm-2" type="text" placeholder="Search Tracks" aria-label="Search Tracks" name="sf_trackname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->trackName;?>
"/>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        </section>
      <?php
}
}
/* {/block 'search'} */
/* {block 'content'} */
class Block_18577974375f79a4664002a5_02794448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18577974375f79a4664002a5_02794448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table table-hover">
<thead>
	<tr>
		<th scope="col">#</th>
		<th scope="col">Name</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['track']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['t']->value["idTrack"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['t']->value["TrackName"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?><li class="page-item"><a class="page-link">Previous</a></li>
    <?php } else { ?><li class="page-item"><a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable1-1),$_smarty_tpl ) );?>
">Previous</a></li><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['offset']->value-($_smarty_tpl->tpl_vars['size']->value*3)) >= 0) {?><li class="page-item"><a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable2-3),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
</a></li><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['offset']->value-($_smarty_tpl->tpl_vars['size']->value*2)) >= 0) {?><li class="page-item"><a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable3-2),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
</a></li><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['offset']->value-($_smarty_tpl->tpl_vars['size']->value*1)) >= 0) {?><li class="page-item"><a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable4-1),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a></li><?php }?>
    <li class="page-item active">
      <a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable5 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable5),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 <span class="sr-only">(current)</span></a>
    </li>
    <?php if (($_smarty_tpl->tpl_vars['offset']->value+($_smarty_tpl->tpl_vars['size']->value*1)+1) < $_smarty_tpl->tpl_vars['max']->value) {?><li class="page-item"><a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable6+1),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['offset']->value+($_smarty_tpl->tpl_vars['size']->value*2)+1) < $_smarty_tpl->tpl_vars['max']->value) {?><li class="page-item"><a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable7+2),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
</a></li><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['offset']->value+($_smarty_tpl->tpl_vars['size']->value*3)+1) < $_smarty_tpl->tpl_vars['max']->value) {?><li class="page-item"><a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable8 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable8+3),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
</a></li><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['max_page']->value) {?>
    <li class="page-item disabled"><a class="page-link">Next</a>
    </li>
    <?php } else { ?>
      <li class="page-item">
      <a class="page-link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable9 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trackList",'p'=>$_prefixVariable9+1),$_smarty_tpl ) );?>
">Next</a>
    </li>  
    <?php }?>
  </ul>
</nav>

<?php
}
}
/* {/block 'content'} */
}
