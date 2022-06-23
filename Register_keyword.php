<?php
session_start();
$pageName = 'Register_keyword';
$title = 'Keywords';
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

    /* layout grid 75% */
    .ab-container {
        width: 75%;
        max-width: 1080px;
        margin: auto;
        /* outline: 1px solid rgb(88, 218, 18); */
    }

    /*標題＋篩選顏色提示區 */
    /* 標題 */
    .ab-title-section {
        margin-top: 158px;
        display: flex;
        flex-direction: row;

    }

    /* 篩選顏色 */
    .ab-all-rectangle {
        width: 200px;
        justify-content: center;
        justify-content: space-between;
        align-items: center;
    }

    .rectangle-1 {
        height: 16px;
        width: 60px;
        border-radius: 0px;
        background: #FAE8C6;
    }

    .rectangle-2 {
        height: 16px;
        width: 60px;
        border-radius: 0px;
        background: #FCA953;
    }

    .rectangle-3 {
        height: 16px;
        width: 60px;
        border-radius: 0px;
        background: #F6683A;
    }

    /* 關鍵字：說明文字區 */
    .ab-keyword-desc-section {
        margin: 30px 0px 20px;
    }

    .ab-keyword-desc-section p {
        margin: 10px 0;
    }




    /* 關鍵字：點選區 */
    .ab-keywords-section {
        /* outline: 1px solid rgb(22, 188, 210); */
        margin: 50px auto 50px;
        width: 80%;

    }

    .ab-row-1 {
        margin: 3%;
        width: 95%;
    }

    .ab-row-2 {
        margin: 3%;
        width: 95%;
        margin-left: 60px;
    }

    .ab-row-3 {
        margin: 3%;
        width: 95%;
        margin-left: 90px;
    }

    .ab-keyword {
        height: 29px;
        width: 89px;
        border-radius: 20px;
        padding: 0px, 21px, 10px, 21px;
        border: #F4EDED 1px solid;
        text-align: center;
        margin-right: 15px;
        cursor: pointer;
    }

    /* .ab-keyword:hover {
        color: #F4EDED;
        background: #F6683A;

    } */


    /* 下一步btn */
    /* .btn-pc-big-orange:hover,
    .btn-pc-orange:hover {
        color: #F4EDED;
        background: linear-gradient(262.71deg, #FDBC44 -19.11%, #EA3A00 125.42%);

    } */

    .btn-pc-big-orange a {
        color: #062767;
        text-decoration: none;
        outline: none;
        cursor: pointer;
    }

    /* .btn-pc-big-orange a:hover,
    .btn-pc-skip a:hover{
        color: #F4EDED;
        text-decoration: none;
        outline: none;
        cursor: pointer;
    }  */

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

    .jt-btn-keyword-next {
        cursor: pointer;
    }

    @media screen and (max-width:960px) {
        /* 手機版自己命名一個才不會重複到 */

        .ab-container {
            width: 90%;
            margin: auto;
            /* outline: 1px solid rgb(88, 218, 18); */
        }

        /* 手機版-標題 */
        .ab-phone-middle-title-20 {
            font-size: 20px;
            line-height: 21px;
            font-weight: 700;
            letter-spacing: 2.5px;
            display: block;
        }

        /* 手機版-說明文字 */
        .ab-phone-text-14 {
            font-size: 14px;
            line-height: 25px;
            font-weight: 700;
            letter-spacing: 2.5px;
            display: block;
        }

        /* 手機版-關鍵字＋顏色篩選 */
        .ab-title-section {
            margin-top: 65px;
            display: flex;
            flex-direction: column;
        }

        .ab-all-rectangle {
            margin-top: 15px;
        }

        .ab-keyword {
            display: none;
        }




    }
</style>

<?php include __DIR__ . '/parts/no-bg.php' ?>

