<?php
    $lookingfor_title = get_sub_field('lookingfor_title');
    $lookingfor_subtitle = get_sub_field('lookingfor_subtitle');
    $lookingfor_items = get_row_layout('lookingfor_items');

?>

<section class="lookingfor">
    <div class="container">
        <div class="lookingfor__left">
            <div class="lookingfor__title aud _anim-items _anim-off">
                <?php echo $lookingfor_title ?>
            </div>
            <div class="lookingfor__subtitle aud _anim-items _anim-off">
                <?php echo $lookingfor_subtitle ?>
            </div>

            <?php
                if( $lookingfor_items ) {
                    echo '<div class="lookingfor__icons">';
                    while( the_repeater_field('lookingfor_items') ) {
                        $lookingfor_item_icon = get_sub_field('lookingfor_item_icon');
                        $lookingfor_item_text = get_sub_field('lookingfor_item_text');

                        echo '
                            <div class="lookingfor__item ascale _anim-items _anim-off">
                                <div class="lookingfor__item_icon">
                                    <img src="'. $lookingfor_item_icon .'" alt="">
                                </div>
                                <div class="lookingfor__item_title">'. $lookingfor_item_text .'</div>
                            </div>
                        ';
                    }
                    echo '</div>';
                }
            ?>
        </div>

        <div class="lookingfor__right arl _anim-items _anim-off">
            <div class="lookingfor__form">

                <div class="lookingfor__form_subtitle">Заполните форму ниже и получите профессиональную консультацию
                    специалиста прямо сейчас
                </div>

<!--                <script>!function (a, m, o, c, r, m) {-->
<!--                        a[o + c] = a[o + c] || {-->
<!--                            setMeta: function (p) {-->
<!--                                this.params = (this.params || []).concat([p])-->
<!--                            }-->
<!--                        }, a[o + r] = a[o + r] || function (f) {-->
<!--                            a[o + r].f = (a[o + r].f || []).concat([f])-->
<!--                        }, a[o + r]({id: "763033", hash: "4fe45b19bf0f1230ca7a8be99712355d", locale: "ru"})-->
<!--                    }(window, 0, "amo_forms_", "params", "load");</script>-->
<!--                <script id="amoforms_script_763033" async="async" charset="utf-8"-->
<!--                        src="https://forms.amocrm.ru/forms/assets/js/amoforms.js?1617734431"></script>-->

                <?php echo do_shortcode(' [contact-form-7 id="171" title="Получить предложение" html_class="use-floating-validation-tip form"] ') ?>

<!--                <form class="form">-->
<!--                    <input class="formname" name="name" type="text" placeholder="Ваше имя" id="name">-->
<!--                    <input class="formphone" name="phone" type="tel" placeholder="Ваш телефон" id="phone">-->
<!--                    <button class="btn form__btn">-->
<!--                        Получить консультацию-->
<!--                    </button>-->
<!--                </form>-->

            </div>
        </div>
    </div>
</section>