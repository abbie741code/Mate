<?php
session_start();
$pageName = 'index';
$title = 'Mate';
?>

<?php include __DIR__ . '/parts/register-head.php' ?>

<style>
    * {
        /* outline: 1px solid rgb(199, 114, 114); */
        margin: 0px;
        padding: 0px;

    }

    body {
        background-color: #240173;
    }

    /* layout grid */
    .ab-container {
        width: 75%;
        max-width: 1080px;
        margin: auto;
        /* outline: 1px solid rgb(88, 218, 18); */
        justify-content: space-between;
    }



    /* 心理測驗：大標題+小標題 */
    .ab-quiz-section {
        /* outline: 1px solid rgb(215, 196, 52); */
        margin: 15% auto;
    }

    /* 卡片區的css */
    .ab-card-container {
        display: flex;
        justify-content: space-between;

    }

    /* .card {
        width: 256px;
        height: 398px;
        background: linear-gradient(226.02deg, rgba(255, 103, 249, 0.5) 4.21%, rgba(83, 56, 245, 0.5) 99.47%);
        ;
        border-radius: 10px;
    }
    */

    /* -------套codepen特效------ */
    /* @property --rotate {
        syntax: "<angle>";
        initial-value: 132deg;
        inherits: false;
    } */

    :root {
        --card-height: 65vh;
        --card-width: calc(var(--card-height) / 1.5);
    }

    .card {
        background: #09005F;
        /* width: var(--card-width);
            height: var(--card-height); */
        width: 256px;
        height: 398px;
        padding: 3px;
        position: relative;
        border-radius: 6px;
        margin: 12px;
        justify-content: center;
        align-items: left;
        text-align: left;
        display: flex;
        font-size: 1.5em;
        color: rgb(88 199 250 / 0%);
        cursor: pointer;
        font-family: cursive;
    }
    .card:hover, .card.active {
        color: rgb(100 199 250 / 100%);
        background: linear-gradient(226.02deg, #FF67F9 4.21%, #5338F5 99.47%);
        transition: color 0.5s;
        transform: scale(1.1);
    }
    .card.active:before,
    .card.active:after,
    .card:hover:before,
    .card:hover:after {
        animation: none;
        opacity: 0;
    }


    .card::before {
        content: "";
        width: 104%;
        height: 102%;
        border-radius: 8px;
        background-image: linear-gradient(var(--rotate), #5ddcff, #3c67e3 43%, #4e00c2);
        position: absolute;
        z-index: -1;
        top: -1%;
        left: -2%;
        animation: spin 2.5s linear infinite;
    }

    .card::after {
        position: absolute;
        content: "";
        top: calc(var(--card-height) / 6);
        left: 0;
        right: 0;
        z-index: -1;
        height: 100%;
        width: 100%;
        margin: 0 auto;
        transform: scale(0.8);
        filter: blur(calc(var(--card-height) / 6));
        background-image: linear-gradient(var(--rotate), #5ddcff, #3c67e3 43%, #4e00c2);
        opacity: 1;
        transition: opacity .5s;
        animation: spin 2.5s linear infinite;
    }

    @keyframes spin {
        0% {
            --rotate: 0deg;
        }

        100% {
            --rotate: 360deg;
        }
    }

    /* -------套codepen特效------ */

    .ab-text-group {
        margin: 20px;
    }

    .ab-gold-rect {
        height: 3px;
        width: 17px;
        background: linear-gradient(226.02deg, #FFDA93 4.21%, #F56638 99.47%);
    }

    .ab-option {
        margin: 0 20px 0;

    }

    .ab-img-wrap {
        height: 234px;
        width: 218px;
        overflow: hidden;
        border-radius: 8px;
        margin: auto;
        /* background-size: cover; */

    }

    .ab-img-wrap img {
        width: 100%;
        height: 100%;
        background-size: contain;
        background-size: cover;
    }

    /* 下一步btn */
    .btn-pc-big-orange:hover,
    .btn-pc-orange:hover {
        color: #F4EDED;
        background: linear-gradient(262.71deg, #FDBC44 -19.11%, #EA3A00 125.42%);

    }

    .btn-pc-big-orange {
        margin: 83px auto 0;
    }

    /* 略過btn */
    .btn-pc-skip {
        margin: 20px auto;
        width: 34px;
    }

    a {
        text-decoration: underline;
        color: #AFAFAF;
        font-size: 14px;
    }



    @media screen and (max-width:960px) {

        .ab-title {

            margin-top: 14px;
            margin: 12px auto 50px;
        }

    }

</style>


<?php include __DIR__ . '/parts/no-bg.php' ?>

<div class="ab-container">
    <div style="cursor: pointer;" class="ab-quiz-section text-pink">
        <p class="pc-title-32">Question1:</p>
        <p class="pc-middle-title-20">如果你能邂逅了一位性感的異性，你最希望在什麼地方能和對方重遇呢？</p>
    </div>
    <div class="ab-card-container">
        <div class="card" data-index="0">
            <div class="ab-text-group">
                <p class="text-pink pc-title-32">A</p>
                <div class="ab-gold-rect"></div>
            </div>
            <div class="ab-option text-pink pc-middle-title-20">電梯</div>
            <div class="ab-img-wrap">
                <img src="./imgs/quiz-test/1-elevator.JPG" alt="">
            </div>
        </div>

        <div class="card" data-index="1">
            <div class="ab-text-group">
                <p class="text-pink pc-title-32">B</p>
                <div class="ab-gold-rect"></div>
            </div>
            <div class="ab-option text-pink pc-middle-title-20">咖啡廳</div>
            <div class="ab-img-wrap">
                <img src="./imgs/quiz-test/1-cafee.jpeg" alt="">
            </div>
        </div>

        <div class="card" data-index="2">
            <div class="ab-text-group">
                <p class="text-pink pc-title-32">C</p>
                <div class="ab-gold-rect"></div>
            </div>
            <div class="ab-option text-pink pc-middle-title-20">飯店</div>
            <div class="ab-img-wrap">
                <img src="./imgs/quiz-test/1-hotel.jpg" alt="">
            </div>
        </div>

        <div class="card" data-index="3">
            <div class="ab-text-group">
                <p class="text-pink pc-title-32">D</p>
                <div class="ab-gold-rect"></div>
            </div>
            <div class="ab-option text-pink pc-middle-title-20">游泳池</div>
            <div class="ab-img-wrap">
                <img src="./imgs/quiz-test/1-swimming pool.png" alt="">
            </div>
        </div>

    </div>
</div>

<div class="btn-pc-big-orange" style="cursor: pointer;" onclick="window.location='./Register_psychological-test(Q2).php';">下一步 (3/5)</div>
<div class="btn-pc-skip">
    <a href="./main-login.php">略過</a><br>
</div>


<!-- ________________ js_______________ -->
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/scripts-lightbox.php' ?>
<script>
        document.querySelectorAll(".card").forEach((cardElem, index) => {
            cardElem.addEventListener("click", e => {
                document.querySelectorAll(".card").forEach((cardElem, index) => {
                    if (parseInt(e.currentTarget.dataset.index) !== index) {
                        cardElem.classList.remove("active");
                    }
                });
                e.currentTarget.classList.toggle("active");
            });
        });
        window.addEventListener("click", e => {
            document.querySelectorAll(".card").forEach((cardElem) => {
                if (document.querySelector(".ab-card-container").contains(e.target)) {
                    return;
                }
                cardElem.classList.remove("active");
            });
        }, { capture: true });
</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>