<div class="ab-container">
    <div class="ab-title-section pc-title-32 text-pink ab-phone-middle-title-20 ">
        <div class="ab-title mr-4">關鍵字篩選</div>
        <div class="ab-all-rectangle d-flex">
            <div class="rectangle-1"></div>
            <div class="rectangle-2"></div>
            <div class="rectangle-3"></div>
        </div>
    </div>


    <div class="ab-keyword-desc-section text-pink pc-middle-title-20 ab-phone-text-14">
        <p>選擇最適合你的關鍵字!讓我們更認識你!</p>
        <p>點一下是淺黃色,點兩下是淺橘色,點三下則是深橘色哦!顏色越深代表你越喜歡哦!</p>
        <p><i class="fa-solid fa-circle-exclamation"></i> 最多只能選擇5個關鍵字。</p>
    </div>
    <div class="ab-keywords-section text-pink  ">
        <div class="ab-row-1 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-1">巧克力</div>
            <div class="ab-keyword" data-click="0" data-item="item-2">老鼠</div>
            <div class="ab-keyword" data-click="0" data-item="item-3">貓咪</div>
            <div class="ab-keyword" data-click="0" data-item="item-4">果凍</div>
            <div class="ab-keyword" data-click="0" data-item="item-5">麻辣鍋</div>
            <div class="ab-keyword" data-click="0" data-item="item-6">爬山</div>
            <div class="ab-keyword" data-click="0" data-item="item-7">滷味</div>
            <div class="ab-keyword" data-click="0" data-item="item-8">switch</div>
        </div>

        <div class="ab-row-2 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-9">下午茶</div>
            <div class="ab-keyword" data-click="0" data-item="item-10">狗勾</div>
            <div class="ab-keyword" data-click="0" data-item="item-11">打遊戲</div>
            <div class="ab-keyword" data-click="0" data-item="item-12">炸雞</div>
            <div class="ab-keyword" data-click="0" data-item="item-13">珍珠</div>
            <div class="ab-keyword" data-click="0" data-item="item-14">LOL</div>
            <div class="ab-keyword" data-click="0" data-item="item-15">咖哩飯</div>
            <div class="ab-keyword" data-click="0" data-item="item-16">素食</div>
        </div>

        <div class="ab-row-3 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-17">韓式炸雞</div>
            <div class="ab-keyword" data-click="0" data-item="item-18">湯圓</div>
            <div class="ab-keyword" data-click="0" data-item="item-19">滷肉飯</div>
            <div class="ab-keyword" data-click="0" data-item="item-20">雞湯</div>
            <div class="ab-keyword" data-click="0" data-item="item-21">布丁</div>
            <div class="ab-keyword" data-click="0" data-item="item-22">軟糖</div>
            <div class="ab-keyword" data-click="0" data-item="item-23">蛋糕</div>
        </div>

        <div class="ab-row-1 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-24">馬卡龍</div>
            <div class="ab-keyword" data-click="0" data-item="item-25">泡芙</div>
            <div class="ab-keyword" data-click="0" data-item="item-26">杯子蛋糕</div>
            <div class="ab-keyword" data-click="0" data-item="item-27">提拉米蘇</div>
            <div class="ab-keyword" data-click="0" data-item="item-28">布朗尼</div>
            <div class="ab-keyword" data-click="0" data-item="item-29">冰淇淋</div>
            <div class="ab-keyword" data-click="0" data-item="item-30">優格</div>
            <div class="ab-keyword" data-click="0" data-item="item-31">爆米花</div>
        </div>

        <div class="ab-row-2 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-32">看電影</div>
            <div class="ab-keyword" data-click="0" data-item="item-33">草莓</div>
            <div class="ab-keyword" data-click="0" data-item="item-34">夜店</div>
            <div class="ab-keyword" data-click="0" data-item="item-35">衝浪</div>
            <div class="ab-keyword" data-click="0" data-item="item-36">芒果</div>
            <div class="ab-keyword" data-click="0" data-item="item-37">酒吧</div>
            <div class="ab-keyword" data-click="0" data-item="item-38">狗勾</div>
            <div class="ab-keyword" data-click="0" data-item="item-39">貓咪</div>
        </div>

        <div class="ab-row-3 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-40">西瓜汁</div>
            <div class="ab-keyword" data-click="0" data-item="item-41">牛排</div>
            <div class="ab-keyword" data-click="0" data-item="item-42">咖啡廳</div>
            <div class="ab-keyword" data-click="0" data-item="item-43">公園</div>
            <div class="ab-keyword" data-click="0" data-item="item-44">排骨飯</div>
            <div class="ab-keyword" data-click="0" data-item="item-45">肉圓</div>
            <div class="ab-keyword" data-click="0" data-item="item-46">涼麵</div>
            <div class="ab-keyword" data-click="0" data-item="item-47">布丁</div>
        </div>

        <div class="ab-row-1 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-48">爬山</div>
            <div class="ab-keyword" data-click="0" data-item="item-49">夜市</div>
            <div class="ab-keyword" data-click="0" data-item="item-50">畫廊</div>
            <div class="ab-keyword" data-click="0" data-item="item-51">遊樂園</div>
            <div class="ab-keyword" data-click="0" data-item="item-52">西瓜</div>
            <div class="ab-keyword" data-click="0" data-item="item-53">蘋果</div>
            <div class="ab-keyword" data-click="0" data-item="item-54">烤肉</div>
            <div class="ab-keyword" data-click="0" data-item="item-55">圖書館</div>
        </div>

        <div class="ab-row-2 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-56">肌肉</div>
            <div class="ab-keyword" data-click="0" data-item="item-57">皮鞭</div>
            <div class="ab-keyword" data-click="0" data-item="item-58">游泳</div>
            <div class="ab-keyword" data-click="0" data-item="item-59">甜甜圈</div>
            <div class="ab-keyword" data-click="0" data-item="item-60">手銬</div>
            <div class="ab-keyword" data-click="0" data-item="item-61">睡覺</div>
            <div class="ab-keyword" data-click="0" data-item="item-62">旅遊</div>
            <div class="ab-keyword" data-click="0" data-item="item-63">法式餐廳</div>
        </div>

        <div class="ab-row-1 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-64">高爾夫球</div>
            <div class="ab-keyword" data-click="0" data-item="item-65">衝浪</div>
            <div class="ab-keyword" data-click="0" data-item="item-66">動畫</div>
            <div class="ab-keyword" data-click="0" data-item="item-67">健身</div>
            <div class="ab-keyword" data-click="0" data-item="item-68">皮鞭</div>
            <div class="ab-keyword" data-click="0" data-item="item-69">魔術</div>
            <div class="ab-keyword" data-click="0" data-item="item-70">廚房</div>
            <div class="ab-keyword" data-click="0" data-item="item-71">莎莎</div>
        </div>

        <div class="ab-row-2 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-72">Netflix</div>
            <div class="ab-keyword" data-click="0" data-item="item-73">領帶</div>
            <div class="ab-keyword" data-click="0" data-item="item-74">貓咪</div>
            <div class="ab-keyword" data-click="0" data-item="item-75">羽毛</div>
            <div class="ab-keyword" data-click="0" data-item="item-76">西裝控</div>
            <div class="ab-keyword" data-click="0" data-item="item-77">酒吧</div>
            <div class="ab-keyword" data-click="0" data-item="item-78">聽音樂</div>

        </div>

        <div class="ab-row-1 d-flex">
            <div class="ab-keyword" data-click="0" data-item="item-79">阿宅</div>
            <div class="ab-keyword" data-click="0" data-item="item-80">可樂</div>
            <div class="ab-keyword" data-click="0" data-item="item-81">珍珠奶茶</div>
            <div class="ab-keyword" data-click="0" data-item="item-82">美術館</div>
            <div class="ab-keyword" data-click="0" data-item="item-83">踏青</div>
            <div class="ab-keyword" data-click="0" data-item="item-84">野餐</div>
            <div class="ab-keyword" data-click="0" data-item="item-85">貓咪</div>
            <div class="ab-keyword" data-click="0" data-item="item-86">爬山</div>
        </div>


    </div>

    <div class="btn-pc-big-orange jt-btn-keyword-next">下一步 (2/5)</div>
    <div class="btn-pc-skip">
        <a href="Register_psychological test animation.php">略過</a><br>
    </div>



