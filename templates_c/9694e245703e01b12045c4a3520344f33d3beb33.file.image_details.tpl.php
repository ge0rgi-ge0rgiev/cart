<?php /* Smarty version Smarty-3.1.11, created on 2012-08-25 02:54:23
         compiled from "C:\wamp\www\icard\templates\image_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27033503819900272f0-19357748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9694e245703e01b12045c4a3520344f33d3beb33' => 
    array (
      0 => 'C:\\wamp\\www\\icard\\templates\\image_details.tpl',
      1 => 1345863245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27033503819900272f0-19357748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503819900283f5_93138473',
  'variables' => 
  array (
    'photo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503819900283f5_93138473')) {function content_503819900283f5_93138473($_smarty_tpl) {?>
<a href="index.php">&laquo; Back</a><br />
<br />

<div style="margin-left: 20px;">
    <p><b>Uploaded:</b> <?php echo date_as_text($_smarty_tpl->tpl_vars['photo']->value->created);?>
</p>
    <p><b>Title:</b> <?php echo $_smarty_tpl->tpl_vars['photo']->value->title;?>
</p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->image_path();?>
" />
    <br />
    <br />
    <b><a href="delete_picture.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value->id;?>
" onclick="return confirm('Are you sure?')" >Delete this picture</a></b>
    
    <hr />
    <p><h3>Decription:</h3></p>
    <div id="desc"><?php echo $_smarty_tpl->tpl_vars['photo']->value->description;?>
</div>
</div>


<?php }} ?>