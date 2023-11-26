if (localStorage.getItem('cart')){
    cart = JSON.parse(localStorage.getItem('cart'));
}
else{
    var cart = {};
}

function addToBasket(val){
    console.log(val);
    if (cart[val] == undefined) {
        cart[val] = 1; // если в корзине нет товара, то ставим 1
    }
    else{
        cart[val]++; // если в корзине такой товар есть, то увеличиваем его на 1
    }

    console.log(cart);
    showBasket();
    saveBasket();
}

function showBasket(){
    var out="";
    for (var key in cart) {
        out += key + ' --- ' + cart[key] + '<br>';
    }

    $('.basket').html(out);         // Вывод товара на страницу
}

function saveBasket(){
    localStorage.setItem('cart', JSON.stringify(cart));
}

function loadBasket(){
    if (localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));

        for (var key in cart) {
            localStorage.setItem('cart', JSON.stringify(cart));        
        }    
        showBasket();
    }
}

function deleteFromBasket(val){
    if (cart[val] > 1) {
        cart[val]--;        // если в корзине количество товара больше 1, то уменьшаем количество на 1
    }
    else{
        delete(cart[val]);  // если в корзине нет товара, то удаляем его
    }

    console.log(cart);
    showBasket();
    saveBasket();
}
