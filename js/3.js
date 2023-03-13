function updatePrice(){
    let itemss =document.querySelectorAll('.content2');
    let totalNum = 0;
    let totalPrice = 0;
    itemss.forEach(function (itemss){
        if (itemss.querySelector('.single').checked){
            let num = itemss.querySelector('.shuliang').value;
            totalNum+=parseFloat(num);
            let price = itemss.querySelector('.price').getAttribute('date-price');
            document.querySelector('.xiaoprice').innerText =(parseFloat(price))*num;
            totalPrice+=(parseFloat(price))*num;
        }
    });
    document.querySelector('.allprice').innerText = totalPrice;
    document.querySelector('.allnum').innerText = totalNum;

}





window.onload = function () {
    let item = document.querySelectorAll('.single');
    let check = document.querySelectorAll('.quanxuan');
    check.fo

    item.forEach(function (item) {
        item.onchange = function () {
            updatePrice();
        }
    });
}