<?php /* Smarty version Smarty-3.1.11, created on 2012-08-24 13:19:44
         compiled from "C:\wamp\www\icard\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1554650377f700a01d8-00760706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d96ecb2d402056d6ae0b318d0009d353552421f' => 
    array (
      0 => 'C:\\wamp\\www\\icard\\templates\\footer.tpl',
      1 => 1345245737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1554650377f700a01d8-00760706',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50377f700c2122_51290916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50377f700c2122_51290916')) {function content_50377f700c2122_51290916($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\icard\\includes\\Smarty\\libs\\plugins\\modifier.date_format.php';
?></div>
<div id="footer">Copyright <?php echo smarty_modifier_date_format(time(),"%Y");?>
, Georgi Georgiev</div>
</body>
</html>
<?php }} ?>