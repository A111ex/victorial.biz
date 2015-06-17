<?php
//multilanding
$getId = trim($_GET['utm_content']);
$title = ($getId)?$getId :$title ='default';

//print ('<pre>');print_r($title);print('</pre>');
if (    $title == 'advokatskayaKontora1' || $title == 'advokatskayaKontora2'    || 
        $title == 'uridicheskiyKabinet1' || $title == 'uridicheskiyKabinet2'    || 
        $title == 'uridicheskiyAdvokat1' || $title == 'uridicheskiyAdvokat2') {
    include 'includes/title/advokatskayaKontora.php';
}

if (    $title == 'zadatVoprosAdvokatu1'        || $title == 'zadatVoprosAdvokatu2'         || 
        $title == 'voprosAdvokatu1'             || $title == 'voprosAdvokatu2'              || 
        $title == 'uridicheskayaKonsultatziya1' || $title == 'uridicheskayaKonsultatziya2'  || 
        $title == 'konsultatsiyaUrista1'        || $title == 'konsultatsiyaUrista2'         || 
        $title == 'konsultatsiyaAdvokata1'      || $title == 'konsultatsiyaAdvokata2') {
    include 'includes/title/zadatVoprosAdvokatu.php';
}


if (    $title == 'advokatPoGrazhdanskimDelam1' || $title == 'advokatPoGrazhdanskimDelam2'  || 
        $title == 'grazhdanskiyeUslugi1'        || $title == 'grazhdanskiyeUslugi2'         || 
        $title == 'grazhdanskieSpori1'          || $title == 'grazhdanskieSpori2'           || 
        $title == 'grazhdanskiyAdvokat1'        || $title == 'grazhdanskiyAdvokat2'         ||
        $title == 'advokatKrasnodara1'          || $title == 'advokatKrasnodara2' ) {
    include 'includes/title/grazhdanskiyAdvokat.php';
}

if (    $title == 'advokatPoSemeynimDelam1' || $title == 'advokatPoSemeynimDelam2' || 
        $title == 'semeyniyAdvokat1'        || $title == 'semeyniyAdvokat2') {
    include 'includes/title/semeyniyAdvokat.php';
}

if ($title == 'imustchestvoPriRazvode1' || $title == 'imustchestvoPriRazvode2') {
    include 'includes/title/imustchestvoPriRazvode.php';
}

if (    $title == 'neUplataAlimentov1'  || $title == 'neUplataAlimentov2'   || 
        $title == 'alimentiNaRebenka1'  || $title == 'alimentiNaRebenka2'   || 
        $title == 'alimentiVBrake1'     || $title == 'alimentiVBrake2'      || 
        $title == 'alimentiNa2Detey1'   || $title == 'alimentiNa2Detey2'    || 
        $title == 'alimenti2'           || $title == 'alimentiVBrake2'      ||
        $title == 'uplataAlimentov1'    || $title == 'uplataAlimentov2'     ||
        $title == 'dolgiPoAlimentam1'   || $title == 'dolgiPoAlimentam2'    ||
        $title == 'alimentiNa2Detey1'   || $title == 'alimentiNa2Detey2'    ||
        $title == 'alimentiVBrake1'     || $title == 'alimentiVBrake2'      ) {
    include 'includes/title/neUplataAlimentov.php';
}

if (    $title == 'razvodSuprugov1'         ||  $title == 'razvodSuprugov2'         || 
        $title == 'rastorzhenieBraka1'      ||  $title == 'rastorzhenieBraka2'      || 
        $title == 'razvodSMuzhem1'          ||  $title == 'razvodSMuzhem2'          || 
        $title == 'razvodCherezSud1'        ||  $title == 'razvodCherezSud2'        ||
        $title == 'razvodSud1'              ||  $title == 'razvodSud2'              ||
        $title == 'razvodSZhenoy1'          ||  $title == 'razvodSZhenoy2'          ||
        $title == 'kakRazvestisSZhenoy1'    ||  $title == 'kakRazvestisSZhenoy2'    ||
        $title == 'kakRazvestisSMuzhem1'    ||  $title == 'kakRazvestisSMuzhem2'    ) {
    include 'includes/title/razvodSuprugov.php';
}

if (    $title == 'osporitZaveshanie1'      || $title == 'osporitZaveshanie2' ||
        $title == 'advokatPoNasledstvu1' || $title == 'advokatPoNasledstvu2') {
    include 'includes/title/osporitZaveshanie.php';
}

