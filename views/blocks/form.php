<div id="formWrapper">
    <h1 class="block-title">Бесплатный расчёт стоимости партии за 50 минут</h1>
    <div id="formContent" class="content">
        <form action="/sendmail" enctype="multipart/form-data" method="post">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            <div class="grid-c-3">
                <input type="text" name="name" placeholder="ВВЕДИТЕ ИМЯ">
                <input type="text" name="number" placeholder="ВВЕДИТЕ ТЕЛЕФОН">
                <input type="text" name="email" placeholder="ВВЕДИТЕ E-MAIL">
            </div>
            <br>
            <textarea name="ordertext" rows="3" placeholder="НАПИШИТЕ В ЭТО ПОЛЕ ВАШ ЗАКАЗ"></textarea>
            <p>Прикрепите заявку и свои реквизиты - и мы сразу сможем выставить Вам счёт.</p>
            <label for="zayavka"><img src="/assets/img/contract.png" alt="icon"> ПРИКРЕПИТЕ ЗАЯВКУ</label>
            <label for="rekvizits"><img src="/assets/img/clipboard.png" alt="icon"> ПРИКРЕПИТЕ РЕКВИЗИТЫ</label>
            <input name="zayavka" id="zayavka" type="file">
            <input name="rekvizits" id="rekvizits" type="file"><br><br>
            <button type="submit"><img src="/assets/img/message.png" alt="icon"> Отправить</button>
        </form>
    </div>
</div>