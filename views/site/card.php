<?php

use yii\helpers\Url;

$this->title = $item->text;
?>


<div id="cardBlock">
    <div id="cardContent" class="content">
        <div id="breadcrumbs">
            <a href="/">Опоры</a> > <span id="oporaName"><?= $item->text ?></span>
        </div>
        <div class="grid-c-2">
            <div>
                <div class="slider" id="curItemGallery">
                    <div id="slide">
                        <img src="<?= $item->getImgUrl() ?>">
                    </div>
                    <div id="additionalPics">
                        <?php foreach($item->additionalPics as $adpic): ?>
                            <div><img src="<?= $adpic->getImgUrl() ?>"></div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div id="info">
                <h1><?= $item->text ?></h1>
                <div id="adv" class="grid-c-2">
                    <div>
                        <div class="icon" style="background-image: url('/assets/img/1adv.png');"></div>
                        <div class="icon-text"><p>Соответствие ГОСТ, ОСТ, СТП</p></div>
                    </div>
                    <div>
                        <div class="icon" style="background-image: url('/assets/img/2adv.png');"></div>
                        <div class="icon-text"><p>Площадь завода – 3 500 м2.</p></div>
                    </div>
                    <div>
                        <div class="icon" style="background-image: url('/assets/img/3adv.png');"></div>
                        <div class="icon-text"><p> Специальные цены и скидки на объемы</p></div>
                    </div>
                    <div>
                        <div class="icon" style="background-image: url('/assets/img/4adv.png');"></div>
                        <div class="icon-text"><p>В штате работает более 50 человек.</p></div>
                    </div>
                    <div>
                        <div class="icon" style="background-image: url('/assets/img/5adv.png');"></div>
                        <div class="icon-text"><p>Срок изготовления от 1 дня</p></div>
                    </div>
                    <div>
                        <div class="icon" style="background-image: url('/assets/img/6adv.png');"></div>
                        <div class="icon-text"><p>За 2017 год выпустили более 3 000 тонн продукции.</p></div>
                    </div>
                    <div>
                        <div class="icon" style="background-image: url('/assets/img/7adv.png');"></div>
                        <div class="icon-text"><p>Напрямую с завода без наценок</p></div>
                    </div>
                    <div>
                        <div class="icon" style="background-image: url('/assets/img/8adv.png');"></div>
                        <div class="icon-text"><p>Напрямую с завода без наценок</p></div>
                    </div>
                </div>
                <div id="characs">
                    <?php if($varieties): ?>
                            <h1>Мы продаем <?= $item->text ?> следующих типов</h1>
                            <div>
                                <?php foreach($varieties as $variety): ?>
                                    <a class="black" href="<?= Url::toRoute(['variety/'.$variety->id]) ?>">
                                        <h1 class="inline black"><?= $variety->text ?></h1>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->render('/blocks/form') ?>
</div>
<div id="photosWrapper">
    <h1 class="block-title">ФОТОГРАФИИ ГОТОВОЙ ПРОДУКЦИИ</h1>
    <div id="photoSliderWrapper">
        <div id="photoSlider" data-slider-id="1" class="content">
            <div class="arrow leftArrow"><img src="/assets/img/left.png"></div>
            <div class='slides'>
                <div class="slidesBlock">
                    <div><div style="background-image: url('/assets/img/slider1/1slide.jpg')"></div></div>
                    <div><div style="background-image: url('/assets/img/slider1/2slide.jpg')"></div></div>
                    <div><div style="background-image: url('/assets/img/slider1/3slide.jpg')"></div></div>
                </div>
            </div>
            <div class="arrow rightArrow"><img src="/assets/img/right.png"></div>
        </div>
    </div>
</div>

<div id="ownDesignDepartWrapper">
    <h1 class="block-title">Собственный проектировочный отдел</h1>
    <div id="ownDesignDepart">
        <div id="ownDesignDepartContent" class="content">
            <div>
                <img src="/assets/img/scheme1.png">
            </div>
            <div>
                <div></div>
                <img src="/assets/img/scheme2.png">
            </div>
        </div>
    </div>
</div>
<div id="passportsWrapper">
    <h1 class="block-title">ПАСПОРТА НА ИЗДЕЛИЯ И СЕРТИФИКАТЫ</h1>
    <h2>на металл прилагаются к каждой партии продукции</h2>
    <div id="passports" class="content">
        <img src="/assets/img/passports.jpg">
    </div>
</div>
<div id="deadlinesWrapper">
    <div id="deadlinesContent" class="content">
        <h1 class="block-title">Сроки работы</h1>
        <h2>Средний срок производства партии:<br>
            7–10 дней против 20–30 у большинства производителей</h2>
        <img src="/assets/img/deadlines.png">
    </div>
