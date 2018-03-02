<?php

use yii\helpers\Url;

$this->title = $variety->text;
?>

<div id="cardBlock">
    <div id="cardContent" class="content">
        <div id="breadcrumbs">
            <a href="/">Опоры</a> > <a href="<?= Url::toRoute(['item','id'=>$variety->item->id]); ?>"><?= $variety->item->text ?></a> > <span id="varietyName"><?= $variety->text ?></span>
        </div>
        <div class="grid-c-2">
            <div>
                <div class="slider" id="curItemGallery">
                    <div id="slide">
                        <img src="<?= $variety->getImgUrl() ?>">
                    </div>
                    <div id="additionalPics">
                        <?php foreach($variety->addpics as $adpic): ?>
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
                <div id="video">
                    <iframe width="389" height="219" src="https://www.youtube.com/embed/GTPpP8zgy9o?ecver=1" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="detailButtons">
    <div class="content">
        <div class="grid-c-2">
            <div id="characsButton" class="ui-button">Характеристики</div>
            <div id="schemesButton" class="ui-button">Чертежи</div>
        </div>

        <div id="characsBlock" class="ui-window">
            <div class="modal-wrapper">
                <div class="modal-content">
                    <table class="pricelist">
                        <tr>
                            <th>Обозначение</th>
                            <th>Исполнение</th>
                            <th>Размеры болта dxl</th>
                            <th>Высота до снования трубопровода Н, мм.</th>
                            <th>Масса, кг.</th>
                        </tr>
                        <tr>
                            <td class="price_name">57-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td rowspan="12">М12х40</td>
                            <td>100</td>
                            <td>2,1</td>
                            <td class="price_cena">230 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">57-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>4,2</td>
                            <td class="price_cena">460 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">57-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>2,5</td>
                            <td class="price_cena">280 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">57-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>5,2</td>
                            <td class="price_cena">570 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">76-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>2,2</td>
                            <td class="price_cena">240 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">76-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>4,3</td>
                            <td class="price_cena">470 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">76-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>2,7</td>
                            <td class="price_cena">300 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">76-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>5,3</td>
                            <td class="price_cena">580 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">89-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>2,2</td>
                            <td class="price_cena">240 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">89-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>4,5</td>
                            <td class="price_cena">500 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">89-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>2,8</td>
                            <td class="price_cena">310 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">89-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>5,5</td>
                            <td class="price_cena">610 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">108-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td rowspan="12">М16х50</td>
                            <td>100</td>
                            <td>5,4</td>
                            <td class="price_cena">600 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">108-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>6,9</td>
                            <td class="price_cena">760 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">108-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>6,0</td>
                            <td class="price_cena">660 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">108-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>8,1</td>
                            <td class="price_cena">890 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">133-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>6,3</td>
                            <td class="price_cena">690 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">133-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>7,8</td>
                            <td class="price_cena">860 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">133-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>6,8</td>
                            <td class="price_cena">750 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">133-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>8,9</td>
                            <td class="price_cena">980 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">159-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>6,9</td>
                            <td class="price_cena">760 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">159-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>8,4</td>
                            <td class="price_cena">920 р.</td>
                        </tr>
                        <tr>
                            <td class="price_name">159-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>7,4</td>
                        </tr>
                        <tr>
                            <td class="price_name">159-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>9,5</td>
                        </tr>
                        <tr>
                            <td class="price_name">219-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td rowspan="30">М20х60</td>
                            <td>100</td>
                            <td>13,4</td>
                        </tr>
                        <tr>
                            <td class="price_name">219-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>16,8</td>
                        </tr>
                        <tr>
                            <td class="price_name">219-КХ-А13</td>
                            <td>А13 / АС13</td>
                            <td>100</td>
                            <td>21,7</td>
                        </tr>
                        <tr>
                            <td class="price_name">219-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>14,1</td>
                        </tr>
                        <tr>
                            <td class="price_name">219-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>18,0</td>
                        </tr>
                        <tr>
                            <td class="price_name">219-КХ-А23</td>
                            <td>А23 / АС23</td>
                            <td>150</td>
                            <td>24,0</td>
                        </tr>
                        <tr>
                            <td class="price_name">273-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>15,1</td>
                        </tr>
                        <tr>
                            <td class="price_name">273-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>19,6</td>
                        </tr>
                        <tr>
                            <td class="price_name">273-КХ-А13</td>
                            <td>А13 / АС13</td>
                            <td>100</td>
                            <td>25,8</td>
                        </tr>
                        <tr>
                            <td class="price_name">273-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>15,7</td>
                        </tr>
                        <tr>
                            <td class="price_name">273-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>21,5</td>
                        </tr>
                        <tr>
                            <td class="price_name">273-КХ-А23</td>
                            <td>А23 / АС23</td>
                            <td>150</td>
                            <td>29,1</td>
                        </tr>
                        <tr>
                            <td class="price_name">325-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>17,4</td>
                        </tr>
                        <tr>
                            <td class="price_name">325-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>21,0</td>
                        </tr>
                        <tr>
                            <td class="price_name">325-КХ-А13</td>
                            <td>А13 / АС13</td>
                            <td>100</td>
                            <td>26,9</td>
                        </tr>
                        <tr>
                            <td class="price_name">325-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>18,3</td>
                        </tr>
                        <tr>
                            <td class="price_name">325-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>22,8</td>
                        </tr>
                        <tr>
                            <td class="price_name">325-КХ-А23</td>
                            <td>А23 / АС23</td>
                            <td>150</td>
                            <td>30,3</td>
                        </tr>
                        <tr>
                            <td class="price_name">377-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>19,1</td>
                        </tr>
                        <tr>
                            <td class="price_name">377-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>22,6</td>
                        </tr>
                        <tr>
                            <td class="price_name">377-КХ-А13</td>
                            <td>А13 / АС13</td>
                            <td>100</td>
                            <td>28,4</td>
                        </tr>
                        <tr>
                            <td class="price_name">377-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>20,0</td>
                        </tr>
                        <tr>
                            <td class="price_name">377-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>24,5</td>
                        </tr>
                        <tr>
                            <td class="price_name">377-КХ-А23</td>
                            <td>А23 / АС23</td>
                            <td>150</td>
                            <td>31,6</td>
                        </tr>
                        <tr>
                            <td class="price_name">426-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>22,1</td>
                        </tr>
                        <tr>
                            <td class="price_name">426-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>27,3</td>
                        </tr>
                        <tr>
                            <td class="price_name">426-КХ-А13</td>
                            <td>А13 / АС13</td>
                            <td>100</td>
                            <td>35,8</td>
                        </tr>
                        <tr>
                            <td class="price_name">426-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>23,6</td>
                        </tr>
                        <tr>
                            <td class="price_name">426-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>30,0</td>
                        </tr>
                        <tr>
                            <td class="price_name">426-КХ-А23</td>
                            <td>А23 / АС23</td>
                            <td>150</td>
                            <td>40,7</td>
                        </tr>
                        <tr>
                            <td class="price_name">530-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td rowspan="12">М24х80</td>
                            <td>100</td>
                            <td>36,5</td>
                        </tr>
                        <tr>
                            <td class="price_name">530-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>43,9</td>
                        </tr>
                        <tr>
                            <td class="price_name">530-КХ-А13</td>
                            <td>А13 / АС13</td>
                            <td>100</td>
                            <td>55,3</td>
                        </tr>
                        <tr>
                            <td class="price_name">530-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>38,2</td>
                        </tr>
                        <tr>
                            <td class="price_name">530-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>47,3</td>
                        </tr>
                        <tr>
                            <td class="price_name">530-КХ-А23</td>
                            <td>А23 / АС23</td>
                            <td>150</td>
                            <td>61,1</td>
                        </tr>
                        <tr>
                            <td class="price_name">630-КХ-А11</td>
                            <td>А11 / АС11</td>
                            <td>100</td>
                            <td>41,0</td>
                        </tr>
                        <tr>
                            <td class="price_name">630-КХ-А12</td>
                            <td>А12 / АС12</td>
                            <td>100</td>
                            <td>48,1</td>
                        </tr>
                        <tr>
                            <td class="price_name">630-КХ-А13</td>
                            <td>А13 / АС13</td>
                            <td>100</td>
                            <td>59,2</td>
                        </tr>
                        <tr>
                            <td class="price_name">630-КХ-А21</td>
                            <td>А21 / АС21</td>
                            <td>150</td>
                            <td>42,7</td>
                        </tr>
                        <tr>
                            <td class="price_name">630-КХ-А22</td>
                            <td>А22 / АС22</td>
                            <td>150</td>
                            <td>51,4</td>
                        </tr>
                        <tr>
                            <td class="price_name">630-КХ-А23</td>
                            <td>А23 / АС23</td>
                            <td>150</td>
                            <td>65,0</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div id="schemesBlock" class="ui-window">
            <div class="modal-wrapper">
                <div class="modal-content">

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->render('/blocks/form') ?>
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
        <div class="story-text"><h3>«СМУ 7»</h3>
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
<div id="contactsWrapper">
    <h1 class="block-title">Контакты</h1>
    <div id="contacts" class="content">
        <!--<div><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=w4szqFdwqSgD-Mrfe1K-5_Z6KEeAI-iu&amp;height=457&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script></div>-->
        <div><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A988b6c6cbd7c293a47d11d7838dc1c7c474fab771f55e43a47032089667ff567&amp;width=100%25&amp;height=452&amp;lang=ru_RU&amp;scroll=true"></script></div>
        <div>
            <h2>ООО "ПЭТ"</h2>
            <h3>Расчет заказа за 30 минут</h3>
            <h3>Быстрая доставка по всей России</h3>
            <h3>8 (800) 350-09-19 <br> op@zavod-pet.ru</h3>
        </div>
    </div>
</div>
