<?php
session_start();
$pageName = 'index';
$title = 'Mate';
?>

<?php include __DIR__ . '/parts/html-head.php' ?>

<!-- 5/18 會員中心_付款收據地址 (進度99%) -->


<style>
    * {
        /* outline: #FF9933 1px solid; */
        /* background-color: #240173; */
    }

    body {
        min-width: 375px;
    }

    div,
    p {
        margin-bottom: 0px;
    }

    .page {
        width: 100%;
        height: 100%;
    }

    .left-nav {
        width: 316px;
        min-width: 316px;
        height: 100vh;
    }

    /* 殘障框 */
    .content {
        width: 80%;
        max-width: 904px;
        margin-top: 110px;
        /*待討論*/
        overflow: hidden;
        /* outline: 4px solid #ffff93; */
    }

    .content1 {
        display: none;
        width: 80%;
        max-width: 904px;
        background-color: #240173;
        overflow: hidden;
        margin-top: 34px;
    }

    .jt-title {
        margin-bottom: 116px;
    }

    .pc-title-32 {
        font-size: 32px;
        line-height: 48px;
        font-weight: 700;
        letter-spacing: 2.5px;
    }



    /* 下半部-content區(左邊信用卡+右邊收據地址)  */
    .jt-payment-combo {
        width: 100%;
        justify-content: space-between;
        margin-top: 50px;
        position: relative;
        /* outline: #bbffbb solid 5px; */
    }

    .jt-payment-left {
        width: 404px;
        height: 417px;
        background-image: url(./imgs/card-area.png);
        align-items: center;
        padding-top: 21px;
        /* outline: #ffffce solid 5px; */
    }


    .jt-payment-right {
        width: 443px;
        height: 660px;
        /* outline: #b766ad solid 1px; */
    }

    .jt-card-info {
        margin: 37px;
        justify-content: space-between;
    }

    .jt-card-pay {
        padding-right: 30px;
    }

    .jt-card-figure {
        width: 363px;
        height: 216px;
        background-image: url(./imgs/card.png);
        margin: auto;
    }

    /* 信用卡資料與收據地址的mb:42px */
    .jt-receipt-address,
    .jt-credit-card {
        margin-bottom: 42px;
    }

    .jt-payment-combo-right {
        /* position: relative; */
        /* outline: 3px solid #ff00d2; */
    }

    .jt-pay {
        position: absolute;
        bottom: 90px;
        right: 0;
    }

    .jt-form-data {
        margin-bottom: 27px;
        /* outline: #00D9EC solid 3px; */
    }

    input[type=text],
    input[type=select] {
        background: transparent;
        border: none;
        /* border-bottom: 1px solid #ffffffc1; */
    }

    .jt-address-textbox {
        outline: 0;
        border: none;
        border-bottom: 1px solid #ffffffc1;
    }

    .jt-policy {
        width: 444px;
        height: 74px;
        background-image: url(./imgs/read-already.png);
        padding-top: 13px;
        justify-content: space-between;
    }

    .jt-space {
        height: 100px;
    }

    .jt-agree {
        padding-left: 20px;
    }

    .jt-edit-card {
        cursor: pointer;
        width: 19px;
        height: 19px;
    }

    .jt-polity-content {
        padding: 0 14px;
    }

    .jt-card-content {
        padding: 19px 18px 23px 23px;
        display: grid;
        grid-template-rows: 1fr 2fr 1fr;
    }

    .jt-visa {
        width: 40px;
        height: 40px;
        background-image: url(./imgs/cib_cc-visa.png);
    }

    .jt-card-figure-info {
        justify-content: space-between;

    }

    .jt-mate-card {
        width: 119px;
        height: 27px;
        background-image: url(./imgs/matelogo-credit-card.png);
        margin-left: auto;
    }

    .jt-card-number {
        margin-top: auto;
    }

    .jt-txt-card {
        padding-top: 12px;
    }

    .pc-middle-title-20,
    .pc-regular-text-16,
    .pc-small-title-16,
    .pc-tag-12,
    .pc-hint-14,
    .kk-small-title,
    .pc-title-32,
    .jt-address-titlepc-small-title-16,
    a{
        color: #F4EDED;
    }









    /* ----------------------------- */

    /* 下半部-content區(右邊資料欄位區) */
    /* ab-personal-wrap是包含個人資料欄位＋scroll bar  */

    .ab-personal-wrap {
        /* outline: #ffd2d2 1px solid; */
        width: 50%;
        /* margin: auto; */
        display: flex;

    }

    .ab-personaldata-section {
        width: 100%;
        margin: auto;
    }

    /* 下拉式選單區的css */
    /* ------------------------------- */
    .ab-adropdown {
        margin: 15px;
    }

    /* scrollbar還沒做完 -要用fix & scroll */
    .kk-scrollbar-all {
        height: 520px;
        width: 2px;
        background-color: rgba(255, 255, 255, 0.48);
        margin-left: 42px;
        margin-right: 42px;
        margin-top: 42px;
        position: relative;
    }

    .kk-scroll-ball {
        width: 9px;
        height: 31px;
        border-radius: 10px;
        background-color: #F4EDED;
        position: absolute;
        top: 0;
        left: -4.5px;
    }

    /* select選擇器不用➕點 (這是主欄位) (pc-hint)*/
    select {
        width: 100%;
        height: 35px;
        /* padding-left: 10px; */
         /* text-hint提示字 */
        color: #AFAFAF;
        background: transparent;
        /* outline: none; */
        border: transparent;
        border-bottom: solid 1px #F4EDED;
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 2.5px;
        font-weight: 700;
    }

    /* 下拉式選單裡的option*/
    select option {
        background: #664D9D;
        color: #F4EDED;
        outline: none;
        border: none;
        z-index: -2;
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 2.5px;
        font-weight: 700;
    }

    /* 上網查到改變placeholder(選項提示字）的用法 */
    ::-webkit-input-placeholder {
        /* Chrome, Safari */
        /* pc-hint */
        color: #AFAFAF;
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 2.5px;
        font-weight: 700;
    }




    /* ----------------------------- */
    /* on fire css區 */
    .text-hint p {
        margin: 0;
        border-bottom: solid 1px #F4EDED;
        width: 100%;
        /* padding-left: 10px; */
    }
    .ab-btn-margin {
        margin: auto;
        margin-top: 67px;
    }

   
