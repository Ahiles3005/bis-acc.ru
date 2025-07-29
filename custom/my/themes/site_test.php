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
<html lang="ru">
<head>
	<insert name="show_head">
	<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="<insert name="path">favicon.ico" type="image/x-icon">
	<insert name="show_css" files="jquery.formstyler.css, fonts.css, style.css, responsive.css">
	<script src='/custom/my/js/nocopy.js'></script>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EY1WER0JVL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EY1WER0JVL');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '246237106564391');
  fbq('track', 'PageView');
</script>
<script>
  fbq('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=246237106564391&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>

<div class="hat_wrapper">

	<div class="hat_section align">
		<a href="/" class="logo">
			<img src="/custom/my/img/logo.png" alt="Bis-acc">
		</a>
		<div class="hat_second_block">
			<insert name="show_block" module="menu" id="1" template="hat">
			<insert name="show_search" module="search" button="" template="top">
			
		</div>
		<div class="hat_third_block">
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
			<insert name="show_block" module="site" id="6">
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

<div class="calc_wrapper custom"><!-- noindex -->
    <div class="girl"></div>
    <div class="calc_section align" id="calculator_new">
        <insert name="show_block" module="site" id="25">
    </div>
    <!-- /noindex -->
</div>


        <div class="bis_wrapper">
	<div class="bis_section align">
		<div class="bis_container">
			<insert name="show_block" module="site" id="9">
		</div>
	</div>
</div>

<!--div class="about_wrapper3">
	<div class="about_section align">
		<insert name="show_block" module="site" id="17">
	</div>
</div-->

<div class="questions_wrapper">
	<div class="questions_section align">
		<insert name="show_block" module="site" id="10">
	</div>
</div>
<div class="footer_wrapper">
	<div class="footer_section align">
		<!--<insert name="show_block" module="menu" id="1" template="foot">
		<insert name="show_block" module="site" id="11">-->
		<insert name="show_block" module="site" id="21">
		
		<div align="center" style="margin-top: 20px">
		
	<!-- noindex -->	
<!--LiveInternet counter--><script type="text/javascript">
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
	<script src="<insert name="path"><insert name="custom" path="js/scripts.js">"></script>
            <script src="/modules/captcha/js/captcha.get_recaptcha_.js"></script>
	
	<!-- noindex -->
	<!-- Yandex.Metrika counter -->
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
<script type='text/javascript'>
(function(){ var widget_id = '2uHUSMMdBk';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE --><!-- /noindex -->
</body>
</html>