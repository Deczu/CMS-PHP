itname=[];
itquant=[];
itprice=[];

function addItem() {
    itname.push(document.getElementById('product_name').value);
    itquant.push(parseInt(document.getElementById('product_quantity').value));
    itprice.push(parseFloat(document.getElementById('product_price').value));

    displayCart();

}

function displayCart() {
    let cartdata='<table>' +
        '<tr><th>Produkt</th>' +
        '<th>Ilosc</th>' +
        '<th>Cena</th>' +
        '<th>Total</th></tr>';

    let total=0;

    for(i=0;i<itname.length;i++)
    {
        total+=itquant[i]*itprice[i];
        cartdata+="<tr><td>" +itname+"</td><td>"+
            itquant[i]+"</td><td>"+itprice[i]+"</td><td>"+
            +itquant[i]*itprice[i]

    }

    cartdata +="<tr><td></td><td></td><td></td><td>"+total+"</td></tr></table>";
    document.getElementById('cart').innerHTML=cartdata



}