if ($title == 'moralniyVred1' || $title == 'moralniyVred2') {
    include 'includes/title/moralniyVred.php';
}
//exit();
global $fileMassivPath, $minCnt, $maxCnt;
require($_SERVER['DOCUMENT_ROOT'].'/init.php');
$fileMassivPath=__DIR__.'/includes/count.txt';
$arMassiv=getMassiv();
$COUNT = intval($arMassiv['COUNT']);
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Юридический центр </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="images/favicon.ico">
        <link href="css/res.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/jquery.fancybox.css" rel="stylesheet">
        <!--<link href="css/nivo-slider.css" rel="stylesheet" type="text/css">-->
        <link rel="stylesheet" href="css/animate.css">
        <link href="css/style.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!--<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>-->
        <!-- <script src="js/jquery.bxslider.min.js"></script> -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/tween.js"></script>
        <script src="js/jquery.liLanding.js"></script>
        <script src="js/main.js"></script>
        <script src="js/week.js"></script>
        <script src="js/wow.min.js"></script>
        <!--дата акции-->
		<script type="text/javascript">
			window.onload=function(){
				$("#week").html(obj.func(obj.arrM)+'-'+obj.func(obj.arrF)+' '+obj.month[obj.month.length - 1]+"<br/>со скидкой 50%" );
			}
		</script>
