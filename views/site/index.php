<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Завод по производсту опор трубопроводов';
?>

<header id="headerWrapper">
    <div id="header" class="content">
        <div id="left-block">
            <img src="assets/img/logo.png">
            <h1>Завод по производству<br>элементов трубопроводов</h1>
        </div>
        <div id="right-block">
            <h1 class="number">8 (800) 200-40-80</h1>
            <h1 class="email"><a href="mailto:sale@metiz-mk.ru">sale@metiz-mk.ru</a></h1>
        </div>
        <div class="clear"></div>
    </div>
</header>
<div id="mainBlockWrapper">
    <div id="mainBlock" class="content">
        <h1 id="mainTitle">ОПОРЫ ТРУБОПРОВОДОВ</h1>
        <h1 id="mainDescription">скользящие, корпусные/бескорпусные,
            подвижные/неподвижные, приварные хомутовые</h1>
        <div id="mainGrid">
            <div>
                <img src="assets/img/main-img.png">
            </div>
            <div>
                <h2><div class="icon" id="icon1"></div> &bull; Изготавливаем по ГОСТу, ОСТу, чертежам</h2>
                <h2><div class="icon" id="icon2"></div> &bull; Средний срок изготовления 5-10 дней</h2>
                <h2><div class="icon" id="icon3"></div> &bull; Собственный отдел проектирования</h2>
                <h2><div class="icon" id="icon4"></div> &bull; Напрямую с завода без наценок</h2>
            </div>
        </div>
    </div>
</div>
<div id="catalogWrapper">
    <div id="catalog" class="content">
        <h1 class="block-title">Каталог опор</h1>
        <div id="catalogGrid">
            <?php foreach($items as $item): ?>
            <div>
                <img src="<?= $item->getImgUrl() ?>" alt="catalog_img">
                <p><?= $item->text ?></p>
                <a href="<?= Url::toRoute(['item','id'=>$item->id]) ?>">
                    <button>ПОДРОБНЕЕ</button>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<div id="photosWrapper">
    <h1 class="block-title">ФОТОГРАФИИ ГОТОВОЙ ПРОДУКЦИИ</h1>
    <div id="photoSliderWrapper">
        <div id="photoSlider" data-slider-id="1" class="content">
            <div class="arrow leftArrow"><img src="assets/img/left.png"></div>
            <div class='slides'>
                <div class="slidesBlock">
                    <div><div style="background-image: url('assets/img/slider1/1slide.jpg')"></div></div>
                    <div><div style="background-image: url('assets/img/slider1/2slide.jpg')"></div></div>
                    <div><div style="background-image: url('assets/img/slider1/3slide.jpg')"></div></div>
                </div>
            </div>
            <div class="arrow rightArrow"><img src="assets/img/right.png"></div>
        </div>
    </div>
</div>
<div id="ownProductionWrapper">
    <h1 class="block-title">Собственное производство</h1>
    <div id="ownProductionBlockWrapper">
        <div id="ownProductionBlock" class="content">
            <div id="videoBlock">
                <div id="video">
                    <iframe width="603" height="329" src="https://www.youtube.com/embed/HLCqlc9AJxA?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div id="advantages">
                    <div><div class="ownicon" style="background-image: url('assets/img/ownicon1.png')"></div>
                        <div class="item-text"><h2>Площадь завода – 3 500 м2.</h2></div>
                    </div>
                    <div><div class="ownicon" style="background-image: url('assets/img/ownicon2.png')"></div>
                        <div class="item-text"><h2>В штате работает более 50 человек.</h2></div>
                    </div>
                    <div><div class="ownicon" style="background-image: url('assets/img/ownicon3.png')"></div>
                        <div class="item-text"><h2>За 2017 год выпустили более 3 000 тонн продукции.</h2></div>
                    </div>
                    <div><div class="ownicon" style="background-image: url('assets/img/ownicon4.png')"></div>
                        <div class="item-text"><h2>Производим более 250 тоннметаллоконструкций в месяц.</h2></div>
                    </div>
                </div>
            </div>
            <div id="ownProductionSlide">
                <div class="arrow leftArrow"><img src="assets/img/redleft.png"></div>
                <div class='slides'>
                    <div class="slidesBlock">
                        <div>
                            <div style="background-image: url('assets/img/slider2/1slide.jpg')"></div>
                            <h2>Сварочный пост</h2>
                        </div>
                        <div>
                            <div style="background-image: url('assets/img/slider2/2slide.jpg')"></div>
                            <h2>Аккуратная упаковка</h2>
                        </div>
                        <div>
                            <div style="background-image: url('assets/img/slider2/3slide.jpg')"></div>
                            <h2>Склад металла</h2>
                        </div>
                    </div>
                </div>
                <div class="arrow rightArrow"><img src="assets/img/redright.png"></div>
            </div>
        </div>
    </div>
</div>
<div id="ownDesignDepartWrapper">
    <h1 class="block-title">Собственный проектировочный отдел</h1>
    <div id="ownDesignDepart">
        <div id="ownDesignDepartContent" class="content">
            <div>
                <img src="assets/img/scheme1.png">
            </div>
            <div>
                <div></div>
                <img src="assets/img/scheme2.png">
            </div>
        </div>
    </div>
