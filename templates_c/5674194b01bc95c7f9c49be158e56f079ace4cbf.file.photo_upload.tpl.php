<?php /* Smarty version Smarty-3.1.11, created on 2012-08-24 13:33:28
         compiled from "C:\wamp\www\icard\templates\photo_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:503850377e72250f06-47384866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5674194b01bc95c7f9c49be158e56f079ace4cbf' => 
    array (
      0 => 'C:\\wamp\\www\\icard\\templates\\photo_upload.tpl',
      1 => 1345815203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503850377e72250f06-47384866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50377e722a1db8_66190947',
  'variables' => 
  array (
    'message' => 0,
    'max_file_size' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50377e722a1db8_66190947')) {function content_50377e722a1db8_66190947($_smarty_tpl) {?><h2>Photo Upload</h2>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<form acrtion="photo_upload.php" method="POST" enctype="multipart/form-data">
    <!-- Max upload filesize - 1MB -->
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $_smarty_tpl->tpl_vars['max_file_size']->value;?>
" />
    <label for="title" >Title:</label>
    <br />
    <input type="text" id="title" name="title" /></p>
    <input type="file" name="image" /></p>
    <label for="description" >Description:</label>
    <br />
    <textarea name="description" id="description" rows="5" cols="20" ></textarea></p>
    <input type="submit" value="Upload" name="submit" />
</form><?php }} ?>