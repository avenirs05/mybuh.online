﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no" />
	<meta name="yandex-verification" content="736294db93cf48bb" />
    <meta property="og:image" content="http://mybuh.online/imgs/taxi-bg-1920-900.jpg" />
    <meta property="og:title" content="" />
	
    <title>Бухгалтерская компания</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="events-general.js"></script>
    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45078772 = new Ya.Metrika({ id:45078772, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45078772" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<body>
<?php require_once 'modals.php'; ?>
<?php 
    //$path = "clickfrogru_tcp.php";
    //include_once($path);
?>

<div class="main-screen">
    <?php require_once 'header.php'; ?>
    <h1>Дистанционная бухгалтерия по-мужски!</h1>
    <div class="first-man-wrapper">
        <div>Первая</div>
        <div>Мужская</div>
        <div>Бухгалтерская</div>
        <div>Компания</div>
    </div>
    <div class="btn-connect-wrapper">
        <button id="btn-connect" class="">Связаться с нами</button>
    </div>
</div>

<div class="container-fluid where-are-you">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Куда вы попали?</h2>
            <p>Вы находитесь на сайте первой в России бухгалтерской компании, состоящей только из мужчин.</p> 
            <p>Почему так?</p> 
            <p>Мы искренне считаем, что профессия бухгалтера не для женщин: в ней нет ничего творческого и слишком велика цена ошибки.</p>
            <p>Поэтому мы решили объединиться, чтобы создать компанию, предлагающую качественно новый уровень бухгалтерского сервиса.</p>
            <p>Для нас слово важнее бумаги. Мы не станем прикрываться пунктами в договорах: если мы совершаем ошибку, мы за нее отвечаем. Это принципиальная позиция.</p>
            <p>Мы собрали только проверенных бухгалтеров, имеющих за спиной более 15 лет опыта, прошедших сотни выездных проверок и десятки рейдерских «наездов» силовых структур на компании наших клиентов. Нас нельзя ничем удивить или испугать.</p> 
            <p>Наши клиенты уверены в нас так же, как в себе.</p>
            <p>Хотите проверить?</p>
            <div class="btn-wrapper visible-md-block visible-lg-block">
                <button id="btn-check-us" class="visible-md-block visible-lg-block">Проверить нас</button>
            </div>
            <div class="btn-wrapper-mob">
                <button id="btn-check-us-mob" class="visible-xs-block visible-sm-block">Проверить нас</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid what-can-order">
    <div class="row">
        <div class="col-md-12" id="what-can-order-link">
            <h2 class="text-center">Что можно у нас заказать?</h2>
            <ul>
                <li>Ведение и восстановление бухгалтерского учета</li>
                <li>Составление и сдачу отчетности в ИФНС, ПФР, ФСС, Росстат</li>
                <li>Расчет налогов и обязательных взносов</li>
                <li>Оформление налоговых вычетов для физических лиц (3-НДФЛ)</li>
                <li>Оптимизацию налогообложения</li>
                <li>Сопровождение камеральных и выездных налоговых проверок</li>
                <li>Налоговые и бухгалтерские консультации</li>
                <li>Аудит</li>
                <li>Любую другую помощь в области налогов и бухучета</li>
            </ul>  
            <a id="taxi-link" href="taxi.php" class="visible-md-block visible-lg-block" target="_blank">Для партнеров Uber, Gett, Yandex</a>     
            <a id="taxi-img-link" href="taxi.php" class="visible-md-block visible-lg-block" target="_blank"><img id="for-taxi-img" src="imgs/taxi-icon.png" width="150" alt=""></a>   
            
            <a id="taxi-link-mob" href="taxi.php" class="text-center visible-xs-block visible-sm-block" target="_blank"><span class="text-center">Для партнеров Uber, Gett, Yandex</span></a>     
            <a id="taxi-img-link-mob" href="taxi.php" class="visible-xs-block visible-sm-block" target="_blank"><img id="for-taxi-img" src="imgs/taxi-icon.png" width="150" alt=""></a> 

        </div>
    </div>
</div>

<div class="container-fluid compare-with-buh visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12 compare-wrapper">
            <h2 class="text-center">Почему мы, а не бухгалтер в штате?</h2>
            <table class="table table-bordered">               
                <tr>
                    <th class="text-center">Бухгалтер в штате</th>
                    <th class="text-center">Мы</th>
                </tr>
                <tr class="success">
                    <td class="text-center">Работает 8 часов в день с выходными</td>
                    <td class="text-center">Работаем в 2 раза больше и без выходных</td>
                </tr>
                <tr>
                    <td class="text-center">Нужно платить зарплату независимо от выполненной работы. Нужно удерживать НДФЛ, ПФР, ФСС.</td>
                    <td class="text-center">Платите нам только за результат. Налоги за себя платим самостоятельно.</td>
                </tr>
                <tr class="success">
                    <td class="text-center">Уходит в отпуск каждый год. Берет отгулы, больничные и просто опаздывает на работу. Иногда уходит в декрет. Надолго.</td>
                    <td class="text-center">У нас нет отпусков и больничных. Мы не отпрашиваемся пораньше, чтобы успеть на день рождения к свекрови, и не ездим на дачу по пятницам. </td>
                </tr>
                <tr>
                    <td class="text-center">Любит поболтать в свободное от работы время. Зачастую о том, о чем болтать не ст<span class="emphasis">о&#769;</span>ит.</td>
                    <td class="text-center">Не задаем лишних вопросов. Не выдаем секретов, даже если нас сильно просят. Никому.</td>
                </tr>
                <tr class="success">
                    <td class="text-center">Хранит документы на своем компьютере. Данные не защищены и доступны недружественным структурам</td>
                    <td class="text-center">Все документы и информацию храним в зашифрованном виде на удаленных серверах в физически недосягаемой зоне</td>
                </tr>
            </table>       
        </div>
    </div>
</div>

<div class="container-fluid compare-with-buh-mob visible-xs-block visible-sm-block">
    <div class="row">
        <div class="col-md-12 compare-wrapper-mob">
            <h2 class="text-center">Почему мы, а не бухгалтер в штате?</h2>
            <table class="table table-bordered">               
                <tr>
                    <th class="text-center">Бухгалтер в штате</th>
                    <th class="text-center">Мы</th>
                </tr>
                <tr class="success">
                    <td class="text-center">Работает 8 часов в день с выходными</td>
                    <td class="text-center">Работаем в 2 раза больше и без выходных</td>
                </tr>
                <tr>
                    <td class="text-center">Нужно платить зарплату независимо от выполненной работы. Нужно удерживать НДФЛ, ПФР, ФСС.</td>
                    <td class="text-center">Платите нам только за результат. Налоги за себя платим самостоятельно.</td>
                </tr>
                <tr class="success">
                    <td class="text-center">Уходит в отпуск каждый год. Берет отгулы, больничные и просто опаздывает на работу. Иногда уходит в декрет. Надолго.</td>
                    <td class="text-center">У нас нет отпусков и больничных. Мы не отпрашиваемся пораньше, чтобы успеть на день рождения к свекрови, и не ездим на дачу по пятницам. </td>
                </tr>
                <tr>
                    <td class="text-center">Любит поболтать в свободное от работы время. Зачастую о том, о чем болтать не стОит.</td>
                    <td class="text-center">Не задаем лишних вопросов. Не выдаем секретов, даже если нас сильно просят. Никому.</td>
                </tr>
                <tr class="success">
                    <td class="text-center">Хранит документы на своем компьютере. Данные не защищены и доступны недружественным структурам</td>
                    <td class="text-center">Все документы и информацию храним в зашифрованном виде на удаленных серверах в физически недосягаемой зоне</td>
                </tr>
            </table>       
        </div>
    </div>
</div>

<div class="container-fluid how-much visible-md-block visible-lg-block">
    <div class="row">
        <div id="price-link" class="col-md-12 price-wrapper">
            <h2 class="text-center">Сколько это стоит?</h2>
            <table class="table table-bordered">               
                <tr>
                    <th class="text-center">«ЭКОНОМ»</th>
                    <th class="text-center">«БИЗНЕС»</th>
                    <th class="text-center">«БИЗНЕС+»</th>
                </tr>
                <tr>
                    <td class="text-center">Для компаний и предпринимателей, которые имеют небольшой документооборот, совершают не более 30 хозяйственных операций в месяц и применяют специальные режимы налогообложения («упрощенка», «вмененка», «патент»)</td>
                    <td class="text-center">Для компаний и предпринимателей, которые имеют небольшой документооборот, совершают не более 50 хозяйственных операций в месяц и применяют различные режимы налогообложения</td>
                    <td class="text-center">Включает комплексное бухгалтерское сопровождение, пакет консультаций по правовым и налоговым вопросам</td>
                </tr>
                <tr>
                    <td class="text-center cell-price">от 2 999 руб. в месяц</td>
                    <td class="text-center cell-price">от 4 499 руб. в месяц</td>
                    <td class="text-center cell-price">от 6 999 руб. в месяц</td>
                </tr>
            </table>       
            <div id="look-all-price" class="text-center">
                <a href="price.php" target="_blank">Посмотреть полный прайс-лист</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid how-much-mob visible-xs-block visible-sm-block">
    <div class="row">
        <div id="price-link-mob" class="col-md-12 price-wrapper-mob">
            <h2 class="text-center">Сколько это стоит?</h2>
            <table class="table table-bordered">               
                <tr>
                    <th class="text-center">«ЭКОНОМ»</th>
                </tr>
                <tr>
                    <td class="text-center">Для компаний и предпринимателей, которые имеют небольшой документооборот, совершают не более 30 хозяйственных операций в месяц и применяют специальные режимы налогообложения («упрощенка», «вмененка», «патент»)</td>
                </tr>
                <tr>
                    <td class="text-center cell-price">499 руб.</td>
                </tr>
            </table>
            <table class="table table-bordered">               
                <tr>
                    <th class="text-center">«БИЗНЕС»</th>
                </tr>
                <tr>
                    <td class="text-center">Для компаний и предпринимателей, которые имеют небольшой документооборот, совершают не более 50 хозяйственных операций в месяц и применяют различные режимы налогообложения</td>
                </tr>
                <tr>
                    <td class="text-center cell-price">499 руб.</td>
                </tr>
            </table> 
            <table class="table table-bordered last-table">               
                <tr>
                    <th class="text-center">«БИЗНЕС+»</th>
                </tr>
                <tr>
                    <td class="text-center">Включает комплексное бухгалтерское сопровождение, пакет консультаций по правовым и налоговым вопросам</td>
                </tr>
                <tr>
                    <td class="text-center cell-price">499 руб.</td>
                </tr>
            </table>     
            <div id="look-all-price-mob" class="text-center">
                <a href="price.php" target="_blank">Посмотреть полный прайс-лист</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid our-experience">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Наш опыт</h2>
            <ul>
                <li>Работаем с 2002 года</li>
                <li>Ведем абонентское обслуживание более 150 фирм и ИП</li>
                <li>Проходим повышение квалификации не реже 1 раза в год</li>
                <li>Имеем практические знания в 19 отраслях – от торговли бетоном до нанотехнологий</li>
                <li>Прошли с клиентами более 500 налоговых проверок</li>
                <li>Законно сэкономили своим клиентам на налогах более 1,2 млрд рублей</li>
            </ul>              
        </div>
        <div id="are-you-ready" class="text-center">Решились на сотрудничество?</div>
        <div class="btn-wrapper visible-md-block visible-lg-block">
            <button id="btn-our-experience" class="visible-md-block visible-lg-block">Начать работу</button>
        </div>
        <div class="btn-wrapper-mob">
            <button id="btn-our-experience-mob" class="visible-xs-block visible-sm-block">Начать работу</button>
        </div>
    </div>
</div>

<div class="container-fluid for-accountants visible-md-block visible-lg-block">
    <div class="row">
        <h2 class="text-center">Для бухгалтеров</h2>  
        <div id="for-accountants-link" class="col-md-12 calc-and-text-wrapper">
            <div class="calc-wrapper"></div>
            <div class="for-accs-text-wrapper">                       
                <p>У вас много работы? Не успеваете в отчетный период?</p>
                <p>Переложите часть работы на нас и получите бонус 10%!</p>
                <p>Передавая нам в работу 2 и более компании, вы получите вознаграждение в размере 10% за второй и каждый последующий заказы.</p>
                <p>Минимальная сумма одного заказа, по которому выплачивается вознаграждение – 2 999 рублей.</p>
            </div>
        </div>
        <div>
            <button id="btn-get-bonus" class="visible-md-block visible-lg-block">Получить бонус</button>
        </div>
        <div class="div-not-visible"></div>
    </div>
</div>

<div class="container-fluid for-accountants visible-xs-block visible-sm-block">
    <div class="row">
        <div class="col-md-12" id="for-accountants-link-mob">
            <h2 class="text-center">Для бухгалтеров</h2>         
            <p>У вас много работы? Не успеваете в отчетный период?</p>
            <p>Переложите часть работы на нас и получите бонус 10%!</p>
            <p>Передавая нам в работу 2 и более компании, вы получите вознаграждение в размере 10% за второй и каждый последующий заказы.</p>
            <p>Минимальная сумма одного заказа, по которому выплачивается вознаграждение – 2 999 рублей.</p>
            <div class="btn-wrapper-mob">
                <button id="btn-get-bonus-mob" class="visible-xs-block visible-sm-block">Получить бонус</button>
            </div>
        </div>
    </div>
</div>
<!-- testdd22 -->
<?php require_once 'footer.php'; ?>