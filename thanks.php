<?php
/*
Template Name: Page thanks
*/
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Korea</title>

    <?php wp_head(); ?>

</head>
<body>

<style>
    .wrapper{
        display: flex;
        align-items: center;
        height: 100vh;
        padding: 0;
        background: url("<?php echo get_stylesheet_directory_uri() ?>/img/sect1-bg.jpg") top center no-repeat;
    }

    .logo{
        margin-bottom: 65px;
    }
    h1{
        font-weight: bold;
        font-size: 46px;
        line-height: 56px;
        text-shadow: 0px 20px 12px rgba(0, 0, 0, 0.02);
        margin-bottom: 14px;
    }

    p.text{
        font-size: 24px;
        line-height: 29px;
    }

    p.text2{
        margin-top: 57px;
        font-weight: 300;
        font-size: 16px;
        line-height: 20px;
    }
    .social{
        justify-content: flex-start;
        margin-top: 26px;
    }
    .social a + a{
        margin-left: 20px;
    }

    @media (max-width: 1024px) {
        .wrapper{
            background-position: -250px;
        }
        h1{
            font-size: 34px;
            line-height: 36px;
        }
        p.text {
            font-size: 18px;
            line-height: 22px;
        }
        p.text2 {
            margin-top: 42px;
        }
    }

    @media (max-width: 768px) {
        .wrapper{
            background-position: -450px;
        }
        h1{
            font-size: 34px;
            line-height: 36px;
        }
        p.text {
            font-size: 18px;
            line-height: 22px;
        }
        p.text2 {
            margin-top: 42px;
        }
        br{
            display: none;
        }
    }

    @media (max-width: 480px) {
        .wrapper{
            background-position: -450px;
        }
        h1{
            font-size: 26px;
            line-height: 30px;
        }
        p.text {
            font-size: 16px;
            line-height: 20px;
        }
        p.text2 {
            margin-top: 42px;
        }
        br{
            display: none;
        }
    }
</style>

