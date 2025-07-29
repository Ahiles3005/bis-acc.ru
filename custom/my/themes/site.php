<?php
/**
 * Основной шаблон сайта
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
?><!DOCTYPE html>
<html lang="ru">
<head>
    <insert name="show_head">
        <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="<insert name="path">favicon.ico" type="image/x-icon">
            
        <insert name="show_css" files="jquery.formstyler.css, jquery.fancybox.min.css, slick.css, slick-theme.css, fonts.css, style.css, responsive.css">
            <!--script type='text/javascript' src='/custom/my/js/nocopy.js'></script-->

            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-EY1WER0JVL"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-EY1WER0JVL');
            </script>
           
<!--            <insert name="show_canonical">-->
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

<!-- End Facebook Pixel Code -->

<!-- Yandex.Metrika counter -->


            </head>
<body>

<noscript><img alt="" height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=246237106564391&ev=PageView&noscript=1"
    /></noscript>
<div class="hat_wrapper 111">
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
    <insert name="feedback_import">
</div>
<!--<div class="hat_bot_wrapper">
	<insert name="show_block" module="menu" id="3" template="hat_bot">
</div>-->
<div class="top_menu_wrapper">
    <insert name="show_block" module="menu" id="4" template="topmenu">
</div>
	
		<insert name="show_block" module="site" id="24">
		
<div class="type_wrapper">
    <div class="type_section align">
        <div class="type_hat">
            <insert name="show_breadcrumb" current="true">
        </div>
        <div class="type_container clearfix">
            <div class="type_sidebar">
                <div class="type_menu_container">
                    <insert name="show_block" module="menu" id="2" template="cat">
                </div>
            </div>
            <div class="type_content">
                <div class="type_hat" style="margin-top: 10px;">
                    <h1><insert name="show_h1"></h1>
                </div>
                <insert name="show_text">
                    <insert name="show_module">
            </div>
        </div>
    </div>
</div>
<div class="packs_wrapper">
    <div class="so_design"></div>
    <div class="packs_section align">
        <insert name="show_block" module="site" id="7">
    </div>
</div>
            


                <insert name="show_block" module="site" id="25">
        

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
            <div style="margin-top: 20px; text-align: center">

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
        <script src="<insert name="path"><insert name="custom" path="js/jquery.fancybox.min.js">"></script>
        <script src="<insert name="path"><insert name="custom" path="js/slick.min.js">"></script>
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
                <script src="//code.jivo.ru/widget/QjBORTAPOi" async></script>
        <!-- {/literal} END JIVOSITE CODE -->
        <!-- /noindex -->

<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>