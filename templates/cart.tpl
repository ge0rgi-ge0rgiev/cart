<p class="back">
    <a href="index.php"><< Back</a>
</p>
{if empty($rows)}
    Your cart is empty.
{else}
    <table border="1" class="cart_table">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Actions</th>
        </tr>

        {foreach $rows as $row}
            {assign var='amount' value=($row['price'] * $row|end)|number_format:2}
            <tr>
                <td>{$row['name']}</td>
                <td>{$row|end}</td>
                <td>&dollar;{$row['price']|number_format:2}</td>
                <td>&dollar;{$amount}</td>
                <td>
                    <a href="?add={$row['product_id']}"> [+] </a>
                    <a href="?rem={$row['product_id']}"> [-] </a>
                    <a href="?del={$row['product_id']}"> [delete] </a>
                </td>
            </tr>
        {/foreach}
        <tr>
            <td colspan="4">Total:</td>
            <td>&dollar;{$total_amount|number_format:2}</td>
        </tr>


    </table>

    <p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="georgi.georgiev.vn@gmail.com">
        <?php paypal_items(); ?>
        <!-- START ITEM -->
        {foreach $items as $item}
            <input type="hidden" name="item_number_{$item[0]}" value="{$item['product_id']}">
            <input type="hidden" name="item_name_{$item[0]}" value="{$item['name']}">
            <input type="hidden" name="amount_{$item[0]}" value="{$item['price']}">
            <input type="hidden" name="shipping_{$item[0]}" value="{$item['shipping']}">
            <input type="hidden" name="shipping2_{$item[0]}" value="{$item['shipping']}">
            <input type="hidden" name="quantity_{$item[0]}" value="{$item[1]}">
        {/foreach}
         <!-- END ITEM-->
        
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="amount" value="<?php echo $total; ?>">
        <input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit"
               alt="Make payments with PayPal - it's fast, free and secure!">
    </form>
</p>
{/if}