<!--                <script type="text/javascript">
                        $(window).load(function() {
                            $('#slider').nivoSlider({
                                            controlNav:false,directionNav:false,effect:'fade',animSpeed: 50,pauseTime: 5000
                        })
                });
                </script>-->
                <!--comment2-->
                <!--comment3-->
                <script type="text/javascript">
                    var total_pics_num = 4; // колличество изображений
                    var interval = 5000;    // задержка между изображениями
                    var time_out = 1;       // задержка смены изображений
                    var i = 0;
                    var timeout;
                    var opacity = 100;
                    function fade_to_next() {
                      opacity--;
                      var k = i + 1;
                      var image_now = 'image_' + i;
                      if (i == total_pics_num) k = 1;
                      var image_next = 'image_' + k;
                      document.getElementById(image_now).style.opacity = opacity/100;
                      document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';
                      document.getElementById(image_next).style.opacity = (100-opacity)/100;
                      document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';
                      timeout = setTimeout("fade_to_next()",time_out);
                      if (opacity === 1) {
                        opacity = 100;
                        clearTimeout(timeout);
                      }
                    }
                    setInterval (
                      function() {
                        i++;
                        if (i > total_pics_num) i=1;
                        fade_to_next();
                      }, interval
                    );
                </script>
    </head>
    <body>
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M87Q8B"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M87Q8B');</script>
	<!-- End Google Tag Manager -->
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
                            <input type="submit" value="ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ" >
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
                                <p>Юридический центр семейного права<br/>
                                    г. Краснодар
                                </p>
                            </a>
                        </div>
                        <div class="telephone fl-r">
                            <div class="tel">8 (800) 333-02-74</div>
                            <a href="#inline1" class="call" onclick="metrika='call_head';">Записаться на встречу</a>
                        </div>
                    </div>
                </div>
                <nav class="main-menu">
                    <div class="wrapper">
                        <ul class="clearfix">
                            <li><a href="#slide-1"><span>В начало</span></a></li>
                            <li><a href="#slide-2"><span>Чем для вас<br/>
                                        мы полезны</span></a></li>
                            <li><a href="#slide-3"><span>Ваши<br/>
                                        выгоды</span></a></li>
                            <li><a href="#slide-4"><span>специалисты<br/>
                                        для вас</span></a></li>
                            <li><a href="#slide-5"><span>наша<br/>
                                        практика</span></a></li>
                            <!--<li><a href="#slide-6"><span>отзывы</span></a></li>-->
                            <li><a href="#slide-7"><span>Как нас найти</span></a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="slide-1 landingItem" id="slide-1">
                <div class="wrapper">
                    <?php if(is_array($arResult)): echo $arResult['h1']; else:?>
                    <h1>адвокаты и юристы<br>по семейным спорам</h1>
                    <?php endif;?>
                    <div class="block-form-main clearfix">
                        <div class="women">
                            <div>
                                <img src='images/carusel/slide_1.png' id="image_1" style="position: absolute;" />
                                <img src='images/carusel/slide_2.png' id="image_2" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
                                <img src='images/carusel/slide_3.png' id="image_3" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
                                <img src='images/carusel/slide_4.png' id="image_4" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
                            </div>
                            <!--                            <div class="slider_container">
                                                            <div id="slider" class="nivoSlider">
                                                                <img src="images/carusel/gur.png" alt=""  />
                                                                <img src="images/carusel/len.png" alt=""  /> 
                                                                <img src="images/carusel/mar.png" alt=""  /> 
                                                                <img src="images/carusel/nas.png" alt=""  /> 
                                                            </div>
                                                        </div>-->
                        </div>
                        <!--<img src="images/wome1.png" alt="" class="women">-->
                        <div class="action fl-l">
                            <div class="t">Акция!</div>
                            <div class="con ccc" style="font-weight: bold;">КОНСУЛЬТАЦИЯ</div>
                            <div class="ccc" style="text-align: center ;">(по предварительной записи)</div>
                            <div id = 'week' class="date ccc" style="font-weight: bold;"></div >
                            <div class="ccc" style="font-weight: bold;">Стоимость консультации со скидкой: 500 рублей </div>
                            <div class="ccc" style="text-align:right;font-weight: bold;">без скидки 1000 рублей</div>
                            <div class="t2 ccc" style="font-weight: bold;">ВЫГОДА - ЭКОНОМИЯ  500 рублей</div>
                            <div class="zapis ccc" style="">ЗАПИСЬ ОГРАНИЧЕНА<br>
                                УЖЕ ЗАПИСАЛОСЬ <span class="chel"><?= $COUNT ?></span> ЧЕЛ<?= ($COUNT < 2 || $COUNT > 4) ? '' : '' ?>
                            </div>
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
                                    <input type="submit" class="wow pulse" data-wow-iteration="infinite" data-wow-delay="6000ms" data-wow-duration="2300ms" value="ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ" onclick="metrika='akziya';">
                                    <p class="small">Данные никогда не будут 
                                        переданы третьим лицам!</p>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slide-2 landingItem" >
                <div class="wrapper">
                    <div class="slogan">
                        <?php if(is_array($arResult)): echo $arResult['slogan']; else:?>
                        <p>Если Ваша семья на грани развода или уже распалась, постоянные скандалы и взаимные упреки измотали Вас и не дают окончательно расстаться, читайте внимательно. Эта информация для Вас.</p>
                        <p>Как безболезненно развестись? Как забрать ребенка у мужа? Как договориться с женой об общении с ребенком после развода? Как разделить имущество, кредиты и начать новую жизнь? Как взыскать алименты и реально их получать?</p>
                        <p>Откладывая решение этих вопросов, Вы рискуете получить нервный срыв, приобрести хронические заболевания. Психологи утверждают, что стресс, получаемый супругами в период развода в 7 раз сильнее, чем от физической утраты близкого человека. Кроме того, Вы рискуете пропустить все сроки обращения в суд для защиты своих прав и лишиться ребенка, имущества.</p>
                        <p>Неправильное поведение в процессе расторжения брака, невнимательность к мелочам и отсутствие опыта в подобных делах способны привести к не менее серьезным последствиям. Вы рискуете остаться без средств к существованию, выбиться из рабочего графика, потерять приобретенное  имущество. На Вас могут «повесить» совместные кредиты и долги. В результате даже после развода Вы будете долгие годы финансово и эмоционально зависеть от супруга. Из-за амбиций одного из родителей возможна полная потеря общения с ребенком, передача его на воспитание чужой маме или чужому папе, с призрачной возможностью лишь издалека наблюдать как он растет.</p>
                        <p>Перестаньте бездействовать! Примите решение,  которое позволит Вам чувствовать себя спокойно и защищенно. Доверьте свои проблемы квалифицированным юристам в области семейного права. Избавьтесь от страха ожидания, неопределенности и сомнений.</p>
                        <p>Специалисты Юридического центра Семейного права знают все о Ваших правах и возможностях при разводе. Наша специализация в сфере семейного права позволяет использовать накопленные знания и опыт  по другим похожим делам при решении Вашей семейной проблемы и гарантирует Вам уверенность в успехе.</p>
                        <?php endif;?>
                    </div>
