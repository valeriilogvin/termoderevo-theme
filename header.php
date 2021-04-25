<?php
/**
 * The header for our theme
 *
* @package termo-wood
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="facebook-domain-verification" content="fzzr4kmv3x04zk1ybrqt6tuknmsbc0" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-194237355-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-194237355-1');
</script>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

   ym(75421384, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/75421384" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" href="./img/icons/favwood.svg" type="image/x-icon">

    <?php wp_head(); ?>

    <title>Термодерево ТМ</title>
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
fbq('init', '803592516917069');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=803592516917069&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>
<div class="page">
    <section class="navbar ascale _anim-items _anim-off">

        <div class="container">

            <a class="navbar__logo" href="#header">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="">
            </a>

            <div class="navbar__center">
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="#about">О нас</a>
                    </li>
                    <li class="navbar__item" >
                        <a href="#comprehensive">Комплекс</a>

                        <ul class="navbar__submenu">
                            <li><a class="navbar__subitem" href="#stena">Стеновые панели</a></li>
                            <li><a class="navbar__subitem" href="#3d_panel">3D Панели, Рейки</a></li>
                            <li><a class="navbar__subitem" href="#hpl">HPL Панели</a></li>
                            <li><a class="navbar__subitem" href="#fbc">Фиброцементные панели</a></li>
                            <li><a class="navbar__subitem" href="#tpkt">Термопакет</a></li>
                            <li><a class="navbar__subitem" href="#evr">Еврососна</a></li>
                            <li><a class="navbar__subitem" href="#injenier">Инженерная доска</a></li>
                            <li><a class="navbar__subitem" href="#glass">Стеклянные перегородки</a></li>
                        </ul>
                    </li>
                    <li class="navbar__item">
                        <a href="#reviews">Отзывы</a>
                    </li>
                    <li class="navbar__item">
                        <a href="#footer">Контакты</a>
                    </li>
                </ul>
                <div class="navbar__contacts">
                    <a href="tel:380737358833">+38 (073) 735-88-33</a>
                    <a href="tel:380487033375">+38 (048) 703-33-75</a>
                    <div>г.Одесса</div>
                    <a href="https://goo.gl/maps/9ok4byLeGdGWSRrC7" class="footer__address" target="_blank">65005, Украина, г.Одесса,ул. Бугаевская, 37а</a>
                </div>
                <div class="footer__soc">
                    <a class="footer__soc_item" href="#"><svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.3658 0.667969H11.5708C8.67992 0.671366 5.90843 1.8214 3.86444 3.86573C1.82044 5.91007 0.67088 8.68175 0.667969 11.5726L0.667969 26.3676C0.671366 29.2585 1.8214 32.03 3.86573 34.074C5.91007 36.118 8.68175 37.2676 11.5726 37.2705H26.3676C29.2585 37.2671 32.03 36.117 34.074 34.0727C36.118 32.0284 37.2676 29.2567 37.2705 26.3658V11.5708C37.2671 8.67992 36.117 5.90843 34.0727 3.86444C32.0284 1.82044 29.2567 0.67088 26.3658 0.667969V0.667969ZM33.5891 26.3658C33.5891 27.3144 33.4023 28.2537 33.0393 29.13C32.6763 30.0064 32.1442 30.8027 31.4735 31.4735C30.8027 32.1442 30.0064 32.6763 29.13 33.0393C28.2537 33.4023 27.3144 33.5891 26.3658 33.5891H11.5708C9.65537 33.5886 7.81856 32.8274 6.46432 31.4728C5.11008 30.1182 4.3493 28.2812 4.3493 26.3658V11.5708C4.34979 9.65537 5.11103 7.81856 6.46561 6.46432C7.8202 5.11008 9.6572 4.3493 11.5726 4.3493H26.3676C28.2831 4.34979 30.1199 5.11103 31.4741 6.46561C32.8284 7.8202 33.5891 9.6572 33.5891 11.5726V26.3676V26.3658Z" fill="white"/>
                            <path d="M18.9676 9.50391C16.4585 9.50779 14.0534 10.5063 12.2794 12.2807C10.5054 14.055 9.5073 16.4604 9.50391 18.9694C9.50682 21.4791 10.5049 23.8852 12.2794 25.66C14.0538 27.4347 16.4597 28.4333 18.9694 28.4367C21.4794 28.4338 23.8858 27.4354 25.6606 25.6606C27.4354 23.8858 28.4338 21.4794 28.4367 18.9694C28.4329 16.4597 27.4338 14.054 25.6587 12.2799C23.8835 10.5058 21.4773 9.50816 18.9676 9.50574V9.50391ZM18.9676 24.7554C17.4335 24.7554 15.9623 24.146 14.8775 23.0613C13.7928 21.9765 13.1834 20.5053 13.1834 18.9712C13.1834 17.4372 13.7928 15.966 14.8775 14.8812C15.9623 13.7965 17.4335 13.1871 18.9676 13.1871C20.5016 13.1871 21.9729 13.7965 23.0576 14.8812C24.1423 15.966 24.7517 17.4372 24.7517 18.9712C24.7517 20.5053 24.1423 21.9765 23.0576 23.0613C21.9729 24.146 20.5016 24.7554 18.9676 24.7554Z" fill="white"/>
                            <path d="M28.4553 11.8404C29.7078 11.8404 30.7232 10.825 30.7232 9.57252C30.7232 8.32003 29.7078 7.30469 28.4553 7.30469C27.2028 7.30469 26.1875 8.32003 26.1875 9.57252C26.1875 10.825 27.2028 11.8404 28.4553 11.8404Z" fill="white"/>
                        </svg>
                    </a>
                    <a class="footer__soc_item" href="#"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.8125 0.8125H2.1875C1.42695 0.8125 0.8125 1.42695 0.8125 2.1875V33.8125C0.8125 34.573 1.42695 35.1875 2.1875 35.1875H33.8125C34.573 35.1875 35.1875 34.573 35.1875 33.8125V2.1875C35.1875 1.42695 34.573 0.8125 33.8125 0.8125ZM32.4375 32.4375H24.527V21.8758H28.9957L29.666 16.6895H24.527V13.3766C24.527 11.8727 24.9438 10.85 27.0965 10.85H29.8422V6.20938C29.3652 6.14492 27.7367 6.00313 25.8375 6.00313C21.8758 6.00313 19.1645 8.42227 19.1645 12.8609V16.6852H14.6871V21.8715H19.1688V32.4375H3.5625V3.5625H32.4375V32.4375Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>

            <button id="header_btn" class="btn nav__btn"><span>Получить консультацию</span></button>
            <div class="burger">
                <span></span>
            </div>
        </div>

    </section>