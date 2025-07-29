<?php
/**
 * Шаблон стартовой страницы сайта
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://www.diafan.ru/)
 */
 
if(! defined("DIAFAN"))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
if(isset($_REQUEST['debug'])) {
    $results = DB::query_fetch_all("SELECT *  FROM {feedback}");
    foreach ($results as $result) {
        $rows[$result['id']] = DB::query_fetch_all("SELECT e.element_id, e.value, e.param_id, p.type, p.[name] FROM"
            ." {feedback_param_element} AS e"
            ." INNER JOIN {feedback_param} AS p ON e.param_id=p.id"
            . " WHERE e.trash='0' AND e.element_id = (%s)", $result['id']);
    }
    echo "<pre>";
 foreach ($rows as  $row ) {
        $text = [];

     foreach ($row as $key => $element) {
         $text['name'] = $row[0]['value'];
        if($element['type'] == 'phone') {
            $text['phone'] = $element['value'];
        }
         if($element['type'] == 'email') {
             $text['email'] = $element['value'];
         }

     }
    if(!isset($text['phone'])) {
        $text['phone'] = '-';
    }
     if(!isset($text['email'])) {
         $text['email'] = '-';
     }
   echo implode(';', $text);
    echo '</br>';

 }
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="ru" style="overflow-x: hidden;">
<head>
	<insert name="show_head">
	<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
	<link rel="shortcut icon" href="<insert name="path" >favicon.ico" type="image/x-icon">
	<insert name="show_css" files="jquery.formstyler.css, jquery.fancybox.min.css, slick.css, slick-theme.css, fonts.css, style.css, responsive.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">




<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "+7 (495) 727-06-30",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "г. Москва",
        "addressRegion": "Россия",
        "streetAddress": "ул. 2-я Машиностроения 17, стр.1, офис 128"
    },
    "image": "https://bis-acc.ru/custom/my/img/logo.png",
    "email": "info@bisoutsourcing.ru",
    "telephone": "+7 (495) 727-06-30",
    "url": "https://bis-acc.ru",
    "paymentAccepted": [ "cash", "credit card", "invoice" ],
    "openingHours":["Mo 9:00-18:00","Tu 9:00-18:00","We 9:00-18:00","Th 9:00-18:00","Fr 9:00-18:00"],
    "openingHoursSpecification": [
        {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "http:/schema.org/Monday",
        "opens": "9:00:00",
        "closes": "18:00:00"
        }
,        {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "http:/schema.org/Tuesday",
        "opens": "9:00:00",
        "closes": "18:00:00"
        }
,        {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "http:/schema.org/Wednesday",
        "opens": "9:00:00",
        "closes": "18:00:00"
        }
,        {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "http:/schema.org/Thursday",
        "opens": "9:00:00",
        "closes": "18:00:00"
        }
,        {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "http:/schema.org/Friday",
        "opens": "9:00:00",
        "closes": "18:00:00"
        }
    ]
}
</script>	
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "LocalBusiness",
	
	"address": {
		"@type": "PostalAddress",
		"addressLocality": "Москва",
		"streetAddress": "ул. 2-я Машиностроения 17, стр.1, офис 128"
	},
	"name": "BIS-OUTSOURCING",
	"email": "info@bisoutsourcing.ru",
	"openingHours": [
		"Mo-Fr 09:00-18:00"
    ],
	"telephone": [
		"+7 (495) 727-06-30"
	],
	"image": "/custom/my/img/logo.png",
	"url": "https://bis-acc.ru/",
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": "55.71620636365176",
		"longitude": "37.682231294685614"
	}
}
</script>
	<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "О КОМПАНИИ",
            "item": "https://bis-acc.ru/about/"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "УСЛУГИ",
            "item": "https://bis-acc.ru/services/"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": " ОТЗЫВЫ",
            "item": "https://bis-acc.ru/photo/"
        },
        {
            "@type": "ListItem",
            "position": 4,
            "name": " КОНТАКТЫ",
            "item": "https://bis-acc.ru/contacts/"
        },
        {
            "@type": "ListItem",
            "position": 5,
            "name": " КАЛЬКУЛЯТОР",
            "item": "https://bis-acc.ru/kalkulyator/"
        },
        {
            "@type": "ListItem",
            "position": 6,
            "name": "Бухгалтерские услуги",
            "item": "https://bis-acc.ru/services/bukhgalterskiy-autsorsing/"
        },
        {
            "@type": "ListItem",
            "position": 7,
            "name": "Регистрация фирм",
            "item": "https://bis-acc.ru/services/registratsiya-firm/"
        },
        {
            "@type": "ListItem",
            "position": 8,
            "name": "Ликвидация предприятия",
            "item": "https://bis-acc.ru/services/likvidatsiya-predpriyatiya/"
        },
        {
            "@type": "ListItem",
            "position": 9,
            "name": "Налоговый консалтинг",
            "item": "https://bis-acc.ru/services/nalogovyy-konsalting/"
        },
        {
            "@type": "ListItem",
            "position": 10,
            "name": "Бизнес консалтинг",
            "item": "https://bis-acc.ru/services/biznes-konsalting/"
        }
    ]
}
</script>