</div>

<!-- ________________ js_______________ -->
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/scripts-lightbox.php' ?>
<script>
    $(function() {
        if (mateKeyword !== undefined) {
            splitToArray(mateKeyword);
            selectCount = userSelect.length;
            setSelected();
        }

        function splitToArray(mateKeyword) {
            userSelect = mateKeyword.split(' ');
        }

        function setSelected() {
            userSelect.forEach(function(item) {
                const ary = item.split(':'),
                    key = ary[0],
                    value = ary[1];

                $keyword.each(function() {
                    const $this = $(this),
                        $item = $this.data('item');

                    if (key === $item) {
                        $this.attr('data-click', value);
                        items.push(key);

                        setKeywordColor($this, value);
                        return false;
                    }
                });
            });
        }
    });

    const $keyword = $('.ab-keyword'),
        $btnNext = $('.jt-btn-keyword-next'),
        mateKeyword = getCookie('mateKeyword');

    let selectCount = 0,
        items = [],
        userSelect;

    $keyword.on('click', function() {
        const $this = $(this),
            $item = $this.attr('data-item');
        let $clickCount = $this.attr('data-click');

        if (items.length >= 5 && !items.includes($item)) {
            alert('只能選 5 個');
            return;
        }

        if (compare($item)) {
            selectCount++;
        }

        if ($clickCount < 3) {

            $clickCount++;
            $this.attr('data-click', $clickCount);
            setKeywordColor($this, $clickCount);

        } else {
            $clickCount = 0;
            $this.attr('data-click', $clickCount);
            $this.css('background-color', 'transparent');
            $this.css('color', '#F4EDED');
            selectCount--;
            remove($item);
        }
    });

    $btnNext.on('click', function() {
        let keywordStr = '',
            keywordNameStr = '';
        $keyword.each(function() {
            const $this = $(this),
                $click = $this.data('click');

            if ($click !== 0) {
                const $item = $this.data('item'),
                    $name = $this.text();
                keywordStr += $item + ':' + $click + ' ';
                keywordNameStr += $name + ':' + $click + ' ';
            }
        });

        // Todo: should 將選項存進資料庫
        setCookie('mateKeyword', keywordStr);
        setCookie('mateKeywordName', keywordNameStr);
        window.location = './Register_keyword-report.php';
    });

    function compare(item) {
        if (!items.includes(item)) {
            items.push(item);
            return true;
        }
        return false;
    }

    function remove(item) {
        if (items.includes(item)) {
            const index = items.indexOf(item);
            if (index > -1) {
                items.splice(index, 1);
            }
        }
    }

    function setKeywordColor($item, click) {
        click = '' + click;

        switch (click) {
            case "1":
                // 淺黃色
                $item.css('background-color', '#FAE8C6');
                $item.css('color', '#240173');
                break;
            case "2":
                // 淺橘色
                $item.css('background-color', '#FCA953');
                $item.css('color', '#240173');
                break;
            case "3":
                // 深橘色
                $item.css('background-color', '#F6683A');
                $item.css('color', '#240173');
                break;
            default:
                $item.css('background-color', 'transparent');
                $item.css('color', '#240173');
        }
    }

    function setCookie(key, value) {
        document.cookie = key + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        document.cookie = key + "=" + value.trim();
    }
</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>