</style>


<?php include __DIR__ . '/parts/general-bg.php' ?>
<?php include __DIR__ . '/parts/navbar-user.php' ?>

<div class="page d-flex ">
<div class="gg-blur"></div>
    <!-- 儲存btn(複製LB-lightbox整個div ，id 內容自己修改) -->
    <div class="LB-lightbox " id="btn2">
        <div class="LB-lightbox1">
            <div class="LB-close_btn"></div>
            <div class="LB-section d-flex justify-content-between flex-column">
                <div class="LB-title d-flex pc-title-32 justify-content-center LB-ttitle">
                    <div class="LB-left text-linear-orange mr-2">&lt;</div>
                    <p class="text-pink">儲存成功</p>
                    <div class="LB-right text-linear-orange ml-2">&gt;</div>
                </div>
                <div class="LB-content align-items-center d-flex flex-column pc-small-title-16 LB-text">
                    <p class="text-pink ">您的信用卡資料已儲存。</p>
                    <p class="text-pink ">為你的愛情旅程加值吧！</p>
                </div>
                <!-- 這裡幫按鈕加個href (style="cursor: pointer;" onclick="window.location='./main-login.php';")-->
                <div class="d-flex justify-content-center">
                    <div class="btn-pc-orange LB-btn" style="cursor: pointer;" onclick="window.location='./Purchase_subscribe.php';">前往加值</div>
                </div>
            </div>
        </div>
    </div>
    <div class="left-nav"></div>
    <div class="right-content flex-grow-1 d-flex justify-content-center">
        <!-- 殘障框  -->
        <div class="content mb-5">
            <!--  上半部-個人資料標題 -->
            <div class="title justiy-content-between jt-title">
                <p class="pc-title-32 text-pink">付款方式</p>
            </div>

            <!-- 下半部-content-section(左邊信用卡＋右邊資料欄位）-->
            <div class="jt-payment-combo d-flex">
                <div class="jt-payment-combo-left">
                    <div class="jt-credit-card pc-middle-title-20">信用卡資料</div>
                    <div class="jt-payment-left">
                        <div class="jt-card-info pc-middle-title-16 d-flex">
                            <div>
                                <img src="./imgs/credit-card.png" alt="">
                            </div>
                            <div class="jt-card-pay">
                                <div class="jt-card-holder pc-small-title-16">
                                    <span>持卡人姓名&nbsp;&nbsp;:&nbsp;&nbsp;</span><span>Rita Lin</span>
                                </div>
                                <div class="jt-lastfourdigit pc-small-title-16">
                                    <span>後四碼&nbsp;&nbsp;:&nbsp;&nbsp;</span><span>9487</span>
                                </div>
                                <div class="jt-expiry pc-small-title-16">
                                    <span>到期日&nbsp;&nbsp;:&nbsp;&nbsp;</span><span>11/11</span>
                                </div>
                            </div>
                            <div class="jt-edit-card">
                                <a href="Member_payment_credit card.php">
                                <img src="./imgs/edit-3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="jt-card-figure">
                            <div class="jt-card-content pc-hint-14">
                                <div class="jt-mate-card"></div>
                                <div class="jt-card-number">
                                    <p>xxxx&nbsp;&nbsp;&nbsp;&nbsp;xxxx&nbsp;&nbsp;&nbsp;&nbsp;xxxx&nbsp;&nbsp;&nbsp;&nbsp;9487</p>
                                </div>
                                <div class="jt-card-figure-info d-flex">
                                    <div class="jt-txt-card">Rita Lin</div>
                                    <div class="jt-txt-card">11/11</div>
                                    <div class="jt-visa"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- ab-personal-wrap是右邊的個人信用卡資料欄位 -->
                <div class="ab-personal-wrap">
                    <div class="jt-payment-combo-right">
                        <div class="jt-receipt-address pc-middle-title-20">收據地址</div>
                        <div class="jt-payment-right">
                            <div class="jt-form-data">
                                <div class="jt-address-title pc-small-title-16">
                                    <label for="FullName">姓名</label>
                                </div>
                                <div class="jt-address-textbox pc-small-title-16">
                                    <input class="text-pink " type="text" style="width:100%" id="jt-fullName" name="FullName" placeholder="請填寫姓名">
                                </div>
                            </div>

                            <div class="jt-form-data">
                                <div class="jt-address-title pc-small-title-16">
                                    <label for="Nation">國家</label>
                                </div>
                                <select id="jt-nation" name="Nation">
                                    <option value="usa">Taiwan</option>
                                    <option value="uae">HongKong</option>
                                    <option value="jp">Japan</option>
                                    <option value="kr">Korean</option>
                                    <option value="usa">USA</option>
                                    <option value="au">AU</option>
                                    <option value="cn">China</option>
                                    <option value="uk">UK</option>
                                    
                                </select>
                            </div>

                            <div class="jt-form-data">
                                <div class="jt-address-titlepc-small-title-16">
                                    <label for="City">城市</label>
                                </div>
                                <select id="jt-city" name="City">
                                    <option value="tpe">Taipei</option>
                                    <option value="TXG">Taichung</option>
                                    <option value="KHH">Kaohsiung</option>
                                    <option value="TYN">Taoyuan</option>
                                    <option value="sn">Tokyo</option>
                                    <option value="sn">Seoul</option>
                                    <option value="sn">Washington, D.C.</option>
                                    <option value="sn">Sydney</option>
                                    <option value="uk">London</option>
                                </select>
                            </div>

                            <div class="jt-form-data">
                                <div class="jt-address-title pc-small-title-16">
                                    <label for="District">區</label>
                                </div>
                                <div class="jt-address-textbox pc-small-title-16">
                                    <input class="text-pink" type="text" style="width:100%" type="text" id="jt-district" name="District" placeholder="填寫區">
                                </div>
                            </div>

                            <div class="jt-form-data">
                                <div class="jt-address-title pc-small-title-16">
                                    <label for="Address">地址</label>
                                </div>
                                <div class="jt-address-textbox pc-small-title-16">
                                    <input class="text-pink " type="text" style="width:100%" type="text" id="jt-address" name="Address" placeholder="請填寫詳細地址">
                                </div>
                            </div>

                            <div class="jt-form-data">
                                <div class="jt-address-title pc-small-title-16">
                                    <label for="PostCode">郵遞區號</label>
                                </div>
                                <div class="jt-address-textbox pc-small-title-16">
                                    <input class="text-pink " type="text" style="width:100%" type="text" id="jt-postCode" name="PostCode" placeholder="請輸入郵遞區號">
                                </div>
                            </div>

                            <div class="btn-pc-big-orange ab-btn-margin" id="save-me">儲存</div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/parts/scripts-bg-navbar-user.php' ?>
<?php include __DIR__ . '/parts/scripts-lightbox.php' ?>
<script>
       //第一個鈕 改鈕的id和lightbox的id
       $('#save-me').click(function() {
        console.log(this, '1');
        $('#btn2').addClass('active');
        $('.gg-blur').css('display', 'block');
    })

    // 關掉lightbox
    $('.LB-close_btn').click(function() {
        // closelightbox();
        $('.gg-blur').css('display', 'none');
        $('.LB-lightbox').removeClass('active');
    })
</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>