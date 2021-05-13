<div class="md-modal md-effect-1" id="modal-form">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="header__form">
            <div class="modal__logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/modallogo.svg"
                                          alt="modallogo"></div>
            <div class="header__form_title">У вас есть идея или фотография
                объекта который хотите реализовать?
            </div>
            <div class="header__form_subtitle">Заполните форму ниже<br>
                и получите бесплатную консультацию специалиста
            </div>

            <!--                <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:"763048",hash:"731fdd6a2afd2d5db3b63ca912a23e06",locale:"ru"})}(window,0,"amo_forms_","params","load");</script><script id="amoforms_script_763048" async="async" charset="utf-8" src="https://forms.amocrm.ru/forms/assets/js/amoforms.js?1617736173"></script>-->

            <?php echo do_shortcode(' [contact-form-7 id="171" title="Получить предложение" html_class="use-floating-validation-tip form"] ') ?>


<!--            <form class="form">-->
<!--                <input class="formname" name="name" type="text" placeholder="Ваше имя" id="name">-->
<!--                <input class="formphone" name="phone" type="tel" placeholder="Ваш телефон" id="phone">-->
<!--                <button class="btn form__btn">-->
<!--                    Получить консультацию-->
<!--                </button>-->
<!--            </form>-->
        </div>
    </div>
</div>

<div class="md-overlay"></div><!-- the overlay element -->

<style>
    .md-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: 2000;
        visibility: hidden;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }
    .md-show {
        visibility: visible;
    }
    .md-show ~ .md-overlay {
        opacity: 1;
        visibility: visible;
    }
    .md-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        visibility: hidden;
        top: 0;
        left: 0;
        z-index: 1000;
        opacity: 0;
        background: rgba(0,0,0,.8);
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    /* Effect 1: Fade in and scale up */
    .md-effect-1 .md-content {
        -webkit-transform: scale(0.7);
        -moz-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    .md-show.md-effect-1 .md-content {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    .md-close {
        top: 15px;
        right: 15px;
        position: absolute;
        outline: none;
        background: none;
        width: 22px;
        border: none;
        height: 22px;
        cursor: pointer;
        opacity: 0.6;
        transform: rotate(45deg);
    }
    .md-close:hover {
        opacity: 1;
    }
    .md-close:after {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        content: '';
        width: 22px;
        height: 4px;
        border-radius: 4px;
        background-color: white;
        transform-origin: 50%;
    }
    .md-close:before {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        content: '';
        height: 22px;
        width: 4px;
        border-radius: 4px;
        background-color: white;
        transform-origin: 50%;
    }
    .md-close:hover span {
        background-color: #fff;
        transition: all 0.5s ease;
    }
</style>