<div class="wrapper">
    <div class="container">
        <a href="<?php echo home_url(); ?>" class="logo">
            <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H82V82H0V0ZM1.36667 1.36667H80.6333V80.6333H1.36667V1.36667Z" fill="#23D30E"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M54.6847 53.2934C60.266 53.2934 64.6101 51.7493 67.717 48.661C70.8239 45.5727 72.3773 41.1635 72.3773 35.4336V13.5551H63.4473V35.0985C63.4473 38.7081 62.7031 41.3594 61.2147 43.0525C59.7263 44.7455 57.5682 45.592 54.7405 45.592C48.9364 45.592 46.0342 42.0944 46.034 35.0993V13.5551H36.9924V35.4336C36.9924 41.1637 38.5459 45.5729 41.6528 48.661C44.7597 51.7491 49.1036 53.2933 54.6847 53.2934Z" fill="#028C69"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7739 37.052H39.4112V29.7406H30.872V37.052H20.3793L37.4577 13.5551H27.9698L9.55176 38.3358V44.4191H30.593V52.6235H39.4112V44.4191H45.7739V37.052Z" fill="#3ACB27"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0314 68.7901H20.1827L17.0536 65.0017L19.9957 61.9021H18.875L15.1358 65.7495V61.9021H14.1519V68.7901H15.1358V67.009L16.3954 65.7298L19.0314 68.7901ZM23.0953 68.8491C23.5815 68.8573 24.0614 68.7386 24.4877 68.5047C24.8901 68.2827 25.2238 67.9542 25.452 67.5552C25.6812 67.1339 25.8013 66.662 25.8013 66.1825C25.8013 65.7029 25.6812 65.231 25.452 64.8098C25.2244 64.4116 24.8905 64.0845 24.4877 63.8652C24.0566 63.642 23.5783 63.5255 23.0929 63.5255C22.6074 63.5255 22.1291 63.642 21.698 63.8652C21.2931 64.0834 20.9573 64.4106 20.7288 64.8098C20.4996 65.231 20.3795 65.7029 20.3795 66.1825C20.3795 66.662 20.4996 67.1339 20.7288 67.5552C20.958 67.9551 21.2935 68.2838 21.698 68.5047C22.1263 68.7382 22.6076 68.8569 23.0953 68.8491ZM23.0953 68.0226C22.7799 68.0277 22.4689 67.9478 22.195 67.7913C21.9294 67.637 21.7119 67.4123 21.5663 67.1419C21.4142 66.8449 21.3349 66.5161 21.3349 66.1825C21.3349 65.8489 21.4142 65.52 21.5663 65.2231C21.7114 64.9536 21.9292 64.7303 22.195 64.5786C22.4718 64.43 22.7811 64.3522 23.0953 64.3522C23.4095 64.3522 23.7188 64.43 23.9957 64.5786C24.2611 64.7295 24.4779 64.9531 24.6205 65.2231C24.7694 65.521 24.8468 65.8495 24.8468 66.1825C24.8468 66.5155 24.7694 66.844 24.6205 67.1419C24.4775 67.4128 24.2609 67.6379 23.9957 67.7913C23.7217 67.9478 23.4107 68.0277 23.0953 68.0226ZM28.0153 64.4506V63.576H27.11V68.7912H28.0547V66.1945C28.0235 65.7193 28.1806 65.2509 28.492 64.8907C28.6498 64.7345 28.8386 64.613 29.0462 64.5342C29.2539 64.4554 29.4757 64.421 29.6974 64.4331C29.7697 64.4323 29.842 64.4356 29.9139 64.443V63.5279C29.5107 63.5162 29.1101 63.597 28.7429 63.764C28.4332 63.9104 28.1782 64.1517 28.0148 64.4528L28.0153 64.4506ZM35.7397 66.212C35.7489 65.7259 35.6356 65.2454 35.4101 64.8147C35.2003 64.4185 34.8832 64.0894 34.495 63.8652C34.0889 63.6347 33.6284 63.5175 33.1616 63.5257C32.6918 63.5183 32.2284 63.6355 31.8185 63.8652C31.4246 64.0885 31.1008 64.4174 30.8837 64.8147C30.6545 65.2334 30.5376 65.7042 30.5442 66.1814C30.5366 66.6634 30.6571 67.1388 30.8935 67.559C31.1247 67.9642 31.4681 68.294 31.8824 68.5085C32.2909 68.7089 32.7362 68.8233 33.1907 68.8444C33.6452 68.8656 34.0992 68.7931 34.5245 68.6315C34.8642 68.4956 35.1663 68.28 35.4052 68.0029L34.8836 67.3928C34.6937 67.601 34.4605 67.7651 34.2004 67.8737C33.9404 67.9823 33.6597 68.0327 33.3781 68.0215C32.914 68.0375 32.4591 67.8895 32.0934 67.6033C31.9243 67.468 31.7838 67.3004 31.6799 67.1104C31.576 66.9204 31.5109 66.7116 31.4883 66.4963H35.7195C35.7311 66.4016 35.7376 66.3063 35.7392 66.2109L35.7397 66.212ZM33.1616 64.3227C33.5802 64.3102 33.9875 64.4601 34.2982 64.7409C34.604 65.0214 34.795 65.4053 34.8344 65.8184H31.488C31.5252 65.4032 31.7165 65.0171 32.0243 64.736C32.3363 64.4578 32.743 64.3099 33.1608 64.3227H33.1616ZM38.8 63.5257C38.3967 63.5234 37.9954 63.5814 37.6093 63.6979C37.2591 63.8005 36.9318 63.9692 36.645 64.1948L37.0386 64.9033C37.2608 64.7226 37.5143 64.5842 37.7864 64.4949C38.0776 64.3941 38.3836 64.3425 38.6917 64.3424C39.0679 64.3151 39.4405 64.4311 39.7347 64.6671C39.8575 64.7884 39.9527 64.9346 40.014 65.0959C40.0753 65.2572 40.1013 65.4297 40.0901 65.6019V65.7889H38.5947C37.8658 65.7889 37.3344 65.9283 37.0006 66.2071C36.841 66.3454 36.7135 66.5168 36.6269 66.7094C36.5402 66.9019 36.4965 67.1111 36.4989 67.3222C36.5012 67.5334 36.5495 67.7415 36.6404 67.9321C36.7313 68.1227 36.8626 68.2913 37.0252 68.426C37.4295 68.7252 37.9251 68.8747 38.4274 68.8491C38.7831 68.8579 39.1368 68.7927 39.4661 68.6578C39.7412 68.5439 39.976 68.3503 40.1401 68.1018V68.7906H41.0356V65.6418C41.0356 64.9401 40.8437 64.4116 40.4599 64.0565C39.9952 63.6744 39.4021 63.4843 38.8019 63.5251L38.8 63.5257ZM38.5835 68.121C38.284 68.1386 37.9869 68.0593 37.7361 67.8946C37.638 67.8246 37.5588 67.7313 37.5056 67.6231C37.4524 67.5149 37.4268 67.3952 37.4311 67.2747C37.4311 66.7372 37.8313 66.4682 38.6316 66.4678H40.0879V67.196C39.9785 67.4806 39.7778 67.7209 39.5172 67.8793C39.2343 68.0456 38.9104 68.1292 38.5824 68.1204L38.5835 68.121ZM50.7162 68.7901H51.7494L48.6203 61.9021H47.6461L44.5268 68.7901H45.5404L46.298 67.0681H49.9585L50.7162 68.7901ZM46.6435 66.2809L48.1294 62.9058L49.6152 66.2809H46.6424H46.6435ZM56.454 63.5749V66.271C56.4837 66.7378 56.3281 67.1974 56.0211 67.5502C55.8668 67.704 55.682 67.8238 55.4786 67.9017C55.2753 67.9797 55.0578 68.0142 54.8403 68.0029C54.6488 68.0154 54.4569 67.9873 54.2771 67.9203C54.0973 67.8533 53.9337 67.749 53.7972 67.6142C53.533 67.2931 53.4026 66.8825 53.4331 66.4678V63.5749H52.4885V66.5761C52.4885 67.3232 52.6889 67.889 53.0898 68.2735C53.3125 68.4726 53.5723 68.626 53.8542 68.7248C54.1362 68.8235 54.4348 68.8658 54.7331 68.8491C55.0849 68.8524 55.4329 68.7768 55.7515 68.6277C56.0527 68.4887 56.3122 68.2733 56.5043 68.0029V68.7901H57.3997V63.5749H56.4551H56.454ZM61.8362 67.8061C61.6268 67.9723 61.3655 68.0594 61.0982 68.0521C60.9871 68.0593 60.8757 68.0429 60.7713 68.0039C60.667 67.9649 60.5722 67.9042 60.493 67.8258C60.3414 67.6447 60.2656 67.412 60.2815 67.1763V64.3522H61.7772V63.5749H60.2815V62.4334H59.3369V63.5749H58.4513V64.3522H59.3369V67.2157C59.3223 67.4363 59.3533 67.6576 59.4277 67.8658C59.5022 68.074 59.6186 68.2646 59.7698 68.426C59.935 68.5739 60.1279 68.6875 60.3374 68.7602C60.5469 68.8328 60.7687 68.863 60.99 68.8491C61.203 68.8495 61.4149 68.818 61.6186 68.7556C61.8061 68.7019 61.9804 68.6098 62.1303 68.485L61.8362 67.8061ZM65.3294 68.8491C65.8156 68.8573 66.2955 68.7386 66.7218 68.5047C67.1242 68.2827 67.4579 67.9542 67.6861 67.5552C67.9153 67.1339 68.0354 66.662 68.0354 66.1825C68.0354 65.7029 67.9153 65.231 67.6861 64.8098C67.4585 64.4116 67.1246 64.0845 66.7218 63.8652C66.2907 63.642 65.8124 63.5255 65.327 63.5255C64.8415 63.5255 64.3632 63.642 63.9321 63.8652C63.5272 64.0834 63.1914 64.4106 62.9629 64.8098C62.7337 65.231 62.6136 65.7029 62.6136 66.1825C62.6136 66.662 62.7337 67.1339 62.9629 67.5552C63.1921 67.9551 63.5276 68.2838 63.9321 68.5047C64.3604 68.7382 64.8417 68.8569 65.3294 68.8491ZM65.3294 68.0226C65.014 68.0277 64.703 67.9478 64.4291 67.7913C64.1636 67.637 63.946 67.4123 63.8004 67.1419C63.6483 66.8449 63.569 66.5161 63.569 66.1825C63.569 65.8489 63.6483 65.52 63.8004 65.2231C63.9455 64.9536 64.1633 64.7303 64.4291 64.5786C64.7059 64.43 65.0152 64.3522 65.3294 64.3522C65.6436 64.3522 65.9529 64.43 66.2298 64.5786C66.4952 64.7295 66.712 64.9531 66.8546 65.2231C67.0035 65.521 67.0809 65.8495 67.0809 66.1825C67.0809 66.5155 67.0035 66.844 66.8546 67.1419C66.7116 67.4128 66.495 67.6379 66.2298 67.7913C65.9558 67.9478 65.6449 68.0277 65.3294 68.0226Z" fill="white"/>
            </svg>
        </a>
        <h1><?php the_field('thanks_title')?></h1>
        <p class="text"><?php the_field('thanks_subtitle')?></p>

        <p class="text2"><?php the_field('thanks_subtitle_2')?></p>

        <div class="social flex-row">
            <a href="<?php the_field('telegram_link', 19); ?>" class="telegram">
                <svg width="24" height="21" viewBox="0 0 24 21" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.1365 0.877441L0 9.83218V11.1265L6.34017 13.0838L8.34531 19.5167L9.94595 19.5164L12.5266 16.876L17.9744 20.8774L19.0347 20.474L23.0504 1.64442L22.1365 0.877441ZM17.9316 19.1701L10.7569 13.9002L9.9572 14.9888L11.4271 16.0685L9.33917 18.1658L7.70081 12.9097L17.1905 7.24368L16.498 6.0839L6.86873 11.8333L2.21024 10.3952L21.464 2.60662L17.9316 19.1701Z"/>
                </svg>
            </a>
            <a href="<?php the_field('viber_link', 19); ?>" class="viber">
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.13 11.5783C18.7261 6.56022 17.8436 3.39218 16.2517 1.95928L16.2525 1.95845C13.6831 -0.488562 5.00575 -0.850743 1.93179 2.06835C0.551344 3.49626 0.0651064 5.59191 0.0118201 8.18629C-0.0414663 10.7815 -0.104744 15.643 4.42543 16.9619H4.42959L4.42543 18.9759C4.42543 18.9759 4.39462 19.7919 4.91583 19.9559C5.51197 20.1491 5.78173 19.7702 7.63593 17.5555C10.7365 17.8245 13.1178 17.2083 13.3884 17.1184C14.0145 16.9086 17.5572 16.4398 18.13 11.5783ZM7.94149 16.1384C7.94149 16.1384 5.97906 18.5854 5.36876 19.2207C5.16894 19.4272 4.94996 19.4081 4.95329 18.9984C4.95329 18.7295 4.96828 15.6547 4.96828 15.6547C1.1275 14.554 1.35397 10.4143 1.3956 8.24873C1.43723 6.08231 1.83355 4.30804 3.00252 3.11326C5.6993 0.584658 13.3068 1.14999 15.2451 2.97172C17.6146 5.07237 16.7712 11.0071 16.7762 11.2095C16.2891 15.2675 13.4183 15.5248 12.8905 15.7005C12.6648 15.7754 10.5708 16.3141 7.94149 16.1384V16.1384Z"/>
                    <path d="M9.0272 3.58862C8.70665 3.58862 8.70665 4.08818 9.0272 4.09235C11.5142 4.1115 13.5624 5.84497 13.5848 9.02466C13.5848 9.3602 14.0761 9.35604 14.0719 9.0205H14.0711C14.0444 5.59435 11.8081 3.60777 9.0272 3.58862V3.58862Z"/>
                    <path d="M12.2985 8.49761C12.291 8.82899 12.7814 8.84481 12.7856 8.50927C12.8264 6.6201 11.6616 5.06398 9.47265 4.89995C9.1521 4.87664 9.11879 5.38036 9.43851 5.40368C11.3368 5.54772 12.3368 6.84324 12.2985 8.49761V8.49761Z"/>
                    <path d="M11.774 10.6466C11.3626 10.4085 10.9439 10.5567 10.7707 10.7907L10.4085 11.2594C10.2245 11.4975 9.88062 11.4659 9.88062 11.4659C7.37117 10.8023 6.70009 8.17629 6.70009 8.17629C6.70009 8.17629 6.66929 7.82077 6.89909 7.63011L7.35202 7.25544C7.57849 7.0756 7.72169 6.64264 7.49106 6.21719C6.87494 5.104 6.46114 4.72017 6.25049 4.42543C6.02902 4.14818 5.69598 4.08573 5.34962 4.27307H5.34212C4.62193 4.69436 3.83346 5.48283 4.08573 6.29462C4.51619 7.15053 5.30716 9.87896 7.82826 11.9405C9.01305 12.9154 10.8881 13.9146 11.684 14.1452L11.6915 14.1569C12.4758 14.4183 13.2385 13.599 13.6456 12.8572V12.8513C13.8263 12.4925 13.7664 12.1528 13.5024 11.9305C13.0345 11.4742 12.3285 10.9705 11.774 10.6466Z"/>
                    <path d="M9.81567 6.75841C10.6158 6.80503 11.0038 7.223 11.0454 8.0814C11.0604 8.41694 11.5475 8.39363 11.5325 8.05809C11.4792 6.93741 10.8947 6.31296 9.84232 6.25468C9.52177 6.23553 9.49179 6.73926 9.81567 6.75841V6.75841Z"/>
                </svg>
            </a>
            <a href="<?php the_field('fb_link', 19); ?>" class="fb">
                <svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.66189 5.16339C8.69117 5.13124 8.82807 5.0262 9.36571 5.0262L11.1284 5.02557C11.7019 5.02557 12.1682 4.57168 12.1682 4.01371V1.016C12.1682 0.458982 11.7026 0.00509273 11.1301 0.00413782L8.51174 0C6.89572 0 5.52194 0.518663 4.53892 1.50013C3.56031 2.47713 3.04296 3.84103 3.04296 5.44413V7.06091H1.03994C0.466486 7.06091 0 7.5148 0 8.07277V11.3012C0 11.8592 0.466486 12.3131 1.03994 12.3131H3.04296V19.848C3.04296 20.4059 3.50944 20.8598 4.0829 20.8598H7.51612C8.08958 20.8598 8.55606 20.4059 8.55606 19.848V12.3133H11.0045C11.5779 12.3133 12.0442 11.8592 12.0442 11.3016L12.0456 8.07293C12.0456 7.70641 11.8406 7.36727 11.5105 7.18791C11.3576 7.10483 11.1796 7.06091 10.9961 7.06091H8.55606V5.78359C8.55606 5.36726 8.61364 5.21655 8.66189 5.16339Z"/>
                </svg>
            </a>
            <a href="<?php the_field('instagram_link', 19); ?>" class="inst">
                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.187 20.8598C11.1179 20.8598 11.0489 20.8598 10.9793 20.8595C9.34416 20.8635 7.83332 20.8219 6.36401 20.7325C5.01693 20.6505 3.78731 20.185 2.80787 19.3864C1.86282 18.6158 1.21745 17.5739 0.889753 16.2899C0.604549 15.172 0.589429 14.0747 0.574946 13.0133C0.564442 12.2518 0.55362 11.3494 0.551392 10.4318C0.55362 9.51032 0.564442 8.60795 0.574946 7.84643C0.589429 6.78522 0.604549 5.6879 0.889753 4.56988C1.21745 3.28587 1.86282 2.24393 2.80787 1.47334C3.78731 0.67473 5.01693 0.209221 6.36417 0.12726C7.83347 0.0379779 9.34464 -0.00371893 10.9833 0.000259775C12.6189 -0.00324148 14.1293 0.0379779 15.5986 0.12726C16.9457 0.209221 18.1753 0.67473 19.1547 1.47334C20.0999 2.24393 20.7451 3.28587 21.0728 4.56988C21.358 5.68774 21.3732 6.78522 21.3876 7.84643C21.3982 8.60795 21.4091 9.51032 21.4112 10.428V10.4318C21.4091 11.3494 21.3982 12.2518 21.3876 13.0133C21.3732 14.0745 21.3582 15.1719 21.0728 16.2899C20.7451 17.5739 20.0999 18.6158 19.1547 19.3864C18.1753 20.185 16.9457 20.6505 15.5986 20.7325C14.1915 20.8181 12.7461 20.8598 11.187 20.8598ZM10.9793 19.2298C12.5879 19.2336 14.0648 19.1931 15.4996 19.1058C16.5182 19.0439 17.4013 18.7134 18.1248 18.1234C18.7936 17.578 19.2542 16.8256 19.4937 15.8869C19.7312 14.9564 19.7449 13.9572 19.7581 12.991C19.7684 12.2346 19.7792 11.3386 19.7815 10.4299C19.7792 9.52098 19.7684 8.62514 19.7581 7.86871C19.7449 6.90252 19.7312 5.90338 19.4937 4.97269C19.2542 4.03403 18.7936 3.28158 18.1248 2.73618C17.4013 2.14637 16.5182 1.81582 15.4996 1.75391C14.0648 1.66654 12.5879 1.62628 10.9831 1.62978C9.37488 1.62596 7.89777 1.66654 6.463 1.75391C5.44442 1.81582 4.56127 2.14637 3.83776 2.73618C3.16899 3.28158 2.7084 4.03403 2.46888 4.97269C2.23142 5.90338 2.21773 6.90236 2.20452 7.86871C2.19418 8.62577 2.18335 9.52226 2.18113 10.4318C2.18335 11.3373 2.19418 12.234 2.20452 12.991C2.21773 13.9572 2.23142 14.9564 2.46888 15.8869C2.7084 16.8256 3.16899 17.578 3.83776 18.1234C4.56127 18.7132 5.44442 19.0438 6.463 19.1057C7.89777 19.1931 9.3752 19.2338 10.9793 19.2298ZM10.9405 15.5226C8.13237 15.5226 5.84755 13.238 5.84755 10.4299C5.84755 7.62171 8.13237 5.33714 10.9405 5.33714C13.7487 5.33714 16.0334 7.62171 16.0334 10.4299C16.0334 13.238 13.7487 15.5226 10.9405 15.5226ZM10.9405 6.96681C9.03095 6.96681 7.47729 8.52042 7.47729 10.4299C7.47729 12.3393 9.03095 13.8929 10.9405 13.8929C12.8502 13.8929 14.4037 12.3393 14.4037 10.4299C14.4037 8.52042 12.8502 6.96681 10.9405 6.96681ZM16.6038 3.70746C15.9288 3.70746 15.3815 4.25461 15.3815 4.92972C15.3815 5.60482 15.9288 6.15197 16.6038 6.15197C17.2789 6.15197 17.8261 5.60482 17.8261 4.92972C17.8261 4.25461 17.2789 3.70746 16.6038 3.70746Z"/>
                </svg>
            </a>
            <a href="<?php the_field('youtube_link', 19); ?>" class="google">
                <svg width="27" height="21" viewBox="0 0 27 21" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.2673 9.10052L11.4336 5.9086C11.0982 5.72507 10.7017 5.73192 10.3729 5.92673C10.044 6.12175 9.84773 6.46624 9.84773 6.84861V13.1777C9.84773 13.5582 10.0427 13.9021 10.3695 14.0973C10.5401 14.1993 10.7293 14.2504 10.9189 14.2504C11.0925 14.2504 11.2666 14.2075 11.4268 14.1213L17.2606 10.9844C17.6069 10.798 17.8231 10.438 17.8247 10.0446C17.8261 9.65111 17.6126 9.28949 17.2673 9.10052ZM11.3951 12.3815V7.65122L15.7551 10.0369L11.3951 12.3815Z"/>
                    <path d="M26.2114 5.00211L26.2102 4.99003C26.1878 4.77749 25.9652 2.887 25.0461 1.92544C23.9838 0.79445 22.7795 0.657056 22.2003 0.591179C22.1524 0.585739 22.1085 0.580703 22.0692 0.575465L22.023 0.57063C18.5322 0.316792 13.2602 0.282141 13.2074 0.28194L13.2028 0.281738L13.1982 0.28194C13.1454 0.282141 7.8734 0.316792 4.3511 0.57063L4.30456 0.575465C4.26709 0.580501 4.22579 0.585135 4.18087 0.590373C3.60832 0.656451 2.4169 0.794047 1.35159 1.96593C0.476248 2.91722 0.223216 4.76721 0.197228 4.97512L0.194206 5.00211C0.186349 5.09055 0 7.196 0 9.3097V11.2856C0 13.3993 0.186349 15.5048 0.194206 15.5934L0.195616 15.6067C0.217978 15.8158 0.440388 17.6716 1.35521 18.6336C2.35404 19.7267 3.61699 19.8714 4.2963 19.9491C4.40368 19.9614 4.49615 19.9719 4.55921 19.983L4.62025 19.9914C6.63584 20.1832 12.9554 20.2777 13.2233 20.2815L13.2314 20.2817L13.2395 20.2815C13.2922 20.2813 18.564 20.2467 22.0549 19.9928L22.101 19.988C22.1451 19.9822 22.1947 19.9769 22.2491 19.9713C22.8184 19.9109 24.0034 19.7853 25.054 18.6294C25.9293 17.6779 26.1826 15.8279 26.2083 15.6202L26.2114 15.5932C26.2192 15.5046 26.4058 13.3993 26.4058 11.2856V9.3097C26.4056 7.196 26.2192 5.09076 26.2114 5.00211ZM24.8582 11.2856C24.8582 13.242 24.6873 15.2568 24.6712 15.4417C24.6055 15.9512 24.3386 17.1217 23.9121 17.5852C23.2546 18.3087 22.5791 18.3804 22.0859 18.4326C22.0263 18.4388 21.9711 18.4448 21.9211 18.4511C18.5447 18.6953 13.4717 18.7327 13.238 18.7341C12.9759 18.7303 6.74886 18.635 4.79471 18.4535C4.69459 18.4372 4.5864 18.4247 4.47238 18.4118C3.89399 18.3455 3.10226 18.2549 2.49345 17.5852L2.47915 17.5699C2.06011 17.1333 1.80084 16.0388 1.73496 15.4477C1.72267 15.3079 1.5474 13.2694 1.5474 11.2856V9.3097C1.5474 7.35555 1.71784 5.34298 1.73436 5.15421C1.81272 4.55407 2.08469 3.45451 2.49345 3.01009C3.17116 2.26469 3.88573 2.1821 4.35835 2.1275C4.40348 2.12226 4.44559 2.11743 4.48447 2.11239C7.91007 1.86702 13.0195 1.83055 13.2028 1.82914C13.3861 1.83035 18.4937 1.86702 21.8889 2.11239C21.9306 2.11763 21.9761 2.12287 22.0251 2.12851C22.5112 2.18391 23.2459 2.26772 23.9202 2.98692L23.9264 2.99357C24.3455 3.43013 24.6047 4.5438 24.6706 5.14676C24.6823 5.27872 24.8582 7.32171 24.8582 9.3097V11.2856Z"/>
                </svg>
            </a>
        </div>
    </div>
</div>

<?php //wp_footer(); ?>

<script>
    setTimeout(() => {
        window.location = '<?php echo home_url(); ?>';
    }, 10000)
</script>

</body>
</html>
