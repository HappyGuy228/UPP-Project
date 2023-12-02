const select = document.querySelector('select');
//const select = document.querySelector('.change-lang');            Можно использовать так 


const allLang = ['en', 'ru'];

select.addEventListener('change', changeURLLanguage);

var results;

function changeURLLanguage(){
    let lang = select.value;
    if (results == null){
        document.cookie = "lang=" + lang;
        results = document.cookie.match(/lang=(.+?)(;|$)/);
        results[1] = lang;
    }
    else
        results[1] = select.value;

    location.href = window.location.pathname + '#' + results[1];
    // Здесь будет куки для смены языка
    

    location.reload();
}





function changeLanguage(){
    let hash = window.location.hash;
    hash = hash.substring(1);
    console.log(hash);
    if (!allLang.includes(hash)){
        results = document.cookie.match(/lang=(.+?)(;|$)/);
        location.href = window.location.pathname + '#' + results[1];
        location.reload();
    }


    select.value = hash;

    for(let key in langArr){
        let elem = document.querySelector('.'+key);
        if(elem){
            elem.innerHTML = langArr[key][hash];
        }
    }
    
    let elem2 = document.querySelector('.search-txt');
    elem2.setAttribute('placeholder', langArr["search-txt"][hash]);
}

function changeLanguage1(){
    let hash = window.location.hash;
    hash = hash.substring(1);
    console.log(hash);
    if (!allLang.includes(hash)){
        location.href = window.location.pathname + '#ru';
        location.reload();
    }
    
    for(let key in langArr){
        let elem = document.querySelector('.'+key);
        if(elem && elem.hasAttribute("placeholder")){
            elem.setAttribute('placeholder', langArr[key][hash]);
        }
        else if (elem){
            elem.innerHTML = langArr[key][hash];
        }
    }
}

function changeLanguage2(){
    let hash = window.location.hash;
    hash = hash.substring(1);
    console.log(hash);
    if (!allLang.includes(hash)){
        results = document.cookie.match(/lang=(.+?)(;|$)/);
        location.href = window.location.pathname + '#' + results[1];
        location.reload();
    }


    select.value = hash;

    for(let key in langArr){
        let elem = document.querySelector('.'+key);
        if(elem && elem.hasAttribute("placeholder")){
            elem.setAttribute('placeholder', langArr[key][hash]);
        }
        else if (elem){
            elem.innerHTML = langArr[key][hash];
        }
    }
}

//changeLanguage();
//changeLanguage1();
changeLanguage2();