<!--                    <div class="title h">
                        <span>для кого наши услуги!</span>
                    </div>
                    <div class="slogan">
                        Так уж случилось, что Ваша семья распалась или находится на грани этого...
                        С бывшим супругом вас связывают дети, совместное имущество, кредиты...
					</div>
                         Муж угрожает забрать ребенка себе, грозит выселением из квартиры, требует 
                        общения с ребенком в любое удобное для него время. Вы в панике идете на 
                        уступки, поскольку боитесь возможностей и связей мужа.  
                    
                    <div class="sep"></div>
                    <div class="items">
                        <div class="item">
                            <div>Как защитить<br/>
                                себя и ребенка? 
                            </div>
                        </div>
                        <div class="item">
                            <div>как не остаться<br/>
                                на улице без<br/>
                                средств к<br/>
                                существованию?</div>
                        </div>
                        <div class="item">
                            <div>Как разделить<br/>
                                имущество в суде,<br/>
                                увеличив свою<br/>
                                долю на законных<br/>
                                основаниях?</div>
                        </div>
                        <div class="item">
                            <div>как взыскать<br/>
                                алименты и<br/>
                                реально их<br/>
                                получать?</div>
                        </div>
                        <div class="item">
                            <div>как расстаться<br/>
                                цивилизованно с<br/>
                                минимальными<br/>
                                потерями?</div>
                        </div>
                    </div>
                    <div class="sep"></div>
                    <div class="title2">
                        наши услуги именно для вас!<br/>
                        мы знаем ответы на эти вопросы и готовы стать вашей поддержкой!
                    </div>-->
                    <div class="sep2"></div>
                    <div class="blocks-info clearfix landingItem" id="slide-2">
                        <div class="block fl-l">
                            <div class="t">
                                <div><?php if($arResult['komp_title']): echo $arResult['komp_title']; else:?>чем для вас мы полезны:<?php endif;?></div>
                            </div>
                            <div class="info clearfix">
                                <?php if($polza): echo $polza; else:?>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/1.png" alt=""></div>
                                    <div class="desk">Консультируем устно и письменно по 
                                        вопросам семейного права</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/2.png" alt=""></div>
                                    <div class="desk">Участвуем в переговорах от Вашего 
                                        имени с бывшим супругом по вопросам 
                                        раздела имущества, определения места 
                                        жительства ребенка и графика общения 
                                        с ребенком</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/3.png" alt=""></div>
                                    <div class="desk">Готовим исковые заявления в суд и 
                                        другие документы</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/4.png" alt=""></div>
                                    <div class="desk">Представляем интересы в суде</div>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="block fl-r">
                            <div class="t">
                                <div><?php if($arResult['polza_title']): echo $arResult['polza_title']; else:?>по каким делам мы 
                                    можем вам помочь:<?php endif;?></div>
                            </div>
                            <div  <?php if ($arResult['height_dela']): echo $arResult['height_dela']; endif;?> class="info clearfix">
                                <?php if($dela): echo $dela; else:?>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/5.png" alt=""></div>
                                    <div class="desk">Расторжение брака, взыскание 
                                        алиментов</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/6.png" alt=""></div>
                                    <div class="desk">Раздел имущества супругов, раздел 
                                        долгов (кредитов)</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/7.png" alt=""></div>
                                    <div class="desk">Споры о детях:
                                        <ul>
                                            <li>Определение места жительства ребенка</li>
                                            <li>Устранение препятствий в 
                                                общении с ребенком в случае его 
                                                проживания с отцом</li>
                                            <li>Установление отцовства</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/8.png" alt=""></div>
                                    <div class="desk">Выселение, выписка бывшего супруга 
                                        из жилья</div>
                                </div> 
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/9.png" alt=""></div>
                                    <div class="desk">Определение порядка пользования 
                                        бывшими супругами совместным 
                                        жильем, выделение доли из 
                                        совместного жилья</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="icon fl-l"><img src="images/problem-icon/10.png" alt=""></div>
                                    <div class="desk">Помощь по уголовным делам при 
                                        угрозе жизни, здоровью, оскорблении, 
                                        насилии.</div>
                                </div>
                                <?php endif;?>
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
                                <input type="submit" value="отправить заявку" onclick="metrika='help';">
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
                        <span>Ваши выгоды при обращении к нам</span>
                    </div>
                    <div class="items">
                        <?php if($vigodi): echo $vigodi; else:?>
                        <div class="row clearfix">
                            <div class="bl fl-l">
                                <!--<div class="t">защищенность </div>-->
                                <p><span>Наша специализация в сфере семейного права</span> позволяет использовать накопленные знания и опыт по другим похожим делам при решении Вашей проблемы и гарантирует Вам уверенность в успехе.</p>
                            </div>
                            <div class="bl fl-r">
                                <!--<div class="t">Свободное время для работы и личных дел</div>-->
                                <p><span>Мы взыскиваем через суд Ваши расходы на юридическую помощь</span> с Вашего оппонента, что гарантирует Вам возврат затраченных денег и дает возможность полнее ощутить «вкус победы». </p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="bl fl-l">
                                <!--<div class="t">спокойствие и уверенность</div>-->
                                <p><span>Мы еженедельно предоставляем отчет</span> о результатах работы, что дает Вам дополнительную уверенность в Вашем правильном выборе. </p>
                            </div>
                            <div class="bl fl-r">
                                <!--<div class="t">Конфиденциальность </div>-->
                                <p><span>Командная работа наших юристов и адвокатов</span> обеспечивает всесторонний анализ Вашего дела и невозможность упущения из вида важных «мелочей».</p>
                            </div>
                        </div>
                        <?php endif;?>
                       <!--  <div class="row clearfix">
                            <div class="bl">
                                <div class="t">Свободное время для работы и личных дел</div>
                                <p>Пока Ваш бывший супруг спорит с командой Ваших юристов, Вы располагаете свободным временем для выполнения наиболее важных дел или общения с близкими.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="slide5 landingItem" id="slide-4">
                <div class="wrapper">
                    <div class="title h"><span>Специалисты для вас:</span></div>
                    <div class="specialist clearfix">
                        <div class="photo fl-l">
                            <img src="images/specialist.png" alt="">
                        </div>
                        <div class="desk">
                            <div class="p">Адвокат</div>
                            <div class="name">Епифанова Марина Валерьевна</div>
