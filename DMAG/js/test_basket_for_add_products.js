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
    saveBasket();
}

function showBasket(){
    var out="";
    var products="";
    var amount_elements = 0;
    
    for (var key in cart) {
         out += key + ' --- ' + cart[key] + '<br>';
        //out += key + ' --- ' + cart[key];
        ++amount_elements;

        products += 
            "<!--<div>"+
            key+
            "</div> -->"+

        '<div class="product-card" id="product1">'+
            '<img src="img/trash/product1.jpg" alt="Product 1" class="product-img">'+
            '<div class="product-info">'+
                '<div class="product-title">' + key + '</div>'+
                '<div class="product-description">Очень крутая мышка с продвинутыми функциями.</div>'+
                '<div class="product-price">7777 руб.</div>'+
            '</div>'+
            '<div class="quantity-controls">'+
                '<button class="quantity-btn" onclick="deleteFromBasket(this.value)" value="' + key + '">-</button>'+
                '<span class="quantity" id="quantity1">' + cart[key] + '</span>'+
                '<!--<button class="quantity-btn" onclick="addToBasket(this.value)" value='+ '"Hello world"' +'>+</button>-->'+
                '<button class="quantity-btn" onclick="addToBasket(this.value)" value="' + key +'">+</button>'+
                '<!--button class="quantity-btn" onclick="addToBasket(this.value)" value="${key}">+</button> -->'+
            '</div>'+
            '<button class="delete-btn" onclick="deleteFromBasketAtAll(this.value)" value="' + key + '">'+
                '<img src="img/trash/trash-icon.png" alt="Delete" width="20" height="20">'+
            '</button>'+
        '</div>';
    }

    var amount_elements1 = "There " + amount_elements + " elements";
    if (amount_elements > 0){
        products += '<button class="checkout-btn" onclick="checkout()">Перейти к оформлению</button>';
    }

    document.getElementById("all_products_in_trash").innerHTML = products;
    $('.basket2').html(amount_elements1);
    $('.basket3').html(out);                                    // Можно так
    //document.getElementById("basket3").innerHTML = out;       // Можно так
    //$('.product-price').html(out);
}

// function showBasketElements(){
//     var out="";
//     var products = '';

//     for (var key in cart) {

//     products += "<div>"+
//     "hello11111"+
//     "</div>";

//         products += '<div class="product-card" id="product1">'+
//             '<!--<img src="img/trash/product1.jpg" alt="Product 1" class="product-img">-->'+
//             '<div class="product-info">'+
//                 '<div class="product-title">Крутая мышка для компьютера 1</div>'+
//                 '<div class="product-description">Очень крутая мышка с продвинутыми функциями.</div>'+
//                 '<div class="product-price">7777 руб.</div>'+
//             '</div>'+
//             '<div class="quantity-controls">'+
//                 '<button class="quantity-btn" onclick="deleteFromBasket(this.value)" value="Крутая мышка для компьютера 1">-</button>'+
//                 '<span class="quantity" id="quantity1">1</span>'+
//                 '<button class="quantity-btn" onclick="addToBasket(this.value)" value="Крутая мышка для компьютера 1">+</button>'+
//             '</div>'+
//             '<button class="delete-btn" onclick="deleteProduct("product1")">'+
//                 '<!--<img src="img/trash/trash-icon.png" alt="Delete" width="20" height="20">-->'+
//             '</button>'+
//         '</div>';
//     }

//     document.getElementById("all_products_in_trash").innerHTML = products;

// }

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
        //showBasketElements();
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

function deleteFromBasketAtAll(val){
    delete(cart[val]); 
    
    console.log(cart);
    showBasket();
    saveBasket();
}
