<?php /* Smarty version Smarty-3.1.11, created on 2012-08-25 01:09:28
         compiled from "C:\wamp\www\icard\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55865037e7ec5af4d8-58648360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308d93dc9a0940a850aa1e129d86cc4e020cd4e6' => 
    array (
      0 => 'C:\\wamp\\www\\icard\\templates\\index.tpl',
      1 => 1345856967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55865037e7ec5af4d8-58648360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5037e7ec603c13_81466756',
  'variables' => 
  array (
    'message' => 0,
    'photos' => 0,
    'photo' => 0,
    'pagination' => 0,
    'order_by' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5037e7ec603c13_81466756')) {function content_5037e7ec603c13_81466756($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\icard\\includes\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><form action="index.php" method="POST">
    <label for="title">Find pictures by title:</label>
    <input type="text" name="title" id="title" />
    <input type="submit" value="Search" name="submit" />
</form>


<br />

<div class="sort" >
    Sort by title:   
    <a href="?sort=title&order=ASC">[&uarr;]</a> 
    <a href="?sort=title&order=DESC">[&darr;]</a>  
</div>
<br />
<div class="sort" >
    Sort by date:  
    <a href="?sort=created&order=ASC">[&uarr;]</a> 
    <a href="?sort=created&order=DESC">[&darr;]</a>  
</div>

<div style="clear: both;"></div>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
<a href="image_details.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value->id;?>
" class="pics" >
    <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->thumb_path();?>
"  />
    <div><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value->title,30);?>
</div>
    <span>click</span>
</a>
<?php } ?>
<?php if (empty($_smarty_tpl->tpl_vars['photos']->value)){?>
    <h4>No Results.</h4>
<?php }?>

<div id="pagination">

<?php if ($_smarty_tpl->tpl_vars['pagination']->value->total_pages()>1){?>
    
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->has_previous_page()){?>
        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->previous_page();?>
&sort=<?php echo $_smarty_tpl->tpl_vars['order_by']->value[1];?>
&order=<?php echo $_smarty_tpl->tpl_vars['order_by']->value[2];?>
">&laquo; Previous</a>
    <?php }?>
    
     
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pagination']->value->total_pages()) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?> 
        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration']==$_smarty_tpl->tpl_vars['current_page']->value){?>
            <span class="selected"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</span>
        <?php }else{ ?>
            <a href="index.php?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
&sort=<?php echo $_smarty_tpl->tpl_vars['order_by']->value[1];?>
&order=<?php echo $_smarty_tpl->tpl_vars['order_by']->value[2];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</a>
        <?php }?>
    <?php endfor; endif; ?>
    
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->has_next_page()){?>
        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->next_page();?>
&sort=<?php echo $_smarty_tpl->tpl_vars['order_by']->value[1];?>
&order=<?php echo $_smarty_tpl->tpl_vars['order_by']->value[2];?>
">Next &raquo;</a>
    <?php }?>
    
<?php }?>
</div>
<br />
<a href="photo_upload.php">Upload a new picture</a>
<?php }} ?>