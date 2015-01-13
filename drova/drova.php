<?php
if(isset($_POST['email'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Form submission";
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $lang = $_POST['lang'];
    $delivery = $_POST['delivery'];
    $customs = $_POST['customs'];
    $size = $_POST['size'];
    $wood = $_POST['wood'];
    $price = $_POST['price'];
    $humidity = $_POST['humidity'];
    $expedition = $_POST['expedition'];
    $message =
        '<p>Email: ' . $email . '<br/></p>' .
        '<p>Телефон: ' . $tel . '<br/></p>' .
        '<p>Языки: ' . $lang . '<br/></p>' .
        '<p>Доставка: ' . $delivery . '<br/></p>' .
        '<p>Адрес Растаможки: ' . $customs . '<br/></p>' .
        '<p>Экспедиция: ' . $expedition . '<br/></p>' .
        '<p>Дерево: ' . $wood . '<br/></p>' .
        '<p>Размер: ' . $size . '<br/></p>' .
        '<p>Влажность: ' . $humidity . '<br/></p>' .
        '<p>Стоимость: ' . $price . '<br/></p>';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= "From:" . $from;
    mail($to, $subject, $message, $headers);
    }
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=1014">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">

            <header class="header">

                <ul class="lang">
                    <li><a href="#">Eng</a></li>
                    <li><a href="#" class="lang-ru" style="display: none;">Ru</a></li>
                </ul>

                <div class="logo"><a href="index.html"><img src="img/logo.png" alt=""></a></div>

                <nav class="nav">
                    <ul>
                        <li><a href="index.html">Главная</a></li>
                        <li><a href="drova.html" class="active">Дрова колотые</a></li>
                        <li><a href="pileti.html">Пеллеты</a></li>
                        <li><a href="pack.html">Упаковка</a></li>
                        <li><a href="gallery.html">Галерея</a></li>
                        <li><a href="contacts.html">Контакты</a></li>
                    </ul>
                </nav>

                <div class="contact">
                    <span class="tel">+38 067 767 03 77</span>
                    <span class="working-hours">с 8:00 до 21:00</span>
                    <a class="skype" href="#"><img src="img/i_skype.png" height="13" width="14" alt="" /> <span>ukr.bio.toplivo</span></a>
                </div>

                <div class="cart"></div>

            </header>

            <div class="content">

                <div class="gallery gallery-rounded-top">
                    <div class="jcarousel circular">
                        <ul>
                            <li>
                                <img src="content/gallery_1.jpg" height="339" width="964" alt="">
                            </li>
                            <li>
                                <img src="content/gallery_1.jpg" height="339" width="964" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="jcarousel-pagination"></div>
                </div>

                <div class="woods">
                    <div class="wood wood-1">
                        <div class="wood-img">
                            <img src="content/drova_1.jpg" height="388" width="283" alt="">
                        </div>
                        <div class="wood-config">
                            <h1>Граб</h1>
                            <strong>Выберите параметры</strong>
                            <table data-wood="grab">
                                <tr>
                                    <th>Длина поленьев:</th>
                                    <td><span class="value">25см</span></td>
                                    <td><span class="value">33см</span></td>
                                    <td><span class="value">50см</span></td>
                                    <td class="price">—</td>
                                </tr>
                                <tr>
                                    <th>Размер ящика:</th>
                                    <td><span class="value value-size" data-value="1RM">1RM</span></td>
                                    <td><span class="value value-size" data-value="1.7RM">1.7RM</span></td>
                                    <td><span class="value value-size" data-value="2RM">2RM</span></td>
                                    <td>FCA</td>
                                </tr>
                                <tr>
                                    <th>Влажность:</th>
                                    <td><span class="value value-humidity" data-value="15-25%">15-25%</span></td>
                                    <td><span class="value value-humidity" data-value=">25%">>25%</span></td>
                                    <td></td>
                                    <td>excl. VA</td>
                                </tr>
                            </table>
                            <p>Эту породу древесины выделяет среди самая высокая плотность (1080 кг/м3), и как следствие самое продолжительное время и стабильно высокая температура горения. Из граба получают самый качественный древесный уголь.</p>
                            <div class="validation-price-failed" style="display: none;">Выберите размер и влажность</div>
                            <a href="#" class="btn btn-order-open">Оформить заявку</a>
                        </div>
                        <div class="wood-order">
                            <h2>Заявка</h2>
                            <form action="drova.php" method="post">
                                <input type="hidden" name="wood">
                                <input type="hidden" name="size">
                                <input type="hidden" name="humidity">
                                <input type="hidden" name="price">
                                <div class="field">
                                    <div class="label">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="control">
                                        <input type="text" name="email" id="email">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <label for="tel">Телефон</label>
                                    </div>
                                    <div class="control">
                                        <input type="text" name="tel" id="tel">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <label for="lang">Языки которыми владеете</label>
                                    </div>
                                    <div class="control">
                                        <input type="text" name="lang" id="lang">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <label>Доставка</label>
                                    </div>
                                    <div class="control">
                                        <input type="radio" name="delivery" vale="Да" id="delivery_1"><label for="delivery_1">Да</label>
                                        <input type="radio" name="delivery" value="Нет" id="delivery_2"><label for="delivery_2">Нет</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <label for="customs">Адрес растаможки</label>
                                    </div>
                                    <div class="control">
                                        <input type="text" name="customs" id="customs">
                                    </div>
                                </div>
                                <div class="field last">
                                    <div class="label">
                                        <label for="expedition">Экспедиция</label>
                                    </div>
                                    <div class="control">
                                        <input type="text" name="expedition" id="expedition">
                                    </div>
                                </div>
                                <div class="validation-failed" style="display: none;">Не все поля заполнены!</div>
                                <a href="#" class="btn btn-order">Заказать</a>
                            </form>
                        </div>
                        <div class="wood-banner-1">
                            <a href="humidity.html"><img src="content/banner1.jpg" width="260" alt=""></a>
                        </div>
                    </div>

                    <div class="wood wood-2">
                        <div class="wood-img">
                            <img src="content/drova_1.jpg" height="388" width="283" alt="">
                        </div>
                        <div class="wood-config">
                            <h1>Бук</h1>
                            <strong>Выберите параметры</strong>
                            <table data-wood="buk">
                                <tr>
                                    <th>Длина поленьев:</th>
                                    <td><span class="value">25см</span></td>
                                    <td><span class="value">33см</span></td>
                                    <td><span class="value">50см</span></td>
                                    <td class="price">—</td>
                                </tr>
                                <tr>
                                    <th>Размер ящика:</th>
                                    <td><span class="value value-size" data-value="1RM">1RM</span></td>
                                    <td><span class="value value-size" data-value="1.7RM">1.7RM</span></td>
                                    <td><span class="value value-size" data-value="2RM">2RM</span></td>
                                    <td>FCA</td>
                                </tr>
                                <tr>
                                    <th>Влажность:</th>
                                    <td><span class="value value-humidity" data-value="15-25%">15-25%</span></td>
                                    <td><span class="value value-humidity" data-value=">25%">>25%</span></td>
                                    <td></td>
                                    <td>excl. VA</td>
                                </tr>
                            </table>
                            <p>Эту породу древесины выделяет среди самая высокая плотность (1080 кг/м3), и как следствие самое продолжительное время и стабильно высокая температура горения. Из граба получают самый качественный древесный уголь.</p>
                            <div class="validation-price-failed" style="display: none;">Выберите размер и влажность</div>
                            <a href="#" class="btn btn-order-open">Оформить заявку</a>
                        </div>
                        <div class="wood-banner-2">
                            <img src="content/banner_2.jpg" width="260" alt="">
                        </div>
                    </div>

                    <div class="wood wood-3">
                        <div class="wood-img">
                            <img src="content/drova_1.jpg" height="388" width="283" alt="">
                        </div>
                        <div class="wood-config">
                            <h1>Дуб</h1>
                            <strong>Выберите параметры</strong>
                            <table data-wood="dub">
                                <tr>
                                    <th>Длина поленьев:</th>
                                    <td><span class="value">25см</span></td>
                                    <td><span class="value">33см</span></td>
                                    <td><span class="value">50см</span></td>
                                    <td class="price">—</td>
                                </tr>
                                <tr>
                                    <th>Размер ящика:</th>
                                    <td><span class="value value-size" data-value="1RM">1RM</span></td>
                                    <td><span class="value value-size" data-value="1.7RM">1.7RM</span></td>
                                    <td><span class="value value-size" data-value="2RM">2RM</span></td>
                                    <td>FCA</td>
                                </tr>
                                <tr>
                                    <th>Влажность:</th>
                                    <td><span class="value value-humidity" data-value="15-25%">15-25%</span></td>
                                    <td><span class="value value-humidity" data-value=">25%">>25%</span></td>
                                    <td></td>
                                    <td>excl. VA</td>
                                </tr>
                            </table>
                            <p>Эту породу древесины выделяет среди самая высокая плотность (1080 кг/м3), и как следствие самое продолжительное время и стабильно высокая температура горения. Из граба получают самый качественный древесный уголь.</p>
                            <div class="validation-price-failed" style="display: none;">Выберите размер и влажность</div>
                            <a href="#" class="btn btn-order-open">Оформить заявку</a>
                        </div>
                    </div>

                    <div class="wood wood-1">
                        <div class="wood-img">
                            <img src="content/drova_1.jpg" height="388" width="283" alt="">
                        </div>
                        <div class="wood-config">
                            <h1>Ясень</h1>
                            <strong>Выберите параметры</strong>
                            <table data-wood="yasen">
                                <tr>
                                    <th>Длина поленьев:</th>
                                    <td><span class="value">25см</span></td>
                                    <td><span class="value">33см</span></td>
                                    <td><span class="value">50см</span></td>
                                    <td class="price">—</td>
                                </tr>
                                <tr>
                                    <th>Размер ящика:</th>
                                    <td><span class="value value-size" data-value="1RM">1RM</span></td>
                                    <td><span class="value value-size" data-value="1.7RM">1.7RM</span></td>
                                    <td><span class="value value-size" data-value="2RM">2RM</span></td>
                                    <td>FCA</td>
                                </tr>
                                <tr>
                                    <th>Влажность:</th>
                                    <td><span class="value value-humidity" data-value="15-25%">15-25%</span></td>
                                    <td><span class="value value-humidity" data-value=">25%">>25%</span></td>
                                    <td></td>
                                    <td>excl. VA</td>
                                </tr>
                            </table>
                            <p>Эту породу древесины выделяет среди самая высокая плотность (1080 кг/м3), и как следствие самое продолжительное время и стабильно высокая температура горения. Из граба получают самый качественный древесный уголь.</p>
                            <div class="validation-price-failed" style="display: none;">Выберите размер и влажность</div>
                            <a href="#" class="btn btn-order-open">Оформить заявку</a>
                        </div>
                    </div>

                    <div class="wood wood-2">
                        <div class="wood-img">
                            <img src="content/drova_1.jpg" height="388" width="283" alt="">
                        </div>
                        <div class="wood-config">
                            <h1>Клен</h1>
                            <strong>Выберите параметры</strong>
                            <table data-wood="klen">
                                <tr>
                                    <th>Длина поленьев:</th>
                                    <td><span class="value">25см</span></td>
                                    <td><span class="value">33см</span></td>
                                    <td><span class="value">50см</span></td>
                                    <td class="price">—</td>
                                </tr>
                                <tr>
                                    <th>Размер ящика:</th>
                                    <td><span class="value value-size" data-value="1RM">1RM</span></td>
                                    <td><span class="value value-size" data-value="1.7RM">1.7RM</span></td>
                                    <td><span class="value value-size" data-value="2RM">2RM</span></td>
                                    <td>FCA</td>
                                </tr>
                                <tr>
                                    <th>Влажность:</th>
                                    <td><span class="value value-humidity" data-value="15-25%">15-25%</span></td>
                                    <td><span class="value value-humidity" data-value=">25%">>25%</span></td>
                                    <td></td>
                                    <td>excl. VA</td>
                                </tr>
                            </table>
                            <p>Эту породу древесины выделяет среди самая высокая плотность (1080 кг/м3), и как следствие самое продолжительное время и стабильно высокая температура горения. Из граба получают самый качественный древесный уголь.</p>
                            <div class="validation-price-failed" style="display: none;">Выберите размер и влажность</div>
                            <a href="#" class="btn btn-order-open">Оформить заявку</a>
                        </div>
                    </div>

                    <div class="wood wood-3">
                        <div class="wood-img">
                            <img src="content/drova_1.jpg" height="388" width="283" alt="">
                        </div>
                        <div class="wood-config">
                            <h1>Береза</h1>
                            <strong>Выберите параметры</strong>
                            <table data-wood="bereza">
                                <tr>
                                    <th>Длина поленьев:</th>
                                    <td><span class="value">25см</span></td>
                                    <td><span class="value">33см</span></td>
                                    <td><span class="value">50см</span></td>
                                    <td class="price">—</td>
                                </tr>
                                <tr>
                                    <th>Размер ящика:</th>
                                    <td><span class="value value-size" data-value="1RM">1RM</span></td>
                                    <td><span class="value value-size" data-value="1.7RM">1.7RM</span></td>
                                    <td><span class="value value-size" data-value="2RM">2RM</span></td>
                                    <td>FCA</td>
                                </tr>
                                <tr>
                                    <th>Влажность:</th>
                                    <td><span class="value value-humidity" data-value="15-25%">15-25%</span></td>
                                    <td><span class="value value-humidity" data-value=">25%">>25%</span></td>
                                    <td></td>
                                    <td>excl. VA</td>
                                </tr>
                            </table>
                            <p>Эту породу древесины выделяет среди самая высокая плотность (1080 кг/м3), и как следствие самое продолжительное время и стабильно высокая температура горения. Из граба получают самый качественный древесный уголь.</p>
                            <div class="validation-price-failed" style="display: none;">Выберите размер и влажность</div>
                            <a href="#" class="btn btn-order-open">Оформить заявку</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/vendor/jquery.jcarousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
