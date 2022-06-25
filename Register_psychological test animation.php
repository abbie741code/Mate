<?php
session_start();
$pageName = 'index';
$title = 'Mate';
?>

<?php include __DIR__ . '/parts/register-head.php' ?>


<style>
    /* * {
        outline: #ee1010 1px solid;
    } */

    body {
        background-color: #240173;
        /* outline: #e79909 1px solid; */
    }

    /* layout grid 75% */
    .ab-container {
        width: 75%;
        max-width: 1080px;
        margin: 14% auto 14%;
        /* outline: #b421b4 1px solid; */
        position: relative;
    }


    .bubble-circle {
        animation: rotating 15s linear infinite;
        background: linear-gradient(180deg, rgba(255, 167, 155, 0.33) 2.08%, #F9A3A3 35.42%, rgba(240, 21, 21, 0.28) 100%);
        ;
        border-radius: 370px 500px 323px 384px;
        bottom: 0;
        display: block;
        height: 718px;
        margin: auto;
        transition: background-color 0.5s ease-out;
        width: 805px;
        filter: blur(30px);
        /* outline: #26cb4d 1px solid; */
        /* box-shadow:0 0 20px 10px rgba(255, 167, 155, 0.33);
        -webkit-transform:scale(.85);
        transform:scale(.85); */
    }

    .ab-title {
        position: absolute;
        top: 45%;
        right: 45%;
        font-size: 48px;
        z-index: 99;

    }

    .ab-desc {
        position: absolute;
        bottom: 5%;
        right: 0;
        width: 40%;

    }

    @-webkit-keyframes rotating{

    /* Safari and Chrome */
        from {
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes rotating {
        from {
            -ms-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .rotating {
        -webkit-animation: rotating 15s linear infinite;
        -moz-animation: rotating 15s linear infinite;
        -ms-animation: rotating 15s linear infinite;
        -o-animation: rotating 15s linear infinite;
        animation: rotating 15s linear infinite;
    } 
</style>

<?php include __DIR__ . '/parts/no-bg.php' ?>

<div class="ab-container">
    <div class="bubble-wrapper" style=" cursor: pointer;" onclick="window.location='Register_psychological-test(Q1).php';">
        <p class="ab-title pc-title-32 text-pink">心理測驗</p>
        <div class="bubble-circle bubble-circle--left"></div>
    </div>
</div>
<div class="ab-desc pc-middle-title-20 text-pink">
    <p>就快要回答完啦～</p>
    <p >完整回答關鍵字與心理測驗 <br>
    就能更精準配對到完美的約會對象唷！</p>
</div>


<!-- ________________ js_______________ -->
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/scripts-lightbox.php' ?>
<script></script>
<?php include __DIR__ . '/parts/html-foot.php' ?>