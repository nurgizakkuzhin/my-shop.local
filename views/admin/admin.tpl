<div id="blockNewCategory">
    Новая категория:
    <input type="text" name="newCategoryName" id="newCategoryName" value=""><br><br>

    Является подкатегорией для
    <select name="generalCatId">
        <option value="0">Главная Категория
            {foreach $rsCategories as $item}
                <option value="{$item['id']}">{$item['name']}</option>
            {/foreach}
        </option>
    </select><br>
    <input type="button" onclick="newCategory();" value="Добавить категорию">
</div>