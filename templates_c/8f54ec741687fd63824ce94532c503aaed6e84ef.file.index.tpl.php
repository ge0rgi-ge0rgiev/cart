<?php /* Smarty version Smarty-3.1.11, created on 2012-08-30 01:38:00
         compiled from "C:\wamp\www\cart\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7665503e9763637231-41218223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f54ec741687fd63824ce94532c503aaed6e84ef' => 
    array (
      0 => 'C:\\wamp\\www\\cart\\templates\\index.tpl',
      1 => 1346290679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7665503e9763637231-41218223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503e9763696fe0_34170927',
  'variables' => 
  array (
    'count_items' => 0,
    'categories' => 0,
    'category' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503e9763696fe0_34170927')) {function content_503e9763696fe0_34170927($_smarty_tpl) {?><div class="category">
    <h3><a href="cart.php">Cart(<?php echo $_smarty_tpl->tpl_vars['count_items']->value;?>
)</a></h3>
    <hr />
    <h3>Categories</h3>
    <ul>
        <li><a href="index.php">All</a></li>
        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
            <li><a href="?cat=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
        <?php } ?>
    </ul>
    <hr />
    
    <?php if (get_get('cat')){?>
        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id']==get_get('cat')){?>
                <h3>Products: <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h3>
            <?php }?>
        <?php } ?>
    <?php }else{ ?>
        <h3>Products: All</h3>
    <?php }?>
    
    
    <?php if (empty($_smarty_tpl->tpl_vars['products']->value)){?>
        <strong>There are no products in this category</strong>
    <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
<br />
                &dollar;<?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price'],2);?>

                <a href="?add=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">Add</a>
            </p>
        <?php } ?>
    <?php }?>
</div><?php }} ?>