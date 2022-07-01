<?php
session_start();
$pageName = 'index';
$title = 'Mate';
?>

<?php include __DIR__ . '/parts/html-head.php' ?>

<!-- 5/20 會員中心_付款方式：信用卡 -->


<style>
    * {
        /* outline: #FF9933 1px solid; */
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
        /* overflow: hidden; */
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
        margin-bottom: 109px;
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
        width: 290px;
        height: 360px;
        align-items: center;
        /* outline: #f1e1ff solid 5px; */

    }


    .jt-payment-right {
        width: 363px;
        height: 261px;
        /* outline: #b766ad solid 5px; */
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
        margin: auto
    }

    /* 信用卡資料與收據地址的mb:42px */
    .jt-receipt-address,
    .jt-credit-card {
        margin-bottom: 26px;
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
    .pc-title-32
    {
        color: #F4EDED;
    }

    a{
        color: #240173;
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
        padding-left: 10px;
        color: #F4EDED;
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

    ::-webkit-input-placeholder {
        /* Chrome, Safari */
        /* pc-hint */
        color: #AFAFAF;
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 2.5px;
        font-weight: 700;
    }

    .ab-btn-margin {
        margin: auto;
        margin-top: 150px;
        margin-bottom: 150px;
    }


    /* ----------------------------- */
    /* on fire css區 */
    .pc-small-title-16 {
        font-size: 20px;
        line-height: 32px;
        font-weight: 700;
        letter-spacing: 2.5px;
    }

    .pc-small-title-16 p {
        margin: 0;
    }

    .text-pink {
        color: #F4EDED;
    }

    .pc-hint-14 {
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 2.5px;
        font-weight: 700;
    }

    .text-hint {
        color: #AFAFAF;
    }

    .text-hint p {
        margin: 0;
        border-bottom: solid 1px #F4EDED;
        width: 100%;
        /* padding-left: 10px; */

    }

    .pc-small-title-16 {
        font-size: 16px;
        line-height: 30px;
        letter-spacing: 2.5px;
        font-weight: 700;
    }

    .btn-pc-orange {
        width: max-content;
        padding: 3px 22px;
        border-radius: 20px;
        height: 30px;
        color: #240173;
        background: linear-gradient(226.02deg, #FFDA93 4.21%, #F56638 99.47%);
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 2.5px;
        font-weight: 700;
        margin: auto;

    }

    .ab-btn-margin a:hover {
        color: #F4EDED;
        text-decoration: none;
        outline: none;
        cursor: pointer;

    }

    .btn-pc-big-orange:hover,
    .btn-pc-orange:hover,
    .btn-phone-orange:hover,
    .btn-phone-big-orange:hover {
        color: #F4EDED;
        background: linear-gradient(262.71deg, #FDBC44 -19.11%, #EA3A00 125.42%);
        text-decoration: none;
        outline: none;
        cursor: pointer;

    }

    .btn-pc-big-white:hover,
    .btn-pc-white:hover,
    .btn-phone-white:hover,
    .btn-phone-big-white:hover,
    .btn-pc-sign-white:hover,
    .btn-phone-sign-white:hover {
        background: #AFAFAF;
    }
</style>


<?php include __DIR__ . '/parts/general-bg.php' ?>
<?php include __DIR__ . '/parts/navbar-user.php' ?>

<div class="page d-flex ">
    <div class="left-nav"></div>
    <div class="right-content flex-grow-1 d-flex justify-content-center">
        <!-- 殘障框  -->
        <div class="content">
            <!--  上半部-個人資料標題 -->
            <div class="title justiy-content-between jt-title">
                <p class="pc-title-32 text-pink">付款方式</p>
            </div>

            <!-- 下半部-content-section(左邊資料欄位＋右邊信用卡）-->
            <div class="jt-payment-combo d-flex justify-content-between">
                <div class="jt-payment-combo-left">
                    <div class="jt-credit-card pc-middle-title-20">信用卡資料</div>
                    <div class="jt-payment-left">
                        <div class="jt-form-data">
                            <div class="jt-address-title pc-small-title-16">
                                <label for="Full-Name">持卡人姓名</label>
                            </div>
                            <div class="jt-address-textbox pc-small-title-16">
                                <input class="text-pink userkeyup3" type="text" style="width:100%" style="width:100%" id="jt-fullName" name="FullName" placeholder="請填寫持卡人姓名">
                            </div>
                        </div>
                        <div class="jt-form-data">
                            <div class="jt-address-title pc-small-title-16">
                                <label for="Card-Number">信用卡卡號</label>
                            </div>
                            <div class="jt-address-textbox pc-small-title-16 ">
                                <input class="text-pink  userkeyup" type="text" style="width:100%" id="Card-Number" name="CardId" maxlength="20" placeholder="xxxx xxxx xxxx xxxx">
                            </div>
                        </div>
                        <div class="jt-form-data">
                            <div class="jt-address-title pc-small-title-16">
                                <label for="Check-Number">檢核碼</label>
                            </div>
                            <div class="jt-address-textbox pc-middle-title-16 ">
                                <input class="text-pink" type="text" style="width:100%" id="jt-fullName" name="CheckNum" maxlength="3" placeholder="請填寫檢核碼共3碼">
                            </div>
                        </div>
                        <div class="jt-form-data">
                            <div class="jt-address-title pc-small-title-16">
                                <label for="Expired-Date">到期日</label>
                            </div>
                            <div class="jt-address-textbox pc-small-title-16 ">
                                <input class="text-pink  userkeyup2" type="text" style="width:100%" id="jt-fullName" name="EndDate" maxlength="5" placeholder="請填寫到期月份/年份">
                            </div>
                        </div>
                    </div>
                </div>



                <!-- ab-personal-wrap是右邊的個人信用卡資料欄位 -->
                <div class="ab-personal-wrap justify-content-center">
                    <div class="jt-payment-combo-right">
                        <div class="jt-credit-card pc-middle-title-20"></div>
                        <div class="jt-payment-right">
                            <div class="jt-card-figure">
                                <div class="jt-card-content pc-hint-14">
                                    <div class="jt-mate-card"></div>
                                    <div class="jt-card-number CardNumber">
                                        <p>xxxx&nbsp;&nbsp;&nbsp;&nbsp;xxxx&nbsp;&nbsp;&nbsp;&nbsp;xxxx&nbsp;&nbsp;&nbsp;&nbsp;9487</p>
                                    </div>
                                    <div class="jt-card-figure-info d-flex">
                                        <div class="jt-txt-card HolderName">Full name</div>
                                        <div class="jt-txt-card ExpiredDate">xx/xx</div>
                                        <div class="jt-visa"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-pc-big-orange ab-btn-margin"><a href="Member_payment_address.php ">儲存</a></div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/parts/scripts-bg-navbar-user.php' ?>
<?php include __DIR__ . '/parts/scripts-lightbox.php' ?>

<script>
    //  範例參考 
    // $('.kk-toptop').click(function() {
    //     var thetext = $('.annou').val();
    //     var currentTime = new Date();
    //     result = currentTime.toLocaleString();
    //     $('.dtime').text(result);
    //     $('.announce').text(thetext);
    //     $('.gg-line').css('display', 'block');
    // })
</script>

<!-- 信用卡同步顯現功能 -->
<script>
    $("input[name=FullName]").keyup(function() {
        $('.HolderName').text($(this).val());
    });

    $("input[name=CardId]").keyup(function() {
        $('.CardNumber').text($(this).val());
    });

    $("input[name=EndDate]").keyup(function() {
        $('.ExpiredDate').text($(this).val());
    });
    /*
    $("input").keyup(function() {
        console.log(this, '1');
        var CreditcardNumber = $('.userkeyup').val();
        var CreditcardDate = $('.userkeyup2').val();
        var CreditcardName = $('.userkeyup3').val();

        $('.CardNumber').text(CreditcardNumber);
        $('.ExpiredDate').text(CreditcardDate);
        $('.HolderName').text(CreditcardName);
    })
    */
</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>