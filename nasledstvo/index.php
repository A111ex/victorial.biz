<?
global $fileMassivPath, $minCnt, $maxCnt;
require($_SERVER['DOCUMENT_ROOT'].'/init.php');
$fileMassivPath=__DIR__.'/includes/count.txt';
$arMassiv=getMassiv();
$COUNT = intval($arMassiv['COUNT']);
?>
<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="images/favicon.ico">
        <link href="css/res.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/jquery.fancybox.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/tween.js"></script>
        <script src="js/jquery.liLanding.js"></script>
        <script src="js/main.js?"></script>
    </head>
    <body>

        <div class="succes_wrapper">
            <div class="succes_close"></div>
            <div class="succes_block">
                <div class="close_btn"></div>
                <p class="title">спасибо <br/>
                    за вашу заявку</p>
                <p class="slogon">Мы перезвоним Вам в рабочее 
                    время в течение 30 минут</p>
                <a href="#" class="ok">ОК</a>
            </div>
        </div>
        <div style="display: none;">
            <div id="inline1" style="width:345px;height:370px;">
                <div class="wrap-call">
                    <div class="wrap">
                        <div class="title">Заполните форму<br/>
                            <span>для получения скидки:</span></div>
                        <p class="t">Мы перезвоним Вам в рабочее 
                            время в течение 30 минут
                        </p>
                        <form id="form9" method="post" action="" class="call_form" novalidate="novalidate"> 
                            <input type="hidden" name="title" value="шапка">
                            <input type="text" placeholder="Введите имя" name="name">
                            <input type="text" placeholder="Введите номер телефона" name="phone">
                            <input type="submit" value="ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ ">
                            <p class="small">Данные никогда не будут 
                                переданы третьим лицам!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-page">
            <header>
                <div class="top-head">
                    <div class="wrapper clearfix">
                        <div class="logo fl-l">
                            <a href="#">
                                <img src="images/logo.png" alt="">
                                <p>Юридическая компания<br/>
                                    г. Краснодар
                                </p>
                            </a>
                        </div>
                        <div class="telephone fl-r">
                            <div class="tel">8 (800) 333-02-74</div>
                            <a href="#inline1" class="call">Записаться на встречу</a>
                        </div>
                    </div>
                </div>
                <nav class="main-menu">
                    <div class="wrapper">
                        <ul class="clearfix">
                            <li><a href="#slide-1"><span>Вначало</span></a></li>
                            <li><a href="#slide-2"><span>Чем для вас<br/>
                                        мы полезны</span></a></li>
                            <li><a href="#slide-3"><span>Ваши<br/>
                                        выгоды</span></a></li>
                            <li><a href="#slide-4"><span>специалисты<br/>
                                        для вас</span></a></li>
                            <li><a href="#slide-5"><span>наша<br/>
                                        практика</span></a></li>
                            <li><a href="#slide-6"><span>отзывы</span></a></li>
                            <li><a href="#slide-7"><span>Как нас найти</span></a></li>
                        </ul>
                    </div>
                </nav>

            </header>
            <div class="slide-1 landingItem" id="slide-1">
                <div class="wrapper">
                    <h1>защита прав наследников</h1>
                    <div class="block-form-main clearfix">
                        <img src="images/wome1.png" alt="" class="women">
                        <div class="action fl-l">
                            <div class="t">Акция!</div>
							<div class="con ccc" style="font-weight: bold;">КОНСУЛЬТАЦИЯ</div>
							<div class="ccc" style="text-align: center ;">(по предварительной записи)</div>
							<div class="date ccc" style="font-weight: bold;">
							19-20 февраля         <br/>                                                                              
           со скидкой 70% 
</div >
<div class="ccc" style="font-weight: bold;">Стоимость консультации со скидкой: 600 рублей </div>
<div class="ccc" style="text-align:right;font-weight: bold;">без скидки 2000 рублей</div>
<div class="t2 ccc" style="font-weight: bold;">ВЫГОДА - ЭКОНОМИЯ  1400 рублей</div>
<div class="zapis ccc">ЗАПИСЬ ОГРАНИЧЕНА<br/>
     УЖЕ ЗАПИСАЛОСЬ <span class="chel"><?=$COUNT?></span> ЧЕЛ<?=($COUNT < 2 || $COUNT > 4)?'':''?>
