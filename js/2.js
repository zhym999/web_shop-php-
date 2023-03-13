

var check = document.querySelectorAll('.quanxuan');
var checklen = check.length
var single =document.querySelectorAll('.single');
var singlelen = single.length;

for (var i=0;i<checklen;i++){
    check[i].onclick=function (e){
        if (e.target.id=='all'){
            for (var j=0;j<singlelen;j++){
               single[j].checked = this.checked;
            }
        }
        fTotal();
    }
}


function fTotal(){
    var itemBox = document.querySelectorAll('.content2');

    var allNum = document.getElementById('allnum');
    var allPrice = document.getElementById('allprice');


    var totalPrice=0;
    // var price = 0;
    var num =0;
    for (var i=0;i<itemBox.length;i++){
        if (itemBox[i].getElementsByTagName('input')[0].checked){
            xnum = parseFloat(itemBox[i].getElementsByTagName('input')[1].value);
            num+=xnum;
            price = itemBox[i].querySelector('.price').getAttribute('date-price');
            xprice=parseFloat(price)*xnum;
            itemBox[i].querySelector('.xiaoprice').innerText =parseFloat(price)*xnum;
            // xprice=xnum*price;
            totalPrice+=xprice

            // console.log(itemBox[i].getElementsByTagName('input')[1].value)
        }
    }
    allNum.innerText =num;
    allPrice.innerText = totalPrice;
}





// function updatePrice(){
//     let itemss =document.querySelectorAll('.content2');
//     let totalNum = 0;
//     let totalPrice = 0;
//     itemss.forEach(function (itemss){
//         if (itemss.querySelector('.single').checked){
//             let num = itemss.querySelector('.shuliang').value;
//             totalNum+=parseFloat(num);
//             let price = itemss.querySelector('.price').getAttribute('date-price');
//             document.querySelector('.xiaoprice').innerText =(parseFloat(price))*num
//             totalPrice+=(parseFloat(price))*num;
//         }
//     });
//     document.querySelector('.allprice').innerText = totalPrice;
//     document.querySelector('.allnum').innerText = totalNum;
//
// }
//
//
//
// window.onload = function () {
//     let item = document.querySelectorAll('.single');
//     let check = document.querySelectorAll('.quanxuan');
//     check.fo
//
//     item.forEach(function (item) {
//         item.onchange = function () {
//             updatePrice();
//         }
//     });
// }