function setCookie(key, value) {
    document.cookie = key + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    document.cookie = key + "=" + value.trim();
}