<!--                            <div class="posada">руководитель юридической практики</div>-->
                            <a href="#inline1" class="call" onclick="metrika='spec';">получить консультацию</a>
                        </div>
                    </div>
<!--                    Блок со вторым специалистом-->
                    <div class="specialist clearfix">
                        <div class="photo fl-l">
                            <img src="images/gurgen1.jpg" alt="">
                        </div>
                        <div class="desk">
                            <div class="p">Адвокат</div>
                            <div class="name">Оганесян Гурген Александрович</div>
<!--                            <div class="posada">руководитель юридической практики</div>-->
                            <a href="#inline1" class="call" onclick="metrika='spec';">получить консультацию</a>
                        </div>
                    </div>
<!--                    Блок с третьим специалистом-->
                    <div class="specialist clearfix">
                        <div class="photo fl-l">
                            <img src="images/lena.jpg" alt="">
                        </div>
                        <div class="desk">
                            <div class="p">Юрист</div>
                            <div class="name">Колесникова Елена Геннадьевна</div>
<!--                            <div class="posada">руководитель юридической практики</div>-->
                            <a href="#inline1" class="call" onclick="metrika='spec';">получить консультацию</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slide6 form-b">
                <div class="wrapper clearfix">
                    <img src="images/ssssss.png" class="women" alt="">
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
                                <input type="submit" value="отправить заявку" onclick="metrika='time';">
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
                    <?php if($practic_block1): echo $practic_block1; else:?>
                    <div class="title h2"><mark>Расторжение брака. Взыскание алиментов.</mark></div>
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
                                        <p>К специалисту компании обратилась гр-ка М.В. с просьбой расторгнуть брак с мужем и взыскать алименты на содержание несовершеннолетнего сына. Ее муж М.Э. длительное время нигде не работал и находился на иждивении М.В., поэтому был против расторжения брака, уклонялся от явки в суд. М.В собиралась приобретать квартиру на заработанные деньги и опасалась, что муж будет претендовать на жилье. Поскольку супруг неоднократно применял насилие а М.В., она хотела избежать личного общения и встреч с ним.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>В интересах клиента, дело было проведено без участия М.В.. В течение 1 месяца вынесено решение о расторжении брака и взыскании алиментов на содержание ребенка.</p>
                                    </div>
                                </div>
                            </div>
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
                                        <p>К специалисту компании обратилась гр-ка Д.Ю. с просьбой взыскать алименты с бывшего мужа Д.О. на содержание ребенка и на ее содержание за прошлый период. Несмотря на то, что ранее Д.Ю. неоднократно принимала попытки взыскания алиментов, бывший супруг уклонялся от их уплаты.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Судом взысканы алименты за прошлый период (4 месяца) и на содержание ребенка, и на содержание Д.Ю. в общем размере 90 000 руб.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">3</span>
                                    <div class="icon">
                                        <img src="images/icon/4.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К специалисту компании обратилась гр-ка К.Н. с вопросом о возможности реального взыскания алиментов, если муж официально нигде не работает. Ранее суд уже взыскал с ее супруга К.В. на содержание общего ребенка 1/4 от заработной платы. В связи с тем, что супруг скрывал место работы и официально не был трудоустроен, реальное исполнение решения было невозможно.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Специалист подготовил К.Н. заявление о взыскании алиментов в твердой денежной сумме, изменив порядок их уплаты. Суд взыскал ежемесячно алименты с К.В. в размере 7283 руб. и все понесенные ранее К.Н. расходы на оказание юридической помощи. В счет накопившейся суммы долга в последующем К.Н. намерена наложить арест на имущество К.В. и забрать его в счет долга.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <div class="sep"></div>
                </div>
            </div>
            <div class="slide8 form-b">
                <div class="wrapper clearfix">
                    <img <?php if ($arResult['form_img']): echo $arResult['form_img']; else: ?>src="images/form-slide1.png" <?php endif;?>class="women" alt="">
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
                                <input type="submit" value="отправить заявку" onclick="metrika='call_me';">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide9 text-i">
                <div class="wrapper">
                    <?php if($practic_block2): echo $practic_block2; else:?>
                    <div class="title h2"><mark>рАЗДЕЛ ИМУЩЕСТВА СУПРУГОВ. рАЗДЕЛ ДОЛГОВ, КРЕДИТОВ.</mark></div>
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
                                        <p>К специалисту компании  в отчаянии обратилась гр-ка К.А., которая расторгла брак с К.Н., но вынуждена была проживать с ним и 2 детьми совместно, поскольку единственная их 2-комнатная квартира была приобретена в период брака. Бывший супруг сделал жизнь К.А. и жизнь детей невыносимой - применял насилие, угрозы, вел разгульный образ жизни, приводил друзей и подруг. При этом бывший супруг пригрозил забрать себе полностью квартиру, поскольку он вложил деньги от продажи дорогого автомобиля. Другого жилья у К.А. не было.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>В беседе с К.А. специалист выяснил, что перед приобретением жилья К.А. продала частичку дома, доставшуюся ей после смерти бабушки и также вложила полученные деньги в приобретение квартиры. Кроме того, часть жилья была приобретена за счет средств материнского капитала. Специалистом К.А. была тщательно подготовлена доказательственная база, предъявлен иск о признании большей доли квартиры за К.А., снижение доли ответчика за счет доли детей. В результате бывшему мужу К.А. досталась лишь 3/4 доли квартиры. В целях исключения мужа из числа собственников, дополнительно были заявлены требования о замене этой доли квартиры денежной компенсацией. Решением суда 2-комнатная квартира в г. Краснодаре признана личной собственностью К.А. , бывшему мужу присуждена компенсация в размере 196 000 руб. Также с бывшего мужа взысканы все понесенные К.А. расходы на юридическую помощь.</p>
                                    </div>
                                </div>
                            </div>
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
                                        <p>К специалисту обратилась гр-ка Р.Л., прожившая в браке более 25 лет. Муж расторг брак с ней в связи с наличием второй семьи. В период брака супругами было приобретено имущество: дом, площадью 272 кв.м. и земельный участок, дорогостоящий автомобиль, также сделан современный капитальный ремонт дома. Муж отказывался делить или продавать дом, проживая в нем с новой семьей и делая проживание под одной крышей с бывшей женой невозможным. Кроме того, все имущество приобреталось в кредит, на заемные средства, с последующим перекредитованием. Часть кредитов не были погашены. Это усложняло процесс раздела имущества. </p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>К участию в деле были привлечены несколько банков, в которых кредитовались супруги. Специалист выявил, что часть имущества приобреталась за счет продажи Р.Л. личного имущества ранее - автомобиля и квартиры. Кроме того, было установлено, что для погашения одного из займов Р.Л. брала уже в период раздельного проживания займ и лично погашала долг. Установлено, что в этот период муж не работал. В ходе процесса были допрошены ряд свидетелей. Также было установлено, что некоторый период времени, находясь в браке, супруги жили раздельно и все кредиты погашала Р.Л. Специалистом была подготовлена обширная доказательственная база, опровергнуты доводы бывшего мужа, явившегося в суд с новой супругой. В результате все имущество (дом, земельный участок, автомобиль) признаны личной собственностью Р.Л. Мужу Р.Л. обязалась выплатить в течение неопределенного срока минимальную часть денежных средств,  уплаченных в период брака по кредитам, всего 343659 руб. В пользу Р.Л. взысканы все понесенные ею расходы на юридическую помощь.</p>
                                    </div>
                                </div>
                            </div>
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
                                        <p>К специалисту обратилась гр-ка М.О. с просьбой помочь разделить имущество с бывшим мужем, не дробя его на доли. В период брака ею с мужем было куплено 3 квартиры. Ей срочно нужны были деньги на лечение дочери и она намеревалась продать одну из квартир после суда. М.О. хотела оставить себе 2 квартиры, одну отдать мужу и выплатить ему небольшую компенсацию в течение неопределенного периода времени. В связи с неприязненными отношениями муж наотрез отказался на такой раздел. Он принципиально настаивал на делении по 1/2 всех квартир, чтобы в последующем диктовать свои условия и препятствовать продаже любого имущества. </p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Специалистом была определена тактика ведения дела, в суд были предъявлены исковые требования в интересах М.О. о разделе имущества. В ходе всего процесса с мужем М.О. Велись переговоры, после чего он подписал подготовленное заранее специалистом мировое соглашение на условиях М.О.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <div class="sep"></div>
                </div>
            </div>
            <div <?php if ($arResult['display_slide_10'] == "none"): ?> style="display: none;"<?php endif;?>class="slide10 form-b">
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
                                <input type="submit" value="отправить заявку" onclick="metrika='present';">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div <?php if ($arResult['display_slide_11'] == "none"): ?> style="display: none;"<?php endif;?>class="slide11 text-i">
                <div class="wrapper">
                    <?php if($practic_block3): echo $practic_block3; else:?>
                    <div class="title h2"><mark>определение места жительства ребенка</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">7</span>
                                    <div class="icon">
                                        <img src="images/icon/7.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К специалисту компании обратилась гр-ка И.Н. с просьбой помочь ей отстоять ребенка в споре с бывшим супругом. После расторжения брака по ее инициативе, обозленный супруг предъявил иск в суд об определении места жительства ребенка с ним. Имея широкие возможности и связи, супруг представил документы о несостоятельности И.Н. как матери (справку из детского сада, выписанные эпикризы из мед.учреждений, негативные характеристики И.Н. с места жительства, сведения об отсутствии работы И.Н.). Между тем И.Н. большую часть времени была занята уходом за ребенком и не могла трудоустроиться. Супруг использовал это и представил доказательства наличия у него лучших условий для проживания ребенка с ним, больших возможностей его содержания и воспитания, дальнейшего обучения ребенка в лучшей школе.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Специалистом были проанализированы представленные мужем И.Н. доказательства на предмет их достоверности, опрошен ряд свидетелей (соседей, знакомых), собраны доказательства, характеризующие супруга. Решением суда в иске супруга было отказано. Место жительства ребенка определено с матерью. С супруга взысканы все понесенные И.Н. расходы на юридические услуги.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <div class="sep"></div>
                </div>
            </div>
            <div <?php if ($arResult['display_slide_12'] == "none"): ?> style="display: none;"<?php endif;?>class="slide12 text-i">
                <div class="wrapper">
                    <?php if($practic_block4): echo $practic_block4; else:?>
                    <div class="title h2"><mark>установление графика общения с ребенком</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">8</span>
                                    <div class="icon">
                                        <img src="images/icon/8.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К специалисту компании обратилась гр-ка К.И. с просьбой уменьшить в интересах ребенка количество времени, проводимого с отцом. С отцом ребенка К.И. расторгла брак более года назад по причине злоупотребления мужем алкоголем, насилия в семье. Со времени развода бывший супруг видел 3-х летнего сына 2 раза. В настоящее же время подал в суд иск, в котором требовал установить порядок общения с ребенком, в том числе оставлять ребенка 1 раз каждую вторую неделю месяца на ночь у себя дома. </p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>В результате сбора доказательств агрессивного поведения отца ребенка в период брака, склонности к употреблению алкоголя, судом был установлен иной график общения с ребенком в этом возрасте, лишь в присутствии матери, в общественных местах.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <div class="sep"></div>
                </div>
            </div>
            <div <?php if ($arResult['display_slide_13'] == "none"): ?> style="display: none;"<?php endif;?> class="slide13 form-b">
                <div class="wrapper clearfix">
                    <img <?php if ($arResult['form_img2']): echo $arResult['form_img2']; else: ?>src="images/mom.png"<?php endif;?> class="women" alt="">
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
                                <input type="submit" value="отправить заявку" onclick="metrika='save';">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div <?php if ($arResult['display_slide_14'] == "none"): ?> style="display: none;"<?php endif;?> class="slide14 text-i">
                <div class="wrapper">
                    <?php if($practic_block5): echo $practic_block5; else:?>
                    <div class="title h2"><mark>установление отцовства</mark></div>
                    <div class="single-block">
                        <div class="wrap">
                            <div class="row clearfix">
                                <div class="left fl-l">
                                    <span class="n">9</span>
                                    <div class="icon">
                                        <img src="images/icon/9.png" alt="">
                                    </div>
                                </div>
                                <div class="desk">
                                    <div class="prob">
                                        <div class="t">Суть дела: </div>
                                        <p>К специалисту компании обратилась гр-ка Р.М. с просьбой помочь доказать, что отцом ее 4-месячной дочери является И.П. , имеющий высокий социальный статус и положение. После 1 года встреч и обещаний со стороны И.П. зарегистрировать брак, Р.М. забеременела. На 3 - м месяце беременности И.П. прекратил общение с Р.М. , стал избегать встреч, сменил номер телефона.</p>
                                    </div>
                                    <div class="resh">
                                        <div class="t">решение: </div>
                                        <p>Специалист предъявил иск в суд о признании И.П. отцом ребенка и взыскании алиментов на содержание ребенка. В ходе судебного разбирательства выяснилось, что И.П. состоит в браке. И.П. уклоняется от явки в суд, его интересы представляли несколько адвокатов. И.П. были представлены свидетели, опровергавшие факт личного общения И.П. и Р.М., представлены отрицательные характеристики с места работы Р.М. (в последующем они оспорены в судебном порядке и признаны ложными).</p>
                                        <p>По делу были назначены 3 генетических экспертизы. На одну из них И.П. не явился. Вторая экспертиза была проведена по инициативе И.П. в одном из учреждений по месту его жительства. Экспертиза показала, что И.П. не является отцом ребенка, на основании чего судом было отказано в установлении отцовства.</p>
                                        <p>В последующем специалистом доказано, что данная экспертиза недостоверная и ложная. Также специалистом был проведен повторный допрос свидетелей, выявлены противоречия в их показаниях. Собраны доказательства длительного общения и личных отношений И.П. и Р.М. По делу проведена третья экспертиза, подтвердившая факт отцовства И.П. в отношении ребенка. Решением суда И.П. признан отцом ребенка, с него взысканы алименты с момента подачи иска в суд. К моменту вынесения решения алименты составили более 1,7 млн. рублей. Решение вступило в законную силу. От реального получения алиментов Р.М. принципиально отказалась.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
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
                                <input type="submit" value="отправить заявку" onclick="metrika='time2';">
                                <p class="small">Данные никогда не будут 
                                    переданы третьим лицам!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<!--
            <div class="slide17 video">
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
            </div>
