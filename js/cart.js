
let cart = JSON.parse(localStorage.getItem("cart")) || [];

function saveCart(){
	localStorage.setItem("cart", JSON.stringify(cart));
}

function addToCart(item){
	cart.push(item);
	saveCart();
	
}

function displayCart(targetElementId) {
    const cartList = document.getElementById(targetElementId);
    if (!cartList) return;

    cartList.innerHTML = "";
    cart.forEach(item => {
        const li = document.createElement("li");
        li.textContent = item;
        cartList.appendChild(li);
    });
}