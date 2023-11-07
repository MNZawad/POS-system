function generate(){
    
    var name = new Array();
    var quan = new Array();
    var price = new Array();
    var tprice = 0;
    var items = '';
    var q = '';
    var p = '';
    for(var i=0;i<5;i++){
        var temp1 = 'pName' + (i+1);
        var temp2 = 'pQuantity' + (i+1);
        var temp3 = 'pPrice' + (i+1);
        
        name[i] = document.getElementById(temp1).value;
        if(name[i]!=""){
            items = items + name[i]+ "," ;
        }
        
        quan[i] = document.getElementById(temp2).value;
        if(quan[i]!=""){
            q = q + quan[i]+ "," ;
        }
        price[i] = document.getElementById(temp3).value;
        if(price[i]!=""){
            p = p + price[i]+ "," ;
        }
        tprice += quan[i]*price[i];
    }
    for(var i=0;i<5;i++){
        console.log(name[i], quan[i] , price[i]);
    }
    items = items.slice(0,items.length-1);
    p = p.slice(0,p.length-1);
    q = q.slice(0,q.length-1);
    console.log(items);
    console.log(p);
    console.log(q);
    console.log(tprice);
    document.getElementById("product").value = items;
    document.getElementById("quantity").value = q;
    document.getElementById("price").value = p;
    document.getElementById("tprice").value = tprice;
    today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //As January is 0.
    var yyyy = today.getFullYear();

    if(dd<10) dd='0'+dd;
    if(mm<10) mm='0'+mm;
    var cdate = mm + '-' + dd + '-' + yyyy;
    document.getElementById("date").value = cdate;
    document.getElementById("billForm").submit();
}