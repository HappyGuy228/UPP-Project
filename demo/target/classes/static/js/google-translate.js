const googleTranslateConfig = {
    lang: "ru",
};

function TranslateInit() {

    let code = TranslateGetCode();
    // Находим флаг с выбранным языком для перевода и добавляем к нему активный класс
    $('[data-google-lang="' + code + '"]').addClass('language__img_active');

    if (code == googleTranslateConfig.lang) {
        // Если язык по умолчанию, совпадает с языком на который переводим
        // То очищаем куки
        TranslateClearCookie();
    }

    // Инициализируем виджет с языком по умолчанию
    new google.translate.TranslateElement({
        pageLanguage: googleTranslateConfig.lang,
    });

    // Вешаем событие  клик на флаги
    $('[data-google-lang]').click(function () {
        TranslateSetCookie($(this).attr("data-google-lang"))
        // Перезагружаем страницу
        window.location.reload();
    });
}

function TranslateGetCode() {
    // Если куки нет, то передаем дефолтный язык
    let lang = ($.cookie('googtrans') != undefined && $.cookie('googtrans') != "null") ? $.cookie('googtrans') : googleTranslateConfig.lang;
    return lang.substr(-2);
}

function TranslateClearCookie() {
    $.cookie('googtrans', null);
    $.cookie("googtrans", null, {
        domain: "." + document.domain,
    });
}

function TranslateSetCookie(code) {
    // Записываем куки /язык_который_переводим/язык_на_который_переводим
    $.cookie('googtrans', "/auto/" + code);
    $.cookie("googtrans", "/auto/" + code, {
        domain: "." + document.domain,
    });
}








/*function getImageDirectoryByFullURL(url){
    url = url.pop();
    document.write("HEllo world" + url);
}*/

function getQueryVariable(variable){
    const query = window.location.search.substring(1);
    const vars = query.split('&');
    console.log(getQueryVariable("lang"));

    for (let i = 0; i < vars.length; i++){
        let pair = vars[i].split('=');
        if (pair[0] === variable){ return pait[1]}
    }

    return (false);
}

var paramLang = getQueryVariable('lang');

const lang = "lang";

console.log(getQueryVariable(/*lang*/));



/*function GetURLParameter(){
    var sPage = window.location.search.substring(1);
    var sURLvariables = sPageURL.split('&');
}

function GetParamLang(){
    var lang1 =
}*/