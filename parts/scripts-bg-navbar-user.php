<script src="./scripts/jquery-3.6.0.min.js"></script>
<script src="./thirdparty/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="./scripts/amazing-bg.js"></script>
<script src="./scripts/mate.js"></script>

<script>
    const $menu = $('.jt-btnMenu');

    $menu.on('click', function() {
        const $this = $(this),
            url = $this.data('url');

        window.location.href = '../source/' + url;
    });
    // _______________選項hover會有動態＿＿＿＿＿＿＿＿＿

    $(".category-option0").mouseenter(function() {
        $('.option-me0').css('display', 'block')
    });

    $(".category-option0").mouseleave(function() {
        $('.option-me0').css('display', 'none')
    });

    $(".category-option1").mouseenter(function() {
        $('.option-me1').css('display', 'block')
    });

    $(".category-option1").mouseleave(function() {
        $('.option-me1').css('display', 'none')
    });

    $(".category-option2").mouseenter(function() {
        $('.option-me2').css('display', 'block')
    });

    $(".category-option2").mouseleave(function() {
        $('.option-me2').css('display', 'none')
    });

    $(".category-option3").mouseenter(function() {
        $('.option-me3').css('display', 'block')
    });

    $(".category-option3").mouseleave(function() {
        $('.option-me3').css('display', 'none')
    });

    $(".category-option4").mouseenter(function() {
        $('.option-me4').css('display', 'block')
    });

    $(".category-option4").mouseleave(function() {
        $('.option-me4').css('display', 'none')
    });

    $(".category-option5").mouseenter(function() {
        $('.option-me5').css('display', 'block')
    });

    $(".category-option5").mouseleave(function() {
        $('.option-me5').css('display', 'none')
    });

    $(".category-option6").mouseenter(function() {
        $('.option-me6').css('display', 'block')
    });

    $(".category-option6").mouseleave(function() {
        $('.option-me6').css('display', 'none')
    });

    $(".category-option7").mouseenter(function() {
        $('.option-me7').css('display', 'block')
    });

    $(".category-option7").mouseleave(function() {
        $('.option-me7').css('display', 'none')
    });
</script>

<script src="./scripts/mate.js"></script>