</div>
<div id="deliveryWrapper">
    <h1 class="block-title">ДОСТАВКА ВО ВСЕ УГОЛКИ РОССИИ</h1>
    <h2>Через ТК ПЭК, Деловые Линии, Жэлдорэкспедиция,<br>
        а также широкую сеть водителей попутными грузами</h2>
    <div id="deliveryBg">
        <div id="deliveryContent" class="content">
            <p>
                До Тобольска – 2 дня<br>
                до Нового Уренгоя – 5 дней<br>
                До Екатеринбурга и Челябинска – 1-2 дня<br>
                Среднее время доставки до Москвы – 2 дня<br>
            </p>
            <img src="/assets/img/delivery.png">
        </div>
    </div>
</div>
<div id="allTypesWrapper">
    <h1 class="block-title">РАБОТАЕМ СО ВСЕМИ ТИПАМИ СТАЛИ</h1>
    <div id="allTypesContentWrapper">
        <div id="allTypesContent" class="content">
            <img src="/assets/img/alltypepics.png">
            <p>
                <span>Ст3,</span><br>
                <span>Ст20,</span><br>
                <span>09Г2С,</span><br>
                <span>08Х18Н10,</span><br>
                <span>12Х18Н10Т,</span><br>
                <span>13Х17Н12М2Т,</span><br>
                <span>30Х13 и т.д.</span>
            </p>
        </div>
    </div>
</div>
<div id="partnersWrapper">
    <h1 class="block-title">Поставляем опоры на объекты</h1>
    <div id="partnersGrid" class="content">
        <div><img src="/assets/img/partners/1pic.jpg" alt=""></div>
        <div><img src="/assets/img/partners/2pic.png" alt=""></div>
        <div><img src="/assets/img/partners/3pic.png" alt=""></div>
        <div><img src="/assets/img/partners/4pic.png" alt=""></div>
        <div><img src="/assets/img/partners/5pic.png" alt=""></div>
        <div><img src="/assets/img/partners/6pic.png" alt=""></div>
        <div><img src="/assets/img/partners/7pic.png" alt=""></div>
        <div><img src="/assets/img/partners/8pic.png" alt=""></div>
        <div><img src="/assets/img/partners/9pic.png" alt=""></div>
        <div><img src="/assets/img/partners/10pic.png" alt=""></div>
        <div><img src="/assets/img/partners/11pic.png" alt=""></div>
        <div><img src="/assets/img/partners/12pic.png" alt=""></div>
    </div>
</div>
<div id="historyWrapper">
    <h1 class="block-title">История отгрузок</h1>
    <div id="historyGrid" class="content">
        <div class="story-img"><img src="/assets/img/history1.jpg"></div>
        <div class="story-text">
            <h3>АО «Промфинстрой»</h3>
            <p>Город: Москва<br>
                Год работы: с января 2017 г.<br>
                Продукция: Подвески пружинные, опоры трубопроводов<br>
                Объекты: МНПЗ (Московский нефтеперерабатывающий завод),<br>
                ПАО «Орскнефтеоргсинтез» (Орский нефтеперерабатывающий завод).<br>
                Подробности: объём поставок за 6 месяцев более 100 тонн продукции.
            </p>
        </div>

        <div class="story-text">
            <h3>«АРСЛАН»</h3>
            <p>
                Город: Альметьевск, Республика Татарстан.<br>
                Год работы: 2013-2017 г.<br>
                Продукция: металлоконструкции,<br>
                фундаментные болты, шпильки ГОСТ 9066-75, Гайки ГОСТ 9064-75<br>
                Объект: объекты ПАО «Татнефть» в том числе<br>
                Вишнево-Полянское нефтяное месторождение<br>
                Подробности: общий объем продукции составил более 600 тонн
            </p>
        </div>
        <div class="story-img"><img src="/assets/img/history2.jpg"></div>

        <div class="story-img"><img src="/assets/img/history3.jpg"></div>
        <div class="story-text"><h3>«СМУ #7»</h3>
            <p>
                Город: Альметьевск, Республика Татарстан.<br>
                Год работы: 2014-2017 г.<br>
                Продукция: металлоконструкции, анкерные болты ГОСТ 24379.1-2012<br>
                Объект: «ТАНЭКО», Ашальчинское нефтяное месторождение,<br>
                Вишнево-Полянское нефтяное месторождение<br>
                Подробности: общий объем продукции составил более 1500 тонн<br>
            </p>
        </div>

        <div class="story-text"><h3>«ГИСМО»</h3>
            <p>
                Город: Уфа, Республика Башкортостан.<br>
                Год работы: 2012-2017 г.<br>
                Продукция: металлоконструкции, фундаментные болты,<br>
                шпильки и гайки по ОСТ, ГОСТ, СТП Объект: объекты по всей<br>
                России, в том числе ПАО «Интер РАО», ПАО АК «ВНЗМ», «Таргин»,<br>
                «Башкирские теплосети» и т.д Подробности: общий объем<br>
                продукции составил более 300 тонн<br>
                Сайт: http://npc-gismo.pulscen.ru/<br>
            </p>
        </div>
        <div class="story-img"><img src="/assets/img/history4.jpg"></div>
    </div>
</div>
<?= $this->render('/blocks/contacts.php') ?>