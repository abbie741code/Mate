<?php
require './parts/connect-db.php';
$pageName = 'navbar';
$title = 'Mate';


    $id = is_null($_SESSION['user']['id']) ? "user id" : $_SESSION['user']['id'];
    $email = is_null($_SESSION['user']['email']) ? "user email" : $_SESSION['user']['email'];
    $nickname = is_null($_SESSION['user']['nickname']) ? "user nickname" : $_SESSION['user']['nickname'];
    $age = is_null($_SESSION['user']['age']) ? "user age" : $_SESSION['user']['age'];
    $occupation  = is_null($_SESSION['user']['occupation']) ? "user occupation" : $_SESSION['user']['occupation'];

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
        z-index: 996;
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
        margin: auto;
    }

    .user_photo img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .kk-user-photo-glow {
        width: 90px;
        height: 90px;
        color: #f4eded00;
        border-radius: 50%;
        margin: auto;
        margin-top: 49px;
        z-index: 998;
        padding: 5px;
    }

    .kk-user-photo-glow:hover {
        background: linear-gradient(45deg, #F66F40, #FFD38D);
    }


    .user_name {
        margin: auto;
        text-align: center;
        font-weight: 700;
        font-size: 20px;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 26px;
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
    }

    .coinword3:hover {
        color: #F4EDED;
        background: linear-gradient(262.71deg, #FDBC44 -19.11%, #EA3A00 125.42%);
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
        width: 130px;
        height: 8px;
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        border-radius: 8px;
    }

    .locate_all {
        position: absolute;
        left: 115px;
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
    }


    .kk-nav-1 {
        display: none;
    }

    .kk-nav-2 {
        margin-top: 2px;
        display: block;
    }

    .kk-nav-4 {
        display: none;
    }

    .nav_page2 {
        margin-top: 2px;
        display: block;
    }




    .nav_page2 {
        border: 1px solid #F4EDED;
        border-left: none;
        border-right: none;
        border-top: none;
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

    .kk-word1 {
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
    }

    .nav_icon {
        width: 25px;
        margin-right: 20px;
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
        width: 100vw;
    }


    @media screen and (max-height: 650px) {
        .profile_all {
            display: none;
        }
    }

    @media screen and (max-width: 960px) {
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
                <a href="Member_personal-data-3.php"><img src="imgs/user-pic.jpg" alt=""></a>
            </div>

        </div>

        <p class="user_name">Ava</p>
        <h6 class="user_age">28歲</h6>
        <div class="border-image">
            <p class="user_career">前端工程師</p>
        </div>

        <div class="keyword_all">
            <div class="line1">
                <h6 class="keyword">衝浪</h6>
                <h6 class="keyword">下午茶</h6>
                <h6 class="keyword">酒吧</h6>
            </div>
            <div class="line2">
                <h6 class="keyword">游泳</h6>
                <h6 class="keyword">Netflix</h6>
            </div>
        </div>

        <div class="coin_all">
            <div class="left">
                <h6 class="coinword1"> 個人金鑰</h6>
                <h6 class="coinword2">460 個</h6>
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
                            <p class="pinword">72%</p>
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
                        <h5 class="navword kk-word1">開始交友</h5>
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

<!-------------------------------- phone ------------------------------->
<div class="phone_logo">
    <a href=""><img src="imgs/matelogo-01.png" alt=""></a>
</div>

<div class="navbar-p">
    <div class="navbar-p-content d-flex">


        <a href="main-login.php">
            <div class="navbar-p-btn">

                <div class="navbar-p-img">
                    <svg class="icon_3" data-name="icon3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.28 34.14">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #f4eded;
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M.14,13v-.34A8.38,8.38,0,0,1,14.44,6.7l.7.7.65-.7a8.5,8.5,0,0,1,7.36-2.34,8.37,8.37,0,0,1,7,8.26V13a8.75,8.75,0,0,1-2.79,6.41L16.77,29.26a2.38,2.38,0,0,1-3.25,0L2.93,19.37A8.75,8.75,0,0,1,.14,13Z" />
                    </svg>
                </div>
                <p class="navbar-p-word">開始交友</p>

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
                        <img src="imgs/user-photo.png" alt="">
                    </div>
                </div>
                <p class="navbar-p-word">會員中心</p>
            </div>
        </a>



    </div>

</div>



<script>

</script>