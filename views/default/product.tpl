{* Страница продукта *}
<h3>{$rsProduct['name']}</h3>

<img src="/images/products/{$rsProduct['image']}" width="575">
Стоимость: {$rsProduct['price']}


<a id="removeCart{$rsProduct['id']}" {if !$itemInCart}class="hideme"{/if} href="#" onclick="removeFromCart
        ({$rsProduct['id']});
return false;">Удалить из
    корзины</a>
<a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"{/if} href="#" onclick="addToCart({$rsProduct['id']});
return false;
        ">Добавить в
    корзину</a>
<p>Описание: <br>
    {$rsProduct['description']}
</p>