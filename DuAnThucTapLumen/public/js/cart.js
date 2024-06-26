var listCart = 
    document.querySelector('#cart-item')

var linkAPI = 'http://localhost:8000/cart'


function start() {

}


start();


function getCart() {
    fetch(linkAPI)
    .then(function (response) {
        return response.json();
    })
}