<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "БИСаутсорсинг",
  "url": "https://bis-acc.ru/",
  "logo": "https://bis-acc.ru/custom/my/img/logo.png",
  "description": "Более 14 лет мы занимаемся оказанием качественных бухгалтерских услуг организациям всех отраслей и форм собственности, а также индивидуальным предпринимателям. Нам доверяют более 200 клиентов, со многими из которых мы сотрудничаем уже второй десяток лет. Мы не только ведем бухучет, но и помогаем снижать затраты наших партнеров. За время работы сумма, которую наши клиенты смогли сэкономить за счет оптимизации налогов и уменьшения финансовых потерь, составила более 100 млн. руб.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "ул. 2-я Машиностроения 17, стр.1, офис 128",
    "postOfficeBoxNumber": "info@bisoutsourcing.ru ",
    "addressLocality": "г. Москва",
    "addressCountry": "Россия"
  },
  "hasMap": "DetailerPro",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+7 (495) 727-06-30"
  }
}
 </script>


<!-- End Facebook Pixel Code -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(98497640, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>

<!-- /Yandex.Metrika counter -->
</head>
<body>
<noscript><div><img src="https://mc.yandex.ru/watch/98497640" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<noscript><img alt="" height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=246237106564391&ev=PageView&noscript=1"
    /></noscript>
<div class="hat_wrapper">
<!--
	<div class="hat_section align ba-custom">
		<a href="/" class="logo">
			<img src="/custom/my/img/logo.png" alt="Bis-acc">
		</a>
		<div class="">
			<insert name="show_block" module="menu" id="1" template="hat">
			<insert name="show_search" module="search" button="" template="top">
			
		</div>
		<div class="">
			<insert name="show_block" module="site" id="1">
		</div>
	</div>
			-->
	<div class="hat_section align ba-custom">
		<a href="/" class="logo">
			<img src="/custom/my/img/logo.png" alt="Bis-acc">
		</a>
		<div class="bis-menu-btn">
			<insert name="show_block" module="menu" id="1" template="hat">
			<insert name="show_search" module="search" button="" template="top">
			
		</div>
		<div class="">
			<insert name="show_block" module="site" id="1">
		</div>
	</div>
</div>
<!--<div class="hat_bot_wrapper">
	<insert name="show_block" module="menu" id="3" template="hat_bot">
</div>-->
<div class="top_menu_wrapper">
	<insert name="show_block" module="menu" id="4" template="topmenu">
</div>

	<insert name="show_block" module="site" id="23">

<div class="offer_wrapper">
	<div class="offer_section align">
		<div class="offer_container">
			<insert name="show_block" module="site" id="2">
		</div>
	</div>
</div>

<div class="services_wrapper">
	<insert name="show_block" module="site" id="3">
</div>

<div class="about_wrapper">
	<div class="about_section align">
		<insert name="show_block" module="site" id="4">
	</div>
</div>

<div class="about_wrapper2">
	<div class="about_section align">
		<insert name="show_block" module="site" id="16">
	</div>
</div>

<div class="advantages_wrapper">
	<div class="advantages_section align">
	
		<div class="advantages_cases">
			<insert name="show_block" module="site" id="5">
			<div class="advantages_cases_calc"></div>
		</div>
		
		<div class="advantages_content">
			<!--<insert name="show_block" module="site" id="6">-->
                <div class="advantages_container"><div class="advantage_one">
                    <div class="advantage_one_img"><img src="https://bis-acc.ru/userfiles/bs/a1_1.png" loading="lazy" alt="Команда" title=""></div>
                    <div class="advantage_one_title">Команда опытных  специалистов</div>
                </div><div class="advantage_one">
                    <div class="advantage_one_img"><img src="https://bis-acc.ru/userfiles/bs/a2_2.png" loading="lazy" alt="Подход" title=""></div>
                    <div class="advantage_one_title">Индивидуальный подход к каждому клиенту</div>
                </div><div class="advantage_one">
                    <div class="advantage_one_img"><img src="https://bis-acc.ru/userfiles/bs/a3_3.png" loading="lazy" alt="Конфиденциальность" title=""></div>
                    <div class="advantage_one_title">Конфиденциальность коммерческой тайны</div>
                </div><div class="advantage_one">
                    <div class="advantage_one_img"><img src="https://bis-acc.ru/userfiles/bs/a4_4.png" loading="lazy" alt="Оперативность" title=""></div>
                    <div class="advantage_one_title">Оперативное решение поставленных задач</div>
                </div><div class="advantage_one">
                    <div class="advantage_one_img"><img src="https://bis-acc.ru/userfiles/bs/a5_5.png" loading="lazy" alt="Оптимизация" title=""></div>
                    <div class="advantage_one_title">Мы знаем как оптимизировать расходы на ведение бизнеса</div>
                </div><div class="advantage_one">
                    <div class="advantage_one_img"><img src="https://bis-acc.ru/userfiles/bs/a6_6.png" loading="lazy" alt="Успешность" title=""></div>
                    <div class="advantage_one_title">Справляемся с любыми проверками</div>
		</div>
	</div>
</div>

<div class="shm_video_wrapper">		
	<insert name="show_block" module="site" id="15"></insert>
</div>

<div class="text_wrapper">
	<div class="text_section align">
		<insert name="show_block" module="site" id="20"></insert>
	</div>
	
</div>

<div class="packs_wrapper">
	<div class="so_design"></div>
	<div class="packs_section align">
		<insert name="show_block" module="site" id="7">
	</div>
</div>



                <insert name="show_block" module="site" id="25">


<div class="bis_wrapper">
	<div class="bis_section align">
		<div class="bis_container">
			<insert name="show_block" module="site" id="9">
		</div>
	</div>
</div>



<div class="questions_wrapper">
	<div class="questions_section align">
		<insert name="show_block" module="site" id="10">
	</div>
</div>
</div>
<div class="footer_wrapper">
	<div class="footer_section align">
		<!--<insert name="show_block" module="menu" id="1" template="foot">
		<insert name="show_block" module="site" id="11">-->
		<insert name="show_block" module="site" id="21">
		
		<div style="margin-top: 20px; text-align: center;">
		
	<!-- noindex -->	
<!--LiveInternet counter-->

<!--
<script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t14.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
</script><!--/LiveInternet-->
<!-- /noindex -->



<div style="margin-top: 25px; font-size: 12px; color: #fff"><a style="font-size: 12px; color: #fff" href="https://bis-acc.ru/">Бухгалтерские услуги</a> недорого в Москве и по всей России.</div>



</div>

	</div>
</div>
<!-- noindex --><div class="modal_window_wrapper"><insert name="show_form" module="feedback" site_id="17" template="ban"></div><!-- /noindex -->
	<insert name="show_js">
	<script async src="<insert name="path">js/main.js"></script>
	<insert name="show_include" file="counters">
	<script src="<insert name="path"><insert name="custom" path="js/jquery.formstyler.min.js">"></script>
	<script src="<insert name="path"><insert name="custom" path="js/jquery.fancybox.min.js">"></script>
	<script src="<insert name="path"><insert name="custom" path="js/slick.min.js">"></script>
	<script src="<insert name="path"><insert name="custom" path="js/scripts.js">"></script>
            <!--<script src="/modules/captcha/js/captcha.get_recaptcha_.js"></script>-->
	
	<!-- noindex -->
	<!-- Yandex.Metrika counter -->



</script>	
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter90347443 = new Ya.Metrika({
                    id:90347443,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>



<noscript><div><img src="https://mc.yandex.ru/watch/90347443" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
                    <script src="//code.jivo.ru/widget/QjBORTAPOi" async></script>
<!-- {/literal} END JIVOSITE CODE --><!-- /noindex -->
<script src='https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.js'></script>

<script type="text/javascript">
 $(document).ready(function () {
  $(".video-gallery").magnificPopup({
    delegate: "a",
    type: "iframe",
    gallery: {
      enabled: true
    }
  });
});
</script>



<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>