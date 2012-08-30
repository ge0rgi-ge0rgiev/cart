<?php /* Smarty version Smarty-3.1.11, created on 2012-08-30 03:04:34
         compiled from "C:\wamp\www\cart\templates\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16192503ebeab41f544-95427388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c35d98aeb458c8356ba46fb7da3883834ed08706' => 
    array (
      0 => 'C:\\wamp\\www\\cart\\templates\\cart.tpl',
      1 => 1346295871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16192503ebeab41f544-95427388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503ebeab47c8a4_88055973',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'amount' => 0,
    'total_amount' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503ebeab47c8a4_88055973')) {function content_503ebeab47c8a4_88055973($_smarty_tpl) {?><p class="back">
    <a href="index.php"><< Back</a>
</p>
<?php if (empty($_smarty_tpl->tpl_vars['rows']->value)){?>
    Your cart is empty.
<?php }else{ ?>
    <table border="1" class="cart_table">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Actions</th>
        </tr>

        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable(number_format(($_smarty_tpl->tpl_vars['row']->value['price']*end($_smarty_tpl->tpl_vars['row']->value)),2), null, 0);?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                <td><?php echo end($_smarty_tpl->tpl_vars['row']->value);?>
</td>
                <td>&dollar;<?php echo number_format($_smarty_tpl->tpl_vars['row']->value['price'],2);?>
</td>
                <td>&dollar;<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</td>
                <td>
                    <a href="?add=<?php echo $_smarty_tpl->tpl_vars['row']->value['product_id'];?>
"> [+] </a>
                    <a href="?rem=<?php echo $_smarty_tpl->tpl_vars['row']->value['product_id'];?>
"> [-] </a>
                    <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['product_id'];?>
"> [delete] </a>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="4">Total:</td>
            <td>&dollar;<?php echo number_format($_smarty_tpl->tpl_vars['total_amount']->value,2);?>
</td>
        </tr>


    </table>

    <p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="georgi.georgiev.vn@gmail.com">
        <<?php ?>?php paypal_items(); ?<?php ?>>
        <!-- START ITEM -->
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <input type="hidden" name="item_number_<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
">
            <input type="hidden" name="item_name_<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
            <input type="hidden" name="amount_<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
            <input type="hidden" name="shipping_<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['shipping'];?>
">
            <input type="hidden" name="shipping2_<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['shipping'];?>
">
            <input type="hidden" name="quantity_<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
">
        <?php } ?>
         <!-- END ITEM-->
        
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="amount" value="<<?php ?>?php echo $total; ?<?php ?>>">
        <input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit"
               alt="Make payments with PayPal - it's fast, free and secure!">
    </form>
</p>
<?php }?>
<?php }} ?>