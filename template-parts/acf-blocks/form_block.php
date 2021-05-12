<?php //
//$form = get_sub_field('form_shortcode');
//if($form):
//?>
<!--<div class="container section">-->
<!--    <div class="form form--contact">--><?php //echo do_shortcode($form); ?><!--</div>-->
<!--</div>-->
<?php //endif; ?>


<div class="pb-70 news-form">
    <div class="container">
        <div class="news-form__inner">
            <h1 class="pb-36 title-h1 news-form__title">Newsletter</h1>
            <form class="news-form__form " action="">
                <div class="news-form__box">
                    <input placeholder="First Name "
                           class="mr-25 title-h1 color-placeholder news-form__input news-form__input-border news-form__input-name "
                           type="text">
                    <input placeholder="Last Name "
                           class="title-h1 color-placeholder news-form__input news-form__input-border news-form__input-name "
                           type="text">
                </div>
                <div class="news-form__box">
                    <input placeholder="E-mail"
                           class="title-h1 color-placeholder news-form__input news-form__input-border news-form__input-email "
                           type="text">
                </div>
                <div class="pb-40  news-form__checkbox">
                    <div class="radio news-form__radio">
                        <input class="custom-radio " type="radio" id="radio-1" name="color" value="indigo">
                        <label class="title-h1 color " for="radio-1">Male </label>
                    </div>
                    <div class="radio">
                        <input class="custom-radio " type="radio" id="color-2" name="color" value="red">
                        <label class="title-h1 color " for="color-2">Female</label>
                    </div>
                </div>
                <div class="news-form__btn-box">
                    <button type="submit" class="title-h1 news-form__title news-form__btn">Subscribe</button>
                    <h2 class="mt-10 title-h2 news-form__subtitle">
                        <span>On subscription you accept our</span>
                        <a href="#" class="link title-h2 border-botom news-form__link">Privacy Policy</a>
                    </h2>
                </div>
            </form>
        </div>
    </div>
</div>