</div>
<div id="passportsWrapper">
    <h1 class="block-title">ПАСПОРТА НА ИЗДЕЛИЯ И СЕРТИФИКАТЫ</h1>
    <h2>на металл прилагаются к каждой партии продукции</h2>
    <div id="passports" class="content">
        <img src="assets/img/passports.png">
    </div>
</div>
<div id="deadlinesWrapper">
    <div id="deadlinesContent" class="content">
        <h1 class="block-title">Сроки работы</h1>
        <h2>Средний срок производства партии:<br>
            7–10 дней против 20–30 у большинства производителей</h2>
        <img src="assets/img/deadlines.png">
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
            <img src="assets/img/delivery.png">
        </div>
    </div>
</div>
<div id="allTypesWrapper">
    <h1 class="block-title">РАБОТАЕМ СО ВСЕМИ ТИПАМИ СТАЛИ</h1>
    <div id="allTypesContentWrapper">
        <div id="allTypesContent" class="content">
            <img src="assets/img/alltypepics.png"><p>
                Ст3,<br>
                Ст20,<br>
                09Г2С,<br>
                08Х18Н10,<br>
                12Х18Н10Т,<br>
                13Х17Н12М2Т,<br>
                30Х13 и т.д.
            </p>
        </div>
    </div>
</div>
<div id="partnersWrapper">
    <h1 class="block-title">Поставляем опоры на объекты</h1>
    <div id="partnersGrid" class="content">
        <div><img src="assets/img/partners/1pic.png" alt=""></div>
        <div><img src="assets/img/partners/2pic.png" alt=""></div>
        <div><img src="assets/img/partners/3pic.png" alt=""></div>
        <div><img src="assets/img/partners/4pic.png" alt=""></div>
        <div><img src="assets/img/partners/5pic.png" alt=""></div>
        <div><img src="assets/img/partners/6pic.png" alt=""></div>
        <div><img src="assets/img/partners/7pic.png" alt=""></div>
        <div><img src="assets/img/partners/8pic.png" alt=""></div>
        <div><img src="assets/img/partners/9pic.png" alt=""></div>
        <div><img src="assets/img/partners/10pic.png" alt=""></div>
        <div><img src="assets/img/partners/11pic.png" alt=""></div>
        <div><img src="assets/img/partners/12pic.png" alt=""></div>
    </div>
</div>
<div id="historyWrapper">
    <h1 class="block-title">История отгрузок</h1>
    <div id="historyGrid" class="content">
        <div><img src="assets/img/history1.jpg"></div>
        <div>
            <h3>АО «Промфинстрой»</h3>
            <p>Город: Москва<br>
                Год работы: с января 2017 г.<br>
                Продукция: Подвески пружинные, опоры трубопроводов<br>
                Объекты: МНПЗ (Московский нефтеперерабатывающий завод),<br>
                ПАО «Орскнефтеоргсинтез» (Орский нефтеперерабатывающий завод).<br>
                Подробности: объём поставок за 6 месяцев более 100 тонн продукции.
            </p>
        </div>

        <div>
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
        <div><img src="assets/img/history2.jpg"></div>

        <div><img src="assets/img/history3.jpg"></div>
        <div><h3>«СМУ #7»</h3>
            <p>
                Город: Альметьевск, Республика Татарстан.<br>
                Год работы: 2014-2017 г.<br>
                Продукция: металлоконструкции, анкерные болты ГОСТ 24379.1-2012<br>
                Объект: «ТАНЭКО», Ашальчинское нефтяное месторождение,<br>
                Вишнево-Полянское нефтяное месторождение<br>
                Подробности: общий объем продукции составил более 1500 тонн<br>
            </p>
        </div>

        <div><h3>«ГИСМО»</h3>
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
        <div><img src="assets/img/history4.jpg"></div>
    </div>
</div>
<div id="contactsWrapper">
    <h1 class="block-title">Контакты</h1>
    <div id="contacts" class="content">
        <div><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A988b6c6cbd7c293a47d11d7838dc1c7c474fab771f55e43a47032089667ff567&amp;width=100%25&amp;height=452&amp;lang=ru_RU&amp;scroll=true"></script></div>
        <div>
            <h2>ООО НПЦ «Механика»</h2>
            <h3>Расчет заказа за 30 минут</h3>
            <h3>Быстрая доставка по всей России</h3>
            <h3>8 (800) 200-40-80 zakaz@metiz-mk.ru</h3>
        </div>
    </div>
</div>
<footer id="footerWrapper">
    <div id="footer" class="content">
        <div id="left-block-footer">
            <img src="assets/img/logo.png">
            <h1>Завод по производству<br>элементов трубопроводов</h1>
        </div>
        <div id="right-block-footer">
            <h1 class="number">8 (800) 200-40-80</h1>
            <h1 class="email"><a href="mailto:sale@metiz-mk.ru">sale@metiz-mk.ru</a></h1>
        </div>
        <div class="clear"></div>
    </div>
</footer>
