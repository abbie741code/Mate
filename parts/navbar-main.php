<?php
require './parts/connect-db.php';
$pageName = 'navbar-main';
$title = 'Mate';


$id = is_null($_SESSION['user']['id']) ? "user id" : $_SESSION['user']['id'];
$email = is_null($_SESSION['user']['email']) ? "user email" : $_SESSION['user']['email'];
$nickname = is_null($_SESSION['user']['nickname']) ? "user nickname" : $_SESSION['user']['nickname'];
$age = is_null($_SESSION['user']['age']) ? "user age" : $_SESSION['user']['age'];
$occupation  = is_null($_SESSION['user']['occupation']) ? "user occupation" : $_SESSION['user']['occupation'];
$headshot = is_null($_SESSION['user']['headshot']) ? "imgs/user-photo.png" : $_SESSION['user']['headshot'];

// echo $id . " " . $email . " " . $nickname . " " . $age . " " . $occupation;
// exit;
?>

<style>
    /* *{
            outline: 1px solid red;
        } */


    .ed_table {
        position: fixed;
        top: 0;
        left: 0;
        width: 316px;
        height: 100%;
        left: 0px;
        top: 0px;
        background: #09005F;
        font-family: 'Noto Sans', sans-serif;
        font-family: 'Noto Sans TC', sans-serif;
        z-index: 999;
    }

    .wrapall {
        width: 80%;
        margin: auto;
    }

    .table_logo {
        width: 102px;
        height: 24px;
        margin: auto;
        margin-top: 34px;

    }

    .table_logo img {
        width: 100%;
    }

    .user_photo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin: 5px;
        top: 52%;
        left: 52%;
    }

    .user_photo.active {
        animation: animate1 3s linear infinite;
    }

    .user_photo img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .kk-user-photo-glow {
        border: solid 5px transparent;
        background-origin: border-box;
        width: 100px;
        height: 100px;
        margin: auto;
        margin-top: 49px;
        z-index: 7;
    }

    .kk-user-photo-glow.active {
        border: solid 5px transparent;
        background-image: linear-gradient(#09005F, #09005F), linear-gradient(90deg, #F66F40, #09005F);
        background-origin: border-box;
        background-clip: content-box, border-box;
        border-radius: 50%;
        animation: animate 3s linear infinite;
    }

    /* .kk-user-photo-glow:hover {
        background: linear-gradient(45deg, #F66F40, #FFD38D);
    } */


    .user_name {
        margin: auto;
        text-align: center;
        font-weight: 700;
        font-size: 20px;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 16px;
    }

    .user_age {
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        text-align: center;
        letter-spacing: 2.5px;
        color: #F4EDED;
    }

    .user_career {
        padding: 4px 0px;
        text-align: center;

        background: linear-gradient(45deg, #F66F40, #FFD38D);
        background: -webkit-linear-gradient(45deg, #F66F40, #FFD38D);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;

        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        letter-spacing: 2.5px;
    }

    .border-image {
        width: 105px;
        height: 29px;
        border: solid 1px transparent;
        border-radius: 20px;
        background-image: linear-gradient(#09005F, #09005F),
            linear-gradient(45deg, #F66F40, #FFD38D);
        background-origin: border-box;
        background-clip: content-box, border-box;
        vertical-align: middle;
        margin: auto;
        margin-top: 18px;
    }

    .keyword_all {
        margin-top: 15px;
        text-align: center;

    }

    .keyword_all .keyword {
        display: inline-block;
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        color: #F4EDED;
        letter-spacing: 2.5px;
        border: 1px solid #F4EDED;
        padding: 5px 10px 6px 10px;
        border-radius: 20px;
        margin-right: 5px;

    }

    .coin_all {
        display: flex;
        border: 1px solid #F4EDED;
        border-left: none;
        border-right: none;
        width: 73%;
        margin: auto;
        margin-top: 9px;
    }

    .left,
    .right {
        margin: 6px;
    }

    .left {
        margin-right: 17px;
    }

    .right {
        margin-left: 17px;
    }

    .middle {
        border: 1px solid #F4EDED;
        border-left: none;
        height: 49px;
        margin-top: 15px;
    }

    .coinword1 {
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 8px;
    }

    .coinword2 {

        font-style: normal;
        font-weight: 700;
        font-size: 17px;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 14px;
    }

    .coinword3 {
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        letter-spacing: 2.5px;
        color: #09005F;
        padding: 6px 3px 6px 5px;
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        background: -webkit-linear-gradient(45deg, #F66F40, #FFD38D);
        border-radius: 20px;
        margin-top: 10px;
        cursor: pointer;
    }

    .coinword3.active {
        color: #F4EDED;
        animation: coinword 2s linear infinite;
    }

    @keyframes coinword {
        0% {
            background: linear-gradient(262.71deg, #FDBC44 -19.11%, #EA3A00 125.42%);
        }

        50% {
            background: linear-gradient(226.02deg, #FF67F9 4.21%, #5338F5 99.47%);
        }

        100% {
            background: linear-gradient(262.71deg, #FDBC44 -19.11%, #EA3A00 125.42%);
        }
    }

    .profile_all {
        width: 71%;
        margin: auto;
        margin-top: 17px;
        margin-bottom: 17px;
    }

    .pro1 {
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        letter-spacing: 2.5px;
        color: #F4EDED;
    }

    .pro2 {
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        letter-spacing: 2.5px;
        line-height: 22px;
        color: #F4EDED;
    }

    .progress_bar {
        width: 100%;
        height: 8px;
        background: #727272;
        border-radius: 8px;
        position: relative;
        margin-top: 30px;
    }

    .finished_bar {
        position: absolute;
        bottom: 0;
    }

    .finished {
        width: 120px;
        height: 8px;
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        border-radius: 8px;
    }

    .locate_all {
        position: absolute;
        left: 105px;
        bottom: 55px;
    }

    .locate {
        position: relative;
    }


    .pin1 {
        width: 30px;
        position: absolute;
        top: 0;

    }

    .pinword {
        position: absolute;
        top: 6px;
        left: 2px;
        color: #09005F;
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
    }

    .nav_page_all {
        width: 71%;
        margin: auto;
    }

    .nav_page1 {
        border: 1px solid #F4EDED;
        border-left: none;
        border-right: none;
        margin-top: 20px;
        /* height: 70px; */
    }

    .kk-nav-2 {
        margin-top: 2px;
        display: block;
    }

    .kk-nav-1 {
        margin-top: 2px;
        display: none;
    }

    .kk-nav-4 {
        margin-top: 2px;
        display: none;
    }

    .nav_page2:hover .kk-nav-4 {
        margin-top: 2px;
        display: block;
    }

    .kk-nav-3 {
        margin-top: 2px;
        display: block;
    }

    .nav_page2:hover .kk-nav-3 {

        display: none;
    }


    .nav_page2:hover .kk-word2 {
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
    }

    a:hover {
        text-decoration: none;
    }

    .nav_page2 {
        border: 1px solid #F4EDED;
        border-left: none;
        border-right: none;
        border-top: none;
        /* height: 70px; */
    }

    .nav_inside {
        display: flex;
        text-align: center;
        margin: 16px 27px 16px 27px;
    }

    .navword {
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        text-align: center;
        letter-spacing: 4px;
        color: #F4EDED;
        margin-top: 5px;
    }

    .nav_icon {
        width: 25px;
        margin-right: 20px;
    }

    .kk-word1 {
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
    }

    .bottom_all {
        position: fixed;
        bottom: 15px;
        left: 50px;
    }

    .bottomword {
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 22px;
        letter-spacing: 2.3px;

        color: #8F8F8F;

    }

    /* <!-------------------------------- phone --------------------------------> */

    .phone_logo {
        width: 102px;
        height: 24px;
        margin: auto;
        /* margin-top: 34px; */
        padding-top: 34px;
        margin-bottom: 60px;
        display: none;
    }

    .phone_logo img {
        width: 100%;
    }

    .navbar-p {
        width: 100%;
        height: 86px;
        background: #09005F;
        position: fixed;
        bottom: 0;
        display: none;
        z-index: 995;
    }

    .navbar-p-btn {
        margin: auto;
        margin-top: 18px;
    }

    .navbar-p-img {
        width: 30px;
        height: 30px;
        border: 1px solid #F4EDED;
        border-radius: 50%;
        text-align: center;
        vertical-align: middle;
        margin: auto;

    }

    .navbar-p-img1 {
        width: 30px;
        height: 30px;
        /* border: 1px solid #F4EDED; */
        border-radius: 50%;
        text-align: center;
        vertical-align: middle;
        margin: auto;

    }

    .icon_3 {
        width: 16px;
    }

    .icon_2 {
        width: 18px;
        padding: 0px 0px 2px 0px;
    }

    .userphoto-p {
        width: 28px;
        height: 28px;
        border-radius: 50%;
    }

    .userphoto-p img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        margin-bottom: 1px;
    }


    .navbar-p-word {
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 7px;
    }

    .right-content {
        position: relative;
    }

    @keyframes animate {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes animate1 {
        0% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(0deg);
        }


    }

    @media screen and (max-height: 650px) {
        .profile_all {
            display: none;
        }
    }

    @media screen and (max-width: 960px) {
        .kk-mate-word {
            background: linear-gradient(45deg, #F66F40, #FFD38D);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;

        }

        .ed_table {
            display: none;
        }

        .navbar-p {
            display: block;
        }

        .phone_logo {
            display: block;
        }

        .navbar-p-content {
            width: 100%;
            justify-content: space-around;
        }
    }
</style>
<!-------------------------------- pc -------------------------------->
<div class="ed_table">
    <div class="wrapall">
        <div class="table_logo">
            <a href=""><img src="imgs/matelogo-01.png" alt=""></a>
        </div>
        <div class="kk-user-photo-glow">
            <div class="user_photo btn-4">
                <a href="Member_personal-data.php"><img src="imgs/user-pic.jpg" alt="" id="userPic"></a>
            </div>

        </div>

        <p class="user_name" id="userName">Ava</p>
        <h6 class="user_age" id="userAge">28歲</h6>
        <div class="border-image">
            <!-- <p class="user_career" id="userOccupation"><?= $occupation ?></p> -->
            <p class="user_career" id="userOccupation">前端工程師</p>
        </div>

        <div class="keyword_all">
            <div class="line1">
                <h6 class="keyword" id="userHobby1">衝浪</h6>
                <h6 class="keyword" id="userHobby2">下午茶</h6>
                <h6 class="keyword" id="userHobby3">酒吧</h6>
            </div>
            <div class="line2">
                <h6 class="keyword" id="userHobby4">游泳</h6>
                <h6 class="keyword" id="userHobby5">Netflix</h6>
            </div>
        </div>

        <div class="coin_all">
            <div class="left">
                <h6 class="coinword1"> 個人金鑰</h6>
                <h6 class="coinword2" id="userTokenAmount">460 個</h6>
            </div>

            <div class="middle"></div>

            <div class="right">
                <h6 class="coinword1">配對推廣</h6>
                <h6 class="coinword3">今日熱推</h6>
            </div>

        </div>

        <div class="profile_all">
            <h5 class="pro1">個人資訊完整度</h5>
            <h6 class="pro2">快來完成更多資訊，提高配對準確度！</h6>

            <div class="progress_bar">
                <div class="finished_bar">
                    <div class="locate_all">
                        <div class="locate">
                            <img class="pin1" src="imgs/location-pin-01.png" alt="">
                            <p class="pinword">60%</p>
                        </div>
                    </div>
                    <div class="finished"></div>
                </div>
            </div>
        </div>

        <div class="nav_page_all">
            <div class="nav_page1">
                <a href="main-login.php">
                    <div class="nav_inside ">
                        <div class="nav_icon">
                            <img class="kk-nav-1" src="imgs/category-02.svg" alt="">
                            <img class="kk-nav-2" src="imgs/category-04.svg" alt="">
                        </div>
                        <h5 class="navword kk-word1 ">開始交友</h5>
                    </div>
                </a>

            </div>
            <div class="nav_page2">
                <a href="Activiy_home.php">
                    <div class="nav_inside ">
                        <div class="nav_icon">
                            <img class="kk-nav-3" src="imgs/category-01.svg" alt="">
                            <img class="kk-nav-4" src="imgs/category-03.svg" alt="">
                        </div>
                        <h5 class="navword kk-word2">參加聚會</h5>
                    </div>
                </a>

            </div>
        </div>

        <div class="bottom_all">
            <h6 class="bottomword">隱私政策｜使用者條款｜聯絡我們</h6>

        </div>


    </div>


</div>

<!-------------------------------- phone -------------------------------->
<div class="phone_logo">
    <a href=""><img src="imgs/matelogo-01.png" alt=""></a>
</div>

<div class="navbar-p">
    <div class="navbar-p-content d-flex">


        <a href="main-login.php">
            <div class="navbar-p-btn">

                <div class="navbar-p-img1">
                    <img src="imgs/category-04.svg" alt="">
                </div>
                <p class="navbar-p-word kk-mate-word">開始交友</p>

            </div>
        </a>


        <a href="Activiy_home.php">
            <div class="navbar-p-btn">

                <div class="navbar-p-img">
                    <svg class="icon_2" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.44 18.21">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #f4eded;
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M7.08,9.58A3.36,3.36,0,1,0,3.73,6.22,3.35,3.35,0,0,0,7.08,9.58Zm1.33,1.25H5.75a4.53,4.53,0,0,0-4.53,4.54.91.91,0,0,0,.91.91H12a.9.9,0,0,0,.9-.91A4.53,4.53,0,0,0,8.41,10.83Zm5.35.42H11.83a5.31,5.31,0,0,1,1.95,4.12,1.78,1.78,0,0,1-.26.91h3.61a.85.85,0,0,0,.84-.87A4.18,4.18,0,0,0,13.76,11.25ZM12.53,9.58A2.94,2.94,0,1,0,10.78,4.3a4.18,4.18,0,0,1,.49,1.92,4.11,4.11,0,0,1-.83,2.48A2.92,2.92,0,0,0,12.53,9.58Z" />
                    </svg>
                </div>
                <p class="navbar-p-word">參加聚會</p>


            </div>

        </a>


        <a href="Member_personal-data-change-password.php">
            <div class="navbar-p-btn">
                <div class="navbar-p-img">
                    <div class="userphoto-p">
                        <img src="imgs/user-pic.jpg" alt="">
                    </div>
                </div>
                <p class="navbar-p-word">會員中心</p>
            </div>
        </a>



    </div>

</div>


<script src="./scripts/jquery-3.6.0.min.js"></script>
<script>
    const $userName = $('#userName'),
        $userOccupation = $('#userOccupation'),
        $userHobby1 = $('#userHobby1'),
        $userHobby2 = $('#userHobby2'),
        $userHobby3 = $('#userHobby3'),
        $userHobby4 = $('#userHobby4'),
        $userHobby5 = $('#userHobby5'),
        $userAge = $('#userAge');


    let userName = getCookie('userName'),
        userOccupation = getCookie('userOccupation'),
        userHobby1 = getCookie('userHobby1'),
        userHobby2 = getCookie('userHobby2'),
        userHobby3 = getCookie('userHobby3'),
        userHobby4 = getCookie('userHobby4'),
        userHobby5 = getCookie('userHobby5'),
        userLocation = getCookie('userLocation'),
        userAge = getCookie('userAge');

    $(function() {
        // $userName.html(userName);
        // $userOccupation.html(userOccupation);
        // $userHobby1.html(userHobby1);
        // $userHobby2.html(userHobby2);
        // $userHobby3.html(userHobby3);
        // $userHobby4.html(userHobby4);
        // $userHobby5.html(userHobby5);
        // $userAge.html(userAge);
    });

    $('.coinword3').click(function() {
        if ($('.kk-user-photo-glow').hasClass('active')) {
            $('.kk-user-photo-glow').removeClass('active');
            $('.user_photo').removeClass('active');
            $('.coinword3').removeClass('active');
        } else {
            $('.kk-user-photo-glow').addClass('active');
            $('.user_photo').addClass('active');
            $('.coinword3').addClass('active');
        }
    })

    function getCookie(cookieName) {
        let cookie = {};
        document.cookie.split(';').forEach(function(el) {
            let [key, value] = el.split('=');
            cookie[key.trim()] = value;
        })
        return cookie[cookieName];
    }
</script>