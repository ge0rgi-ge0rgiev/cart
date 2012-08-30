<div class="category">
    <h3><a href="cart.php">Cart({$count_items})</a></h3>
    <hr />
    <h3>Categories</h3>
    <ul>
        <li><a href="index.php">All</a></li>
        {foreach $categories as $category}
            <li><a href="?cat={$category['category_id']}">{$category['name']}</a></li>
        {/foreach}
    </ul>
    <hr />
    
    {if get_get('cat')}
        {foreach $categories as $category}
            {if $category['category_id'] == get_get('cat')}
                <h3>Products: {$category['name']}</h3>
            {/if}
        {/foreach}
    {else}
        <h3>Products: All</h3>
    {/if}
    
    
    {if empty($products)}
        <strong>There are no products in this category</strong>
    {else}
        {foreach $products as $product}
            <p>
                {$product['name']}<br />
                {$product['description']}<br />
                &dollar;{$product['price']|number_format:2}
                <a href="?add={$product['id']}">Add</a>
            </p>
        {/foreach}
    {/if}
</div>