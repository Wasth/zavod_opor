<form action="" method="post">
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
    <textarea placeholder="Вставьте таблицу сюда" class='form-control' name="characs" id="characs" cols="30" rows="10"></textarea><br>
    <button class="btn btn-primary" type="submit">Установить характеристики</button>
</form>