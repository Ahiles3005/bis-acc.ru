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

if (!defined("DIAFAN")) {
    $path = __FILE__;
    $i = 0;
    while (!file_exists($path . '/includes/404.php')) {
        if ($i == 10) exit;
        $i++;
        $path = dirname($path);
    }
    include $path . '/includes/404.php';
}
?><!DOCTYPE html>
<html lang="ru">
<head>
    <insert name="show_head"/>
    <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
    <link rel="shortcut icon" href='<insert name="path" >favicon.ico' type="image/x-icon">
    <insert name="show_css"
            files="jquery.formstyler.css, jquery.fancybox.min.css, slick.css, slick-theme.css, fonts.css, style.css, responsive.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">


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
            "paymentAccepted": [
                "cash",
                "credit card",
                "invoice"
            ],
            "openingHours": [
                "Mo 9:00-18:00",
                "Tu 9:00-18:00",
                "We 9:00-18:00",
                "Th 9:00-18:00",
                "Fr 9:00-18:00"
            ],
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "http:/schema.org/Monday",
                    "opens": "9:00:00",
                    "closes": "18:00:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "http:/schema.org/Tuesday",
                    "opens": "9:00:00",
                    "closes": "18:00:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "http:/schema.org/Wednesday",
                    "opens": "9:00:00",
                    "closes": "18:00:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "http:/schema.org/Thursday",
                    "opens": "9:00:00",
                    "closes": "18:00:00"
                },
                {
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
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(98497640, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>

    <!-- /Yandex.Metrika counter -->
</head>
<body>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/98497640" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<noscript><img alt="" height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=246237106564391&ev=PageView&noscript=1"
    /></noscript>
<div class="hat_wrapper site_page">
    <div class="hat_section align ba-custom">
        <a href="/" class="logo">
            <img src="/custom/my/img/logo.png" alt="Bis-acc">
        </a>
        <div class="bis-menu-btn">
            <insert name="show_block" module="menu" id="1" template="hat"/>
            <insert name="show_search" module="search" button="" template="top"/>

        </div>
        <div class="">
            <insert name="show_block" module="site" id="1"/>
        </div>
    </div>
    <insert name="feedback_import"/>

    <div class="hat_section align ba-custom mobile-header">
        <a href="/" class="logo"> </a>


        <i class="fa fa-phone zvon-mobile" aria-hidden="true">
        </i>

        <i class="fa fa-search mobile-search-toggle" aria-hidden="true"></i>
        <i class="fa fa-bars mobile-menu-toggle" aria-hidden="true"></i>


    </div>

    <div class="mobile-header-search">
        <insert name="show_search" module="search" button="" template="top-mobile"/>
    </div>

    <div class="mobile-menu-overlay">
        <svg class="mobile-menu-toggle" width="24" height="24" viewBox="0 0 24 24" aria-label="Закрыть меню"
             role="button" tabindex="0" xmlns="http://www.w3.org/2000/svg">
            <line x1="18" y1="6" x2="6" y2="18" stroke="black" stroke-width="2"/>
            <line x1="6" y1="6" x2="18" y2="18" stroke="black" stroke-width="2"/>
        </svg>
        <nav itemscope itemtype="http://schema.org/SiteNavigationElement" class="mobile-menu-content">
            <ul class="hat_menu_mobile">
                <insert name="show_block" module="menu" id="4" template="hat-mobile"/>
                <insert name="show_block" module="menu" id="1" template="hat-mobile"/>
            </ul>
        </nav>
        <div class="mobile-menu-contact">
            <span>+7 (495) 727-06-30</span>
            <span>info@bisoutsourcing.ru</span>
            <span>пн-пт 9:00-18:00</span>
            <br >
            <span>г. Москва, ул. 2-я Машиностроения 17, стр.1, офис 128</span>
        </div>
    </div>



</div>

<div class="top_menu_wrapper">
    <insert name="show_block" module="menu" id="4" template="topmenu"/>
</div>

<insert name="show_block" module="site" id="24"/>

<div class="type_wrapper">
    <div class="type_section align">
        <div class="type_hat">
            <insert name="show_breadcrumb" current="true"/>
        </div>
        <div class="type_container clearfix">
            <!--<div class="type_sidebar">
                <div class="type_menu_container">
                    <insert name="show_block" module="menu" id="2" template="cat"/>
                </div>
            </div>-->
            <div class="type_content">
                <div class="type_hat" style="margin-top: 10px;">
                    <h1>
                        <insert name="show_h1"/>
                    </h1>
                </div>
                <insert name="show_text"/>
                <insert name="show_module"/>
            </div>
        </div>
    </div>
</div>
<div class="packs_wrapper">
    <div class="so_design"></div>
    <div class="packs_section align">
        <insert name="show_block" module="site" id="7"/>
    </div>
</div>


<insert name="show_block" module="site" id="25"/>


<div class="questions_wrapper">
    <div class="questions_section align">
        <insert name="show_block" module="site" id="10"/>
    </div>
</div>
<div class="footer_wrapper">
    <div class="footer_section align">

        <insert name="show_block" module="site" id="21"/>

        <div style="margin-top: 20px; text-align: center;">


            <div style="margin-top: 25px; font-size: 12px; color: #fff"><a style="font-size: 12px; color: #fff"
                                                                           href="https://bis-acc.ru/">Бухгалтерские
                    услуги</a> недорого в Москве и по всей России.
            </div>


        </div>

    </div>
</div>
<!-- noindex -->
<div class="modal_window_wrapper">
    <insert name="show_form" module="feedback" site_id="17" template="ban"/>
</div>
<div class="modal_window_wrapper2"></div>
<!-- /noindex -->
<insert name="show_js"/>
<script async src='<insert name="path">js/main.js'></script>
<insert name="show_include" file="counters"/>
<script src='<insert name="path"><insert name="custom" path="js/jquery.formstyler.min.js">'></script>
<script src='<insert name="path"><insert name="custom" path="js/jquery.fancybox.min.js">'></script>
<script src='<insert name="path"><insert name="custom" path="js/slick.min.js">'></script>
<script src='<insert name="path"><insert name="custom" path="js/scripts.js">'></script>

<!-- noindex -->
<!-- Yandex.Metrika counter -->

<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter90347443 = new Ya.Metrika({
                    id: 90347443,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>


<noscript>
    <div><img src="https://mc.yandex.ru/watch/90347443" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
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