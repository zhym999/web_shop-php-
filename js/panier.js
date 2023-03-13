function checkbox(){
    var checkbox = document.getElementsByName("checkbox[]");
    var checkbox_count = 0;
    for (var i=0; i<checkbox.length;i++){
        if (checkbox[i].checked){
            checkbox_count++;
        }
    }
    document.getElementById("allnum").innerText=checkbox_count;
}



function amoney() {
    var count = document.getElementById("count").value;
    var aprice=0;
    for (var i=0;i<count;i++){
        if (document.getElementById('checkbox'+i.toString()).checked){
            aprice += parseFloat(document.getElementById('all'+i.toString()).innerText);
                                                                       // 这里有问题
            console.log(count)
        }
        document.getElementById('allprice').innerHTML=aprice;
    }
}


function comp(z){
    var num=document.getElementById('num'+z).value;
        console.log(num);
    var price = parseFloat(document.getElementById('price'+z).innerText);
        console.log(price);
    var mone = document.getElementById('all'+z);
    mone.innerText=(price*num).toFixed(2);
}




