function show_item(smthng){
    $(smthng).removeClass('hidden').addClass('shown').fadeIn(500);
}
function hide_item(smthng){
    $(smthng).fadeOut(500);//.removeClass('shown').addClass('hidden');
}
function show_popup(item){
    show_item(item);
    setTimeout(function (){ hide_item(item)}, 1200);
    //$(item).removeClass('hidden').addClass("shown");
    //setTimeout(function() {$(item).removeClass('shown').addClass("hidden")}, 1000);
}

var Cart;
if (!Cart) Cart = {};
Cart.AddItem = function (id, quantity)
{
    var jqxhr = $.post("/cart/cart.php",
        {'action': 'add2basket', 'id': id, 'quantity': quantity});
    return jqxhr;
}



Cart.Init = function()
{
    $('.addtocart-button').click(function(){
        var addLink = this;
        $(addLink).addClass("adding");
        var id = this.getAttribute('data-item-id');
        var quantid = this.getAttribute('data-item-quantity');
        var quantity = $("#"+quantid).val();
        /*
         var addedid = this.getAttribute('id')+"_added";
         var added = $("#"+addedid);
         var nonaddedid = this.getAttribute('id')+"_nonadded";
         var nonadded = $("#"+nonaddedid);
         */
        console.log(id);
        console.log(quantity);
        if ((quantity == null) || (typeof quantity === 'undefined') || (quantity == "")) { quantity = 1; }
        Cart.AddItem(id, quantity)
            .done(function(data)
            {
                //showing popup
                console.log("success");
                console.log(data);

                //$(addLink).tooltip({title: "Добавлено в корзину", html: false, placement: "right", trigger: "manual", container: "body"}).show();
                //setTimeout(function() {$(addLink).tooltip('destroy')},10000);

                //adding to top cart sum
                /*show_popup(added);
                var priceF = jQuery.parseJSON(data);
                $("#popup_basket").html("<span class='glyphicon glyphicon-shopping-cart'></span>&nbsp;&nbsp;Корзина: " + priceF['price']);*/
            })
            .fail(function(data)
            {
                console.log("fail");
                /*console.log(data);
                show_popup(nonadded);*/

                //$(addLink).tooltip({title: "Ошибка добавления в корзину", html: false, placement: "right", trigger: "manual", container: "body"}).tooltip('show');
                //setTimeout(function() {$(addLink).tooltip('destroy')},1000);
            })
            .always(function(data){
                $(addLink).removeClass("adding");
                $(addLink).blur();
            });
    });
}


//Popup window
// var dialogParams =
// {
//     'title': 'Элемент добавлен',
//     'content': id,
//     'width': 500,
//     'height': 200
// }
// new BX.PopupWindow(dialogParams).Show();
// var oPopup = new BX.PopupWindow('add_to_basket', window.body, {
//    autoHide : true,
//    offsetTop : 1,
//    offsetLeft : 0,
//    lightShadow : true,
//    closeIcon : true,
//    closeByEsc : true,
//    overlay: {
//        backgroundColor: 'gray', opacity: '80'
//    }
// })
// oPopup.setContent('<div class="add-to-basket-popup">Элемент ' + id + ' добавлен в корзину</div>');
// oPopup.show();