-->
            <!--<div class="slide16 review landingItem" id="slide-6">
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
            </div>-->
           <!-- <div class="slide15 slide22 form-b">
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
            </div>-->
            <div class="slide19 map landingItem" id="slide-7">
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=eRBmQXm5cszE2igcx2IyrIzIJPTv9ELu&width&height=390"></script>
                <!--<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=njSe65GB1wPFfE9lOHDS9v7venptT7bi&width&height=390"></script>-->
<!--                <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=vr6i2Pn0tgK2L833-d3JaJvv5DCVqrDH&width&height=390"></script>-->
                <div class="wrapper">
                    <div class="plashka">
                        <div class="wrap">
                            <div class="name">
                                <p>юридическая компания</p>
                                <span>«викториал»</span>
                            </div>
                            <p>г. Краснодар Фестивальный м/н,  
                                ул. Монтажников 1/1, 3 подъезд,<br/> 
                                3 этаж, офис №1</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="wrapper clearfix">
                    <div class="copy fl-l">Copyright 2012 © Victorial</div>
                    <!-- <div class="site fl-r">
                        <a href="http://incomyug.ru/glavnaya/" target="_blank">Создание и продвижение сайтов:</a>
                    </div> -->
                </div>
            </div>
        </div>
<!-- Yandex.Metrika counter -->
    <script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter29653340 = new Ya.Metrika({id:29653340,
                        webvisor:true,
                        clickmap:true,
                        accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/29653340" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
 new WOW().init();
</script>
    </body>
</html>
