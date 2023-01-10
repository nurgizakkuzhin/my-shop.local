{* шаблон корзины *}

<h1>Корзина</h1>

{if ! $rsProducts}
    В корзине пусто
{else}
    <form action="/cart/order/" method="post">

            <h2>Данные заказа</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Наименование</th>
                <th>Количество</th>
                <th>Цена за еденицу</th>
                <th>Цена</th>
                <th>Действие</th>
            </tr>
            {foreach $rsProducts as $item name=products}
                <tr>
                    <td>{$smarty.foreach.products.iteration}</td>
                    <td><a href="/product/{$item['id']}/">{$item['name']}</a></td>
                    <td><input type="text" name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" value="1"
                               onchange="conversionPrice({$item['id']});"></td>
                    <td>
                        <span id="itemPrice_{$item['id']}" value="{$item['price']}">{$item['price']}</span>
                    </td>
                    <td>
                        <span id="itemRealPrice_{$item['id']}">
                            {$item['price']}
                        </span>
                    </td>
                    <td>
                        <a id="removeCart{$item['id']}"  href="#" onclick="removeFromCart({$item['id']});return false;">Удалить</a>
                        <a id="addCart_{$item['id']}" class="hideme" href="#" onclick="addToCart({$item['id']});return false;">Восстановить</a>
                    </td>
                </tr>
            {/foreach}
        </table>
    <input type="submit" value="Оформить заказ">
    </form>
{/if}