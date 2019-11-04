function btn_buy(){
      
    var cartitens = document.getElementById("cart-icon").innerText;
    var cartnumber = Number(cartitens) + 1;
    document.getElementById("cart-icon").innerHTML= cartnumber;
}




$(".btn_buy").on("click", btn_buy);
$("#account-out").on("click", btn_buy);