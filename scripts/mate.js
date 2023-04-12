function getCookie(cookieName) {
    let cookie = {};
    document.cookie.split(';').forEach(function (el) {
        let [key, value] = el.split('=');
        cookie[key.trim()] = value;
    })
    return cookie[cookieName];
}

const mateKeywordNav = getCookie('mateKeywordName');

$(function(){
    const $hashtag = $('.keyword');

    if (mateKeywordNav !== undefined) {
        splitToArray(mateKeywordNav);
        selectCount = userSelect.length;
        // setSelected();
    }

    function splitToArray(mateKeywordNav) {
        userSelect = mateKeywordNav.split(' ');
    }

    function setSelected() {
        $hashtag.each(function() {
            const $this = $(this),
                keyword = userSelect[0].split(':'),
                key = keyword[0],
                value = keyword[1];

            $this.html(key);
            userSelect.shift();
        });
    }
});