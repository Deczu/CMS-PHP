<?php

//var_dump($_SESSION['prod']);


require 'partials/bootstrapHead.php'

?>

<body>
<script>
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
        let cartdata='<table class="table" ">' +
            '<tr><th>  Produkt  </th>' +
            '<th>   Ilosc   </th>' +
            '<th>   Cena   </th>' +
            '<th>   Total   </th></tr>';

        let total=0;

        for(i=0;i<itname.length;i++)
        {
            total+=itquant[i]*itprice[i];
            cartdata    +=  "<tr><td>" +itname[i]+"</td><td>"+
                itquant[i]+"</td><td>"+itprice[i]+"</td><td>"+
                +itquant[i]*itprice[i]

        }

        cartdata +="<tr><td></td><td></td><td></td><td>"+total+"</td></tr></table>";
        document.getElementById('cart').innerHTML=cartdata



    }

</script>

<div id="basket" class="container">
    <h1>Dodaj do koszyka</h1><br>
    <label>Nazwa Produktu</label><br>
    <input class="form-control" id="product_name" type="text"><br>
    <label>Ilość</label><br>
    <input class="form-control" id="product_quantity" type="number"><br>
    <label>Cena</label><br>
    <input class="form-control" id="product_price" type="number"><br>
    <br>
    <button class="btn btn-dark" onclick='addItem()'>Add Item</button>

</div>
<br>
<!--to pokazuje koszyk-->
<div id="cart" class="container"></div>

</body>
