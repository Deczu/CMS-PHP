<!---->
<?php

include ('partials/blogHead.php');
//?>


<body>

<style>
    .btn {
        cursor: pointer;
    }
</style>

<div class="">
    <div>
        <h1>Ilosc produktow w koszyku: <span data-bind="text: getProductCount"></span></h1>
    </div>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th>Nazwa</th>
            <th>QT</th>
            <th>cena</th>
            <th>+</th>
            <th>-</th>
            <th>x</th>
        </tr>
        </thead>
        <tbody class="" data-bind="foreach: products()">
        <tr>
            <td data-bind="text: name"></td>
            <td data-bind="text: qt"></td>
            <td data-bind="text: price"></td>
            <td data-bind="click: increaseQt()"><button class="btn btn-dark">Wiecej</button></td>
            <td data-bind="click: decreaseQt()"><button class="btn btn-dark">Mniej</button></td>
            <td data-bind="click: $parent.removeFromCart"><button class="btn btn-dark">Usuń</button></td>
        </tr>
        </tbody>
    </table>
    <div>
        <p>Koszt zamówienia<span class="total" data-bind="text: subtotal"></span></p>
    </div>

    <div>
        <span>Dodaj nowy produkt</span>
        <div>
            <label for="product_name">
                Nazwa
                <input type="text" id="product_name" name="product_name" data-bind="textInput: newProductName">
            </label>
            <label for="product_price">
                Cena
                <input type="number" id="product_price" name="product_price" data-bind="textInput: newProductPrice">
            </label>
            <label for="product_qt">
                Ilosc
                <input type="number" id="product_qt" name="product_qt" data-bind="textInput: newProductQt">
            </label>
            <button class="btn btn-primary" data-bind="{visible: isReadyToAdd, click: addNewProduct}">Dodaj</button>
        </div>
    </div>
</div>



<div>
    <button class="btn btn-primary" data-bind="click:  function(){addNewProductToList('białko',10,10)}">Dodaj</button>


</div>

<script type="text/javascript">

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        document.cookie = name + '=; Max-Age=-99999999;';
    }

    var Product = function (name, price, quantity = 1) {
        this.name = ko.observable(name);
        this.qt = ko.observable(quantity);
        this.price = ko.observable(price);
        this.setQt = function (n) {
            this.qt(n);
        };

        this.increaseQt = function () {
            this.qt(this.qt() + 1);
        };

        this.decreaseQt = function () {
            if (this.qt() > 1) {
                this.qt(this.qt() - 1);
            }
        };
        this.getCount = ko.computed(function () {
            return this.qt();
        }, this);


        this.getFullPrice = ko.computed(function () {
            return this.price() * this.getCount();
        }, this);

    };

    var Cart = function (products) {
        var self = this;
        self.test = ko.observable(5);
        self.products = ko.observableArray(products);
        self.addProduct = function (product) {
            self.products().push(product);
        };

        self.removeFromCart = function () {
            console.log('removing from cart');
            self.products.remove(this);
            self.products.valueHasMutated();
        };

        self.subtotal = ko.computed(function () {
            var i = 0;
            var retval = 0.0;
            if (self.products().length < 1) {
                return retval;
            }
            for (; i < self.products().length; i++) {
                retval += self.products()[i].getFullPrice();
            }
            self.products.valueHasMutated();
            return retval;
        }, self);

        self.getProductCount = ko.computed(function () {
            var sum = 0;

            if (self.products().length < 1) {
                return sum;
            }

            for (var i in self.products()) {
                sum += self.products()[i].getCount();
            }
            self.products.valueHasMutated();
            return sum;

        }, self);

        self.newProductPrice = ko.observable(null);
        self.newProductQt = ko.observable(null);
        self.newProductName = ko.observable(null);

        self.addNewProduct = function () {
            self.addNewProductToList(self.newProductName(), parseFloat(self.newProductPrice()), parseInt(self.newProductQt()));
            self.newProductPrice(null);
            self.newProductName(null);
            self.newProductQt(null);
        };

        self.addNewProductToList = function (name, price, qt) {
            var flaga=1;
            var prod=new Product(name, price, qt);
            for(var i in self.products()){
                if(prod.name() === self.products()[i].name()){
                    self.products()[i].increaseQt();
                    flaga=0;
                    break;
                }

             }
             if(flaga){
                 self.products().push(prod);
             }
            self.products.valueHasMutated();
        };

        self.updateCookies = ko.computed(function () {
            var tmpArray = [];
            for (var i in this.products()) {
                tmpArray.push([this.products()[i].name(), this.products()[i].price(), this.products()[i].qt()]);
            }
            setCookie('koszyk', JSON.stringify(tmpArray));
        }, self);

        self.isReadyToAdd = ko.computed(function () {
            return self.newProductQt() !== null && self.newProductName() !== null && self.newProductPrice() !== null;
        }, self);
    };

    var products = [];
    var productList = getCookie('koszyk');
    if (productList) {
        var parsedProductList = JSON.parse(productList);
        for (var i in parsedProductList) {
            products.push(new Product(parsedProductList[i][0], parsedProductList[i][1], parsedProductList[i][2]));
        }
    }
    var cart = new Cart(products);

    ko.applyBindings(cart);
    ko.options.useOnlyNativeEvents = true;
</script>

</body>
</html>