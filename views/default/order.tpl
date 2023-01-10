{* страница заказа*}

<h2>Данные заказа</h2>
<form id="frmOrder" action="/cart/saveorder/" method="post">
    <table>
        <tr>
            <th>№</th>
            <th>Наименование</th>
            <th>Количество</th>
            <th>Цена за еденицу</th>
            <th>Стоимость</th>
        </tr>
        {foreach $rsProducts as $item name=products}
            <tr>
                <td>{$smarty.foreach.products.iteration}</td>
                <td><a href="/product/{$item['id']}/">{$item['name']}</a></td>
                <td>
                    <span id="itemCnt_{$item['id']}">
                        <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}">
                        {$item['cnt']}
                    </span>
                </td>
            </tr>
        {/foreach}
    </table>
</form>