</div>
                           <!-- <div class="c">Цена консультации без акции 2000 Р.</div>-->
                            <!--<div class="time">
                                <div class="tt">акция действительна до конца дня:</div>
                                <div class="timer">
                                    <div class="item">
                                        <div class="day">00</div>
                                        <i>дней</i>                                 
                                    </div>
                                    <div class="item">
                                        <div class="hour">06</div>
                                        <i>часов</i> 
                                    </div>
                                    <div class="item">
                                        <div class="min">48</div>
                                        <i>минут</i> 
                                    </div>
                                    <div class="item">
                                        <div class="sec">59</div>
                                        <i>секунд</i> 
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="wrap-call fl-r">
                            <div class="wrap">
                                <div class="title">Заполните форму<br/>
                                    <span>для получения скидки:</span></div>
                                <p class="t">Мы перезвоним Вам в рабочее 
                                    время в течение 30 минут
                                </p>
                                <form id="form1" method="post" action="" class="call_form" novalidate="novalidate"> 
                                    <input type="hidden" name="title" value="Акция">
                                    <input type="text" placeholder="Введите имя" name="name">
                                    <input type="text" placeholder="Введите номер телефона" name="phone">
                                    <input type="submit" value="ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ ">
                                    <p class="small">Данные никогда не будут 
                                        переданы третьим лицам!</p>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slide-2 landingItem" id="slide-2">
                <div class="wrapper">
                    <div class="title h">
                        <span>для кого наши услуги?</span>
                    </div>
                    <div class="slogan">
                        <p>Пропустили срок принятия наследства? Неожиданно узнали, что наследственное имущество
                            завещано, продано илиподарено другому? Хотите оспорить права другого наследника,
                            который, по Вашему мнению, не достоин наследования?  Эти и другие вопросы по
                            наследству требуют немедленного разрешения квалифицированными специалистами.</p>
                        <p>Вы можете себе позволить потерять дорогостоящее имущество в результате проволочки или
                            неграмотных действий некомпетентного юриста?  Чем чревата лично для Вас такая потеря?
                            Как это отразится на Вашем имущественном положении, жизни Вашей семьи?</p>
                    </div>
                    <div class="title2">
                        Не теряйте драгоценное время. Действуйте. Выбирайте лучших специалистов,<br/>
                        готовых взять на себя ответственность за качество своей работы.
                    </div>
                    <div class="sep2"></div>
                    <div class="blocks-info clearfix">
                        <div class="block fl-l">
                            <div class="t">
                                <div>по каким делам мы можем <br/>
                                    вам помочь? помогаем:</div>
                            </div>
                            <div class="info clearfix">
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/1.png" alt=""></div>
                                    <div class="desk">Восстановить пропущенный срок 
                                        наследования</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/2.png" alt=""></div>
                                    <div class="desk">Принять наследство в судебном порядке</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/3.png" alt=""></div>
                                    <div class="desk">Доказать родство с умершим через суд</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/4.png" alt=""></div>
                                    <div class="desk">Включить в наследство конкретное 
                                        имущество</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/5.png" alt=""></div>
                                    <div class="desk">Оспорить права других наследников, 
                                        признать наследника недостойным</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/6.png" alt=""></div>
                                    <div class="desk">Увеличить Вашу долю в наследстве</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/7.png" alt=""></div>
                                    <div class="desk">Уменьшить долю других наследников</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/8.png" alt=""></div>
                                    <div class="desk">Оспорить завещание или договоры 
                                        купли-продажи, дарения, содержания</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/9.png" alt=""></div>
                                    <div class="desk">Определить между наследниками 
                                        порядок пользования наследственным 
                                        имуществом</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/10.png" alt=""></div>
                                    <div class="desk">Разделить наследственное имущество 
                                        между наследниками</div>
                                </div>

                            </div>
                        </div>
                        <div class="block fl-r">
                            <div class="t">
                                <div>что именно мы делаем?</div>
                            </div> 
                            <div class="info clearfix">
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/11.png" alt=""></div>
                                    <div class="desk">Консультируем наследников устно и 
                                        письменно</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/11.png" alt=""></div>
                                    <div class="desk">Считаем наследственные доли</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/11.png" alt=""></div>
                                    <div class="desk">Готовим документы в суд</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/11.png" alt=""></div>
                                    <div class="desk">Ведем от Вашего имени переговоры с 
                                        другими наследниками</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/11.png" alt=""></div>
                                    <div class="desk">Представляем Ваши интересы в суде 
                                        (возможно без Вашего участия) </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/11.png" alt=""></div>
                                    <div class="desk">Полностью ведем наследственный спор, 
                                        вырабатывая тактику ведения дела, 
                                        подготавливая все документы 
                                        (ходатайства, заявления и пр.), 
                                        представляя доказательства, до 
                                        получения решения суда.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sep3">

                    </div>
                </div>
            </div>
            <div class="slide3 form-b">
                <div class="wrapper clearfix">
                    <img src="images/women1.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            Нужна<br/>
                            помощь? 
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form2" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="НУЖНА ПОМОЩЬ?">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide4 landingItem" id="slide-3">
                <div class="wrapper">
                    <div class="title">
                        <span>Ваши выгоды<br/>
                            что вы получаете при обращении<br/>
                            к нам:</span>
                    </div>
                    <div class="items">
                        <div class="row clearfix">
                            <div class="bl fl-l">
                                <div class="t">ПРЕИМУЩЕСТВО ПЕРЕД ДРУГИМИ НАСЛЕДНИКАМИ  </div>
                                <p>Вы не один! Вас поддерживает команда юристов и адвокатов с богатым опытом наследственных споров, со стажем юридической практики от 5 до 11 лет, знающие тонкости наследственных дел.</p>
                            </div>
                            <div class="bl fl-r">
                                <div class="t">ФИНАНСОВУЮ ВЫГОДУ </div>
                                <p>мы дополнительно готовим документы и Ваши расходы на юридическую помощь взыскиваются с проигравшей стороны по делу. Вы получаете наследство, не потратив ни рубля. Выгодно! </p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="bl fl-l">
                                <div class="t">КВАЛИФИЦИРОВАННУЮ КОНСУЛЬТАЦИЮ </div>
                                <p>где бывает бесплатный сыр?.. Правильно! Вы готовы потерять имущество из-за экономии на консультации специалиста? ...Именно поэтому наша консультация стоит денег. Вы достойны лучших профессионалов! Позвольте себе получить ПОЛНУЮ ДОСТОВЕРНУЮ информацию по Вашему делу. </p>
                            </div>
                            <div class="bl fl-r">
                                <div class="t">СПОКОЙСТВИЕ И УВЕРЕННОСТЬ </div>
                                <p>
                                    Вы можете не «трястись от страха» в суде, не участвовать в перебранках наследников, доверив полностью решение вопроса профессионалам. Вы сохраняете свои нервы.</p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="bl">
                                <div class="t">Свободное время для<br/>
                                    работы и личных дел</div>
                                <p>пока другие наследники пропадают в судах и спорят с командой Ваших юристов, Вы свободны для более важных дел или общения с близкими.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide5 landingItem" id="slide-4">
                <div class="wrapper">
                    <div class="title h"><span>Специалисты для вас:</span></div>
                    <div class="specialist">
                        <div class="top">
                            <div class="photo"> 
                                <img src="images/specialist/1.png" alt="">
                            </div>
                            <div class="ps">
                                Адвокат
                            </div>
                            <div class="name">Епифанова Марина Валерьевна</div>
                            <div class="posada">Руководитель юридической практики<br/>
                                стаж 10 лет </div>
                        </div>
                        <div class="partners">
                            <div class="t">партнеры</div>
                            <div class="items">
                                <div class="item">
                                    <div class="photo"> 
                                        <img src="images/specialist/2.png" alt="">
                                    </div>
                                    <div class="ps">
                                        Адвокат
                                    </div>
                                    <div class="name">Добрыдень Николай
                                        Иванович</div>
                                    <div class="posada">стаж 13  лет</div>
                                </div>
                                <div class="item">
                                    <div class="photo"> 
                                        <img src="images/specialist/3.png" alt="">
                                    </div>
                                    <div class="ps">
                                        Адвокат
                                    </div>
                                    <div class="name">Епифанов  Константин
                                        Валерьевич</div>
                                    <div class="posada">стаж 5 лет </div>
                                </div>
                                <div class="item">
                                    <div class="photo"> 
                                        <img src="images/specialist/4.png" alt="">
                                    </div>
                                    <div class="ps">
                                        Адвокат
                                    </div>
                                    <div class="name">Тубакин Владислав
                                        Вячеславович</div>
                                    <div class="posada">стаж 5 лет</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide6 form-b">
                <div class="wrapper clearfix">
                    <img src="images/women4.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            не теряйте<br/>
                            время! 
                        </div>
                        <div class="t2">
                            наши специалисты помогут <br/>
                            в решении Ваших проблем.
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form3" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="не теряйте время!">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide7 text-i landingItem" id="slide-5">
                <div class="wrapper">
                    <div class="h"><span>наша практика</span></div>
                    <div class="sl">В целях конфиденциальности данные о клиентах намеренно изменены</div>
                    <div class="title h2"><mark>Восстановление срока наследования</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">1</span>
                                    <div class="icon">
                                        <img src="images/icon/1.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К специалисту компании обратился гр-н М.Н. Несколько лет назад в другом городе у него умерла родная тетя, которая втайне от всех родственников оставила на М.Н. завещание на свою квартиру. О завещании М.Н. тоже не знал и не стал обращатся к нотариусу после ее смерти. Спустя несколько лет в квартире тети обнаружилось завещание, но М.Н. не мог оформить квартиру на себя, так как вовремя (в течение 6 месяцев с момента смерти тети) не обратился к нотариусу. М.Н. не знал что делать и просил юристов помочь. </p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Юрист предъявил в суд требование о восстановлении срока принятия наследства М.Н. В суд были представлены  письменные доказательства, опрошены свидетели. В результате суд восстановил М.Н. срок принятия наследства после смерти своей тети. М.Н.оформил на себя квартиру и в последующем продал ее. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sep"></div>
                </div>
            </div>
            <div class="slide8 form-b">
                <div class="wrapper clearfix">
                    <img src="images/form-slide1.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            СВЯЖИТЕСЬ <br/>
                            С НАМИ 
                        </div>
                        <div class="t2">
                            наши специалисты помогут <br/>
                            в решении Ваших проблем.
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form4" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="СВЯЖИТЕСЬ С НАМИ ">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide9 text-i">
                <div class="wrapper">
                    <div class="title h2"><mark>Принятие наследства</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">2</span>
                                    <div class="icon">
                                        <img src="images/icon/2.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К юристу обратилась гр-ка И.Н. с просьбой помочь доказать принятие наследства после смерти своего мужа И.И. 
                                            После смерти своего мужа она осталась проживать в построенном ими доме и считала, что имеет на него все права. Но когда решила продать дом, оказалось, что он оформлен на умершего и ей нужно вступить в наследство.Нотариус отказалась выдать И.Н. свидетельство на наследство, потому что И.Н. не была прописана в доме, а с момента смерти мужа прошло более 6 лет. Дело осложнялось тем, что И.Н.работала и не имела возможности сама заниматься сбором документов и хождением в суды.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Юрист подготовил И.Н.необходимые документы в суд, собрал доказательства ее проживания в доме, управления имуществом умершего мужа и смог доказать факт принятия ею наследства. В течение 1 месяца суд вынес решение в пользу И.Н., по которому она смогла оформить свой дом. Все судебные заседания юрист проводил самостоятельно, без отвлечения И.Н. от своей работы. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sep"></div>
                </div>
            </div>
            <div class="slide10 form-b">
                <div class="wrapper clearfix">
                    <img src="images/dom.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            ВОСПОЛЬЗУЙТЕСЬ <br/>
                            <span>ПРЕДЛОЖЕНИЕМ</span>
                        </div>
                        <div class="t2">
                            наши специалисты помогут <br/>
                            в решении Ваших проблем.
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form5" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="ВОСПОЛЬЗУЙТЕСЬ ПРЕДЛОЖЕНИЕМ">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide11 text-i">
                <div class="wrapper">
                    <div class="title h2"><mark>Установление факта родственных отношений<br/>
                            с умершим</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">3</span>
                                    <div class="icon">
                                        <img src="images/icon/3.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К юристу обратилась гр-н К.М., который не мог вступить в наследство после смерти своей бабушки, так как не мог доказать свое родство с ней. Документы о рождении его бабушки, о ее браке не сохранились в архивах и он не мог подтвердить, что является наследником. </p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Юрист сделал необходимые запросы, собрал документы об утере части архивов, подготовил К.М. заявление в суд и смог доказать родственные отношения умершей и наследника. В ходе судебных заседаний юристом были опрошены ряд свидетелей, которые подтвердили пояснения юриста. Благодаря решению суда К.М. смог вступить в наследство на дорогостоящее имущество.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sep"></div>
                </div>
            </div>
            <div class="slide13 form-b">
                <div class="wrapper clearfix">
                    <img src="images/mom.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            ЗАЩИТИТЕ <br/>
                            СВОИ ПРАВА 
                        </div>
                        <div class="t2">
                            наши специалисты помогут <br/>
                            в решении Ваших проблем.
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form6" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="ЗАЩИТИТЕ СВОИ ПРАВА ">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide14 text-i">
                <div class="wrapper">
                    <div class="title h2"><mark>Признание недостойным наследником</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">4</span>
                                    <div class="icon">
                                        <img src="images/icon/4.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К юристу обратился В.М. с просьбой помочь восстановить справедливость. У В.М. умерла  мать, после смерти которой  осталось наследство в виде дома и земельного участка. В доме всегда с родителями жил сам В.М. и его семья. Он досматривал мать, ухаживал за ней, присматривал за домом  и считал, что имеет все права на имущество. Но сразу после смерти матери на наследство стал претендовать родной брат В.М. - Н., который вел аморальный образ жизни, неоднократно избивал мать, воровал у нее деньги. В.М. просил юриста помочь лишить наследства Н., который по закону имел право наследовать наравне с В.М.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Юрист оценил все доказательства и пришел к выводу о возможности признания Н. недостойным наследником в соответствии с законом. Юристом были опрошены свидетели, собраны доказательства, проведено собственное расследование. В результате юрист предъявил в суд иск в интересах В.М. о признании Н.недостойным наследником. Юрист смог в суде отстоять права В.М. и доказать, что Н. необходимо лишить права наследовать. Своим решением суд лишил Н.наследства.  Все наследство досталось В.М.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sep"></div>
                </div>
            </div>
            <div class="slide15 form-b">
                <div class="wrapper clearfix">
                    <img src="images/mens.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            не теряйте<br/>
                            время! 
                        </div>
                        <div class="t2">
                            наши специалисты помогут <br/>
                            в решении Ваших проблем.
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form7" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="не теряйте время! низ">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide14 text-i">
                <div class="wrapper">
                    <div class="title h2"><mark>Оспаривание завещания</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">5</span>
                                    <div class="icon">
                                        <img src="images/icon/5.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p> К юристу обратилась гр-ка И.Н. с просьбой помочь оспорить завещание своего отца, который умер несколько месяцев назад. И.Н. пояснила юристу, что у нее всегда были хорошие отношения с отцом, она ухаживала за ним и даже наняла сиделку. Последнее время у отца были сильные боли в связи с заболеванием и он принимал сильнодействующие обезбаливающие, которые влияли на его способность мыслить. И.Н. пояснила, что после смерти отца она узнала, что все свое имущество он завещал нанятой ею сиделке. И.Н.осталась ни с чем.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Юрист проанализировал ситуацию и пришел к выводу о том, что сиделка воспользовалась болезненным состоянием отца и смогла выбрать момент, чтобы оформить завещание на свое имя. Проверив медицинскую документацию, выписные эпикризы, назначения врачей, юрист подготовил иск в суд и смог оспорить завещание, составленное умершим на сиделку. Решением суда завещание признано недействительным. И.Н. получила все наследство после смерти своего отца.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sep"></div>
                </div>
            </div>

            <div class="slide10 slide20 form-b">
                <div class="wrapper clearfix">
                    <img src="images/shtamp.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            ВОСПОЛЬЗУЙТЕСЬ <br/>
                            <span>ПРЕДЛОЖЕНИЕМ</span>
                        </div>
                        <div class="t2">
                            наши специалисты помогут <br/>
                            в решении Ваших проблем.
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form5" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="ВОСПОЛЬЗУЙТЕСЬ ПРЕДЛОЖЕНИЕМ">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="slide14 text-i">
                <div class="wrapper">
                    <div class="title h2"><mark>Раздел наследственного имущества</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">6</span>
                                    <div class="icon">
                                        <img src="images/icon/6.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К юристу обратилась гр-ка  О.В., которая унаследовала после смерти своего отца часть дома и земельного участка. Другую часть дома в наследство получил сводный брат О.В., с которым у нее сложились крайне неприязненные отношения. Обе семьи хотели жить в доме и не могли определиться кто в какой части будет жить, каким участком двора пользоваться. Каждый хотел забрать себе самые светлые и большие комнаты, лучший участок земли. Договориться стороны не могли. </p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Юрист узнал пожелания О.В., получил оценку специалиста по вопросу возможности раздела дома на 2 части. Юристом был предъявлен в суд иск в интересах О.В. о разделе дома и земельного участка, где были предложены несколько вариантов раздела, устраивающие его клиента. Брат О.В. не согласился на раздел добровольно. Решением суда наследственные дом и земельный участок были разделены по одному из предложенных юристом варианту в интересах О.В. Все судебные расходы, которые заплатила О.В, были взысканы судом с ее брата и возвращены ей.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sep"></div>
                </div>
            </div>
            <div class="slide21 slide15 form-b">
                <div class="wrapper clearfix">
                    <img src="images/dom2.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            не теряйте<br/>
                            время! 
                        </div>
                        <div class="t2">
                            наши специалисты помогут <br/>
                            в решении Ваших проблем.
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form11" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="не теряйте время! низ">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="slide17 video">
                <div class="wrapper">
                    <div class="title"><span>бесплатные видео-консультации</span></div>
                    <div class="slider-video">
                        <ul>
                            <li>
                                <img src="images/video1.jpg" alt="">
                                <p>Могилевкина Ирина Александровна, 
                                    руководитель, адвокат, 23.08.14</p>
                            </li>
                            <li>
                                <img src="images/video1.jpg" alt="">
                                <p>Могилевкина Ирина Александровна, 
                                    руководитель, адвокат, 23.08.14</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>-->

            <div class="slide16 review landingItem" id="slide-6">
                <div class="wrapper">
                    <div class="title"><span>отзывы</span></div>
                    <div class="slider-review">
                        <ul>
                            <li>
                                <div class="text-r">
                                    <div class="row">
                                        <div class="prob">
                                            <div class="t">Суть дела: </div>
                                            <p>К специалисту компании обратилась гр-ка К.И. с просьбой уменьшить в интересах ребенка количество времени, проводимого с отцом. С отцом ребенка К.И. расторгла брак более года назад по причине злоупотребления мужем алкоголем, насилия в семье. Со времени развода бывший супруг видел 3-х летнего сына 2 раза. В настоящее же время подал в суд иск, в котором требовал установить порядок общения с ребенком, в том числе оставлять ребенка 1 раз каждую вторую неделю месяца на ночь у себя дома. </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="resh">
                                            <div class="t">решение: </div>
                                            <p>В результате сбора доказательств агрессивного поведения отца ребенка в период брака, склонности к употреблению алкоголя, судом был установлен иной график общения с ребенком в этом возрасте, лишь в присутствии матери, в общественных местах.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="name">
                                    <p>Могилевкина Ирина Александровна </p>
                                    <span>23.08.14</span>
                                </div>
                            </li>
                            <li>
                                <div class="text-r">
                                    <div class="row">
                                        <div class="prob">
                                            <div class="t">Суть дела: </div>
                                            <p>К специалисту компании обратилась гр-ка К.И. с просьбой уменьшить в интересах ребенка количество времени, проводимого с отцом. С отцом ребенка К.И. расторгла брак более года назад по причине злоупотребления мужем алкоголем, насилия в семье. Со времени развода бывший супруг видел 3-х летнего сына 2 раза. В настоящее же время подал в суд иск, в котором требовал установить порядок общения с ребенком, в том числе оставлять ребенка 1 раз каждую вторую неделю месяца на ночь у себя дома. </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="resh">
                                            <div class="t">решение: </div>
                                            <p>В результате сбора доказательств агрессивного поведения отца ребенка в период брака, склонности к употреблению алкоголя, судом был установлен иной график общения с ребенком в этом возрасте, лишь в присутствии матери, в общественных местах.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="name">
                                    <p>Могилевкина Ирина Александровна </p>
                                    <span>23.08.14</span>
                                </div>
                            </li>
                            <li>
                                <div class="text-r">
                                    <div class="row">
                                        <div class="prob">
                                            <div class="t">Суть дела: </div>
                                            <p>К специалисту компании обратилась гр-ка К.И. с просьбой уменьшить в интересах ребенка количество времени, проводимого с отцом. С отцом ребенка К.И. расторгла брак более года назад по причине злоупотребления мужем алкоголем, насилия в семье. Со времени развода бывший супруг видел 3-х летнего сына 2 раза. В настоящее же время подал в суд иск, в котором требовал установить порядок общения с ребенком, в том числе оставлять ребенка 1 раз каждую вторую неделю месяца на ночь у себя дома. </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="resh">
                                            <div class="t">решение: </div>
                                            <p>В результате сбора доказательств агрессивного поведения отца ребенка в период брака, склонности к употреблению алкоголя, судом был установлен иной график общения с ребенком в этом возрасте, лишь в присутствии матери, в общественных местах.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="name">
                                    <p>Могилевкина Ирина Александровна </p>
                                    <span>23.08.14</span>
                                </div>
                            </li>
                            <li>
                                <div class="text-r">
                                    <div class="row">
                                        <div class="prob">
                                            <div class="t">Суть дела: </div>
                                            <p>К специалисту компании обратилась гр-ка К.И. с просьбой уменьшить в интересах ребенка количество времени, проводимого с отцом. С отцом ребенка К.И. расторгла брак более года назад по причине злоупотребления мужем алкоголем, насилия в семье. Со времени развода бывший супруг видел 3-х летнего сына 2 раза. В настоящее же время подал в суд иск, в котором требовал установить порядок общения с ребенком, в том числе оставлять ребенка 1 раз каждую вторую неделю месяца на ночь у себя дома. </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="resh">
                                            <div class="t">решение: </div>
                                            <p>В результате сбора доказательств агрессивного поведения отца ребенка в период брака, склонности к употреблению алкоголя, судом был установлен иной график общения с ребенком в этом возрасте, лишь в присутствии матери, в общественных местах.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="name">
                                    <p>Могилевкина Ирина Александровна </p>
                                    <span>23.08.14</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="slide15 slide22 form-b">
                <div class="wrapper clearfix">
                    <img src="images/women3.png" class="women" alt="">
                    <div class="left-b fl-l">
                        <div class="t">
                            не теряйте<br/>
                            время! 
                        </div>
                        <div class="t2">
                            наши специалисты помогут <br/>
                            в решении Ваших проблем.
                        </div>
                        <div class="telephone">
                            <p>Звоните по телефону:</p>
                            <span>8 (800) 333-02-74</span>
                        </div>
                        <div class="ors">
                            или:  <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="wrap-call fl-r">
                        <div class="wrap">
                            <div class="title">отправьте заявку на
                                обратный звонок 
                                сейчас!</div>
                            <form id="form8" method="post" action="" class="call_form" novalidate="novalidate"> 
                                <input type="hidden" name="title" value="не теряйте время!">
                                <input type="text" placeholder="Введите имя" name="name">
                                <input type="text" placeholder="Введите номер телефона" name="phone">
                                <input type="submit" value="отправить заявку">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide19 map landingItem" id="slide-7">
                <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=vr6i2Pn0tgK2L833-d3JaJvv5DCVqrDH&width&height=390"></script>
                <div class="wrapper">
                    <div class="plashka">
                        <div class="wrap">
                            <div class="name">
                                <p>юридическая компания</p>
                                <span>«викториал»</span>
                            </div>
                            <p>г. Краснодар Фестивальный м/н,  
                                ул. Монтажников 1, 3 подъезд,<br/> 
                                3 этаж, оф. №1</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="wrapper clearfix">
                    <div class="copy fl-l">Copyright 2012 © Victorial</div>
                    <div class="site fl-r">
                        <a href="http://incomyug.ru/glavnaya/" target="_blank">Создание и продвижение сайтов:</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
