<style>
    /* * {
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
        top: 50%;
        left: 50%;
    }

    .user_photo img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .coin_all {
        display: flex;
        border: 1px solid #F4EDED;
        border-left: none;
        border-right: none;
        width: 73%;
        margin: auto;
        margin-top: 33px;
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

    .category_all {
        width: 71%;
        margin: auto;
        margin-top: 24px;
    }

    .category_word {
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        /* line-height: 30px; */
        letter-spacing: 2.5px;
        margin-bottom: 20px;
        color: #F4EDED;
        cursor: pointer;
        z-index: 999;
    }

    .arrowleft_all {
        position: fixed;
        bottom: 68px;
        left: 50px;
        width: 30px;
        height: 30px;

    }

    .arrow_all {
        position: relative;
        width: 30px;
        height: 30px;
    }

    .arrowleft1 {
        position: absolute;
        left: 0;
        top: 0;
        width: 15px;
        height: 15px;
    }

    .circle {
        border: 1px solid #F4EDED;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        position: absolute;
    }

    .arrow1 {
        position: absolute;
        top: 6px;
        left: 7px;
    }

    .logout_all {
        position: fixed;
        bottom: 68px;
        left: 225px;
    }

    .logouticon {
        position: relative;
    }

    .underline {
        position: absolute;
        top: 22px;
        width: 36px;
        border: 1px solid #C0BFBF;
        border-left: none;
        border-right: none;
        border-top: none;

    }

    .logout_word {
        font-weight: 700;
        font-size: 16px;
        letter-spacing: 2.5px;
        color: #C0BFBF;
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

    .category-option0,
    .category-option1,
    .category-option2,
    .category-option3,
    .category-option4,
    .category-option5,
    .category-option6,
    .category-option7 {
        position: relative;
    }


    .option-me0,
    .option-me1,
    .option-me2,
    .option-me3,
    .option-me4,
    .option-me5,
    .option-me6,
    .option-me7 {
        position: absolute;
        top: -8px;
        left: -10px;
        display: none;
    }

    .option-click {
        width: 257px;
        height: 35px;
        background-color: rgba(196, 196, 196, 0.26);
        position: relative;
    }

    .option-orange {
        width: 5px;
        height: 35px;
        background: linear-gradient(262.71deg, #FDBC44 -19.11%, #EA3A00 125.42%);
        position: absolute;
        right: 0;
    }

    .jt-btnMenu {
        cursor: pointer;
    }

    /* <!-------------------------------- phone --------------------------------> */

    .phone_logo {
        width: 102px;
        height: 24px;
        margin: auto;
        margin-top: 34px;
        margin-bottom: 35px;
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

    .kk-user-photo-glow {
        width: 90px;
        height: 90px;
        margin: auto;
        margin-top: 49px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 7;
        border-radius: 50%;
    }

    .kk-user-photo-glow:hover {
        background: linear-gradient(45deg, #F66F40, #FFD38D);
    }

    .right-content {
        position: relative;
    }

    @media screen and (max-height: 950px) {
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


<div class="ed_table">
    <div class="wrapall">
        <div class="table_logo">
            <a href="main-login.php"><img src="imgs/matelogo-01.png" alt=""></a>
        </div>

        <div class="kk-user-photo-glow">
            <div class="user_photo btn-4">
                <a href="main-login.php"><img src="imgs/user-pic.jpg" alt=""></a>
            </div>

        </div>

        <div class="coin_all">
            <div class="left">
                <h6 class="coinword1"> 個人金鑰</h6>
                <h6 class="coinword2">440 個</h6>
            </div>

            <div class="middle"></div>

            <div class="right">
                <h6 class="coinword1">配對推廣</h6>
                <h6 class="coinword3">今日熱推</h6>
            </div>

        </div>

        <div class="category_all">
            <div class="category-option1 jt-btnMenu" data-url="Member_personal-data.php">
                <h5 class="category_word">基本資料</h5>
                <div class="option-me1">
                    <div class="option-click">
                        <div class="option-orange"></div>
                    </div>
                </div>
            </div>

            <div class="category-option0 jt-btnMenu" data-url="Member_personal-data-change-password.php">
                <h5 class="category_word">我的帳號</h5>
                <div class="option-me0">
                    <div class="option-click">
                        <div class="option-orange"></div>
                    </div>
                </div>
            </div>

            <div class="category-option2 jt-btnMenu" data-url="Member_payment_address.php">
                <h5 class="category_word">付款方式</h5>
                <div class="option-me2">
                    <div class="option-click">
                        <div class="option-orange"></div>
                    </div>
                </div>
            </div>

            <div class="category-option3 jt-btnMenu" data-url="Account_purchase_history.php">
                <h5 class="category_word">訂單及金鑰</h5>
                <div class="option-me3">
                    <div class="option-click">
                        <div class="option-orange"></div>
                    </div>
                </div>
            </div>

            <div class="category-option4 jt-btnMenu" data-url="Account_follow.php">
                <h5 class="category_word">關注對象</h5>
                <div class="option-me4">
                    <div class="option-click">
                        <div class="option-orange"></div>
                    </div>
                </div>
            </div>

            <div class="category-option5 jt-btnMenu" data-url="Account_date_history.php">
                <h5 class="category_word">約會管理</h5>
                <div class="option-me5">
                    <div class="option-click">
                        <div class="option-orange"></div>
                    </div>
                </div>
            </div>

            <div class="category-option6 jt-btnMenu" data-url="Account_activity_history.php">
                <h5 class="category_word">聚會管理</h5>
                <div class="option-me6">
                    <div class="option-click">
                        <div class="option-orange"></div>
                    </div>
                </div>
            </div>

            <div class="category-option7 jt-btnMenu" data-url="Account_date_personaldata.php">
                <h5 class="category_word">個人分析</h5>
                <div class="option-me7">
                    <div class="option-click">
                        <div class="option-orange"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="arrowleft_all" data-url="main-login.php">
            <div class="arrowleft1">
                <a href="main-login.php" class="arrow_all">
                    <div class="circle"></div>
                    <i class="fa-solid fa-arrow-left arrow1" style="color: white;"></i>
                </a>
            </div>
        </div>

        <div class="logout_all" data-url="main.php">
            <a href="main.php" class="logouticon">
                <div class="underline"></div>
                <h5 class="logout_word" href="logout.php">登出</h5>
            </a>
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