
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JENNY | Shopping Basket</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #fff;
            color: #222;
            min-height: 100vh;
        }


        /* ================= NAVBAR ================= */

        .navbar {
            width: 100%;
            padding: 18px 7%;
            background: #fff;
            border-bottom: 1px solid #eee;

            display: flex;
            justify-content: space-between;
            align-items: center;

            position: sticky;
            top: 0;
            z-index: 1000;
        }


        .logo {
            font-size: 30px;
            font-weight: bold;
            letter-spacing: 5px;
            color: #111;
        }


        .logo span {
            color: #d98ca5;
        }


        .nav-links {
            display: flex;
            gap: 25px;
            align-items: center;
        }


        .nav-links a {
            text-decoration: none;
            color: #222;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }


        .nav-links a:hover {
            color: #d98ca5;
        }


        .home-link {
            background: #111;
            color: #fff !important;
            padding: 11px 20px;
            border-radius: 25px;
        }


        .home-link:hover {
            background: #d98ca5;
        }


        /* ================= HERO ================= */

        .hero {
            background:
                linear-gradient(
                    135deg,
                    #fff5f8,
                    #fde8ef,
                    #fff
                );

            padding: 60px 20px;
            text-align: center;
        }


        .hero small {
            color: #c96f8e;
            letter-spacing: 3px;
            font-weight: bold;
        }


        .hero h1 {
            font-family: Georgia, serif;
            font-size: 48px;
            margin: 15px 0 10px;
            color: #111;
        }


        .hero p {
            color: #777;
            font-size: 15px;
        }


        /* ================= CART AREA ================= */

        .cart-section {
            width: 90%;
            max-width: 1100px;
            margin: 50px auto 80px;
        }


        #cart {
            width: 100%;
        }


        /* ================= PRODUCT CARD ================= */

        .cart-card {
            background: #fff;

            border: 1px solid #eee;
            border-radius: 18px;

            padding: 22px;
            margin-bottom: 25px;

            display: flex;
            align-items: center;
            gap: 25px;

            box-shadow:
                0 8px 30px rgba(0, 0, 0, 0.06);

            transition: 0.3s ease;

            animation: cartAppear 0.5s ease;
        }


        .cart-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.10);
        }


        @keyframes cartAppear {

            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* ================= IMAGE ================= */

        .cart-image {
            width: 150px;
            height: 150px;

            border-radius: 14px;
            overflow: hidden;

            background: #fdf0f4;

            flex-shrink: 0;
        }


        .cart-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            transition: 0.4s ease;
        }


        .cart-card:hover .cart-image img {
            transform: scale(1.06);
        }


        /* ================= PRODUCT INFO ================= */

        .cart-info {
            flex: 1;
        }


        .cart-info h2 {
            font-family: Georgia, serif;
            font-size: 25px;
            color: #111;
            margin-bottom: 12px;
        }


        .price {
            color: #777;
            font-size: 15px;
            margin-bottom: 15px;
        }


        .subtotal {
            color: #111;
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }


        /* ================= QUANTITY ================= */

        .quantity-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }


        .quantity-area span {
            font-weight: bold;
            font-size: 14px;
        }


        .quantity-btn {
            width: 34px;
            height: 34px;

            border: none;
            border-radius: 50%;

            background: #111;
            color: #fff;

            font-size: 20px;
            line-height: 34px;

            cursor: pointer;

            transition: 0.3s;
        }


        .quantity-btn:hover {
            background: #d98ca5;
            transform: scale(1.08);
        }


        .quantity-number {
            min-width: 25px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }


        /* ================= REMOVE ================= */

        .remove-btn {
            border: none;
            background: #f8e5eb;
            color: #b85e7a;

            padding: 10px 18px;

            border-radius: 25px;

            font-weight: bold;
            cursor: pointer;

            transition: 0.3s;
        }


        .remove-btn:hover {
            background: #111;
            color: #fff;
        }


        /* ================= EMPTY CART ================= */

        .empty-cart {
            text-align: center;

            padding: 70px 20px;

            background: #fff8fa;

            border-radius: 20px;

            border: 1px solid #f3dce3;
        }


        .empty-icon {
            font-size: 55px;
            margin-bottom: 15px;
        }


        .empty-cart h2 {
            font-family: Georgia, serif;
            font-size: 30px;
            margin-bottom: 10px;
        }


        .empty-cart p {
            color: #777;
            margin-bottom: 25px;
        }


        .shop-button {
            display: inline-block;

            text-decoration: none;

            background: #111;
            color: #fff;

            padding: 13px 25px;

            border-radius: 30px;

            font-weight: bold;

            transition: 0.3s;
        }


        .shop-button:hover {
            background: #d98ca5;
            transform: translateY(-2px);
        }


        /* ================= TOTAL ================= */

        .cart-summary {
            margin-top: 35px;

            padding: 30px;

            background:
                linear-gradient(
                    135deg,
                    #fff7f9,
                    #fdebf0
                );

            border-radius: 20px;

            border: 1px solid #f1dce3;

            text-align: right;
        }


        .cart-summary h2 {
            font-family: Georgia, serif;
            font-size: 30px;
            margin-bottom: 20px;
            color: #111;
        }


        .checkout-button {
            border: none;

            background: #111;
            color: #fff;

            padding: 15px 30px;

            border-radius: 30px;

            font-size: 15px;
            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;
        }


        .checkout-button:hover {
            background: #d98ca5;
            transform: translateY(-2px);
        }


        /* ================= CONTINUE SHOPPING ================= */

        .continue-shopping {
            text-align: center;
            margin-top: 35px;
        }


        .continue-shopping a {
            text-decoration: none;
            color: #c96f8e;

            font-weight: bold;

            transition: 0.3s;
        }


        .continue-shopping a:hover {
            color: #111;
        }


        /* ================= FOOTER ================= */

        footer {
            background: #111;
            color: #fff;

            text-align: center;

            padding: 35px 20px;
        }


        .footer-logo {
            font-size: 25px;
            letter-spacing: 5px;
            font-weight: bold;

            margin-bottom: 10px;
        }


        .footer-logo span {
            color: #d98ca5;
        }


        footer p {
            color: #aaa;
            font-size: 13px;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 700px) {

            .navbar {
                padding: 15px 5%;

                flex-direction: column;

                gap: 15px;
            }


            .nav-links {
                gap: 15px;
            }


            .hero {
                padding: 45px 20px;
            }


            .hero h1 {
                font-size: 36px;
            }


            .cart-section {
                width: 92%;
                margin-top: 30px;
            }


            .cart-card {
                flex-direction: column;

                text-align: center;
            }


            .cart-image {
                width: 200px;
                height: 200px;
            }


            .quantity-area {
                justify-content: center;
            }


            .cart-summary {
                text-align: center;
            }


            .remove-btn {
                margin-top: 10px;
            }

        }

    </style>

</head>


<body>


<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <div class="logo">
        JENNY<span>.</span>
    </div>


    <div class="nav-links">

        <a href="/index">
            Home
        </a>


        <a href="/shop/products">
            Products
        </a>


        <a href="/cart">
            🛒 Basket
        </a>

    </div>

</nav>



<!-- ================= HERO ================= -->

<section class="hero">

    <small>
        JENNY JEWELRY & COSMETICS
    </small>


    <h1>
        Your Shopping Basket
    </h1>


    <p>
        Review your selected products before completing your order.
    </p>

</section>



<!-- ================= CART ================= -->

<section class="cart-section">

    <div id="cart"></div>


    <div class="continue-shopping">

        <a href="/shop/products">
            ← Continue Shopping
        </a>

    </div>

</section>



<!-- ================= FOOTER ================= -->

<footer>

    <div class="footer-logo">
        JENNY<span>.</span>
    </div>


    <p>
        Jewelry & Cosmetics — Beauty with Elegance
    </p>


    <p style="margin-top:10px;">
        © {{ date('Y') }} JENNY. All Rights Reserved.
    </p>

</footer>



<script>


function getCart()
{
    let cart = localStorage.getItem('cart');

    if (cart)
    {
        return JSON.parse(cart);
    }

    return [];
}



function saveCart(cart)
{
    localStorage.setItem(
        'cart',
        JSON.stringify(cart)
    );
}



function showCart()
{

    let cart = getCart();


    let cartDiv =
        document.getElementById('cart');


    /* ================= EMPTY CART ================= */

    if (cart.length === 0)
    {

        cartDiv.innerHTML = `

            <div class="empty-cart">

                <div class="empty-icon">
                    🛒
                </div>

                <h2>
                    Your Basket is Empty
                </h2>

                <p>
                    You haven't added any products yet.
                </p>

                <a
                    href="/shop/products"
                    class="shop-button"
                >
                    Start Shopping
                </a>

            </div>

        `;

        return;
    }



    /* ================= PRODUCTS ================= */

    let html = '';

    let total = 0;


    cart.forEach(function(product, index)
    {

        let subtotal =
            product.price *
            product.quantity;


        total =
            total +
            subtotal;



        html += `

            <div class="cart-card">


                <!-- PRODUCT IMAGE -->

                <div class="cart-image">

                    ${
                        product.image
                        ?
                        `<img
                            src="/storage/products/${product.image}"
                            alt="${product.name}"
                        >`
                        :
                        `<div
                            style="
                                width:100%;
                                height:100%;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                color:#999;
                            "
                        >
                            No Image
                        </div>`
                    }

                </div>



                <!-- PRODUCT INFORMATION -->

                <div class="cart-info">


                    <h2>
                        ${product.name}
                    </h2>


                    <p class="price">

                        Price:
                        Rs. ${product.price}

                    </p>



                    <!-- QUANTITY -->

                    <div class="quantity-area">

                        <span>
                            Quantity:
                        </span>


                        <button
                            type="button"
                            class="quantity-btn"
                            onclick="decreaseQuantity(${index})"
                        >
                            −
                        </button>


                        <span class="quantity-number">
                            ${product.quantity}
                        </span>


                        <button
                            type="button"
                            class="quantity-btn"
                            onclick="increaseQuantity(${index})"
                        >
                            +
                        </button>

                    </div>



                    <!-- SUBTOTAL -->

                    <p class="subtotal">

                        Subtotal:
                        Rs. ${subtotal}

                    </p>

                </div>



                <!-- REMOVE -->

                <div>

                    <button
                        type="button"
                        class="remove-btn"
                        onclick="removeProduct(${index})"
                    >
                        Remove
                    </button>

                </div>


            </div>

        `;

    });



    /* ================= SUMMARY ================= */

    html += `

        <div class="cart-summary">

            <h2>
                Total: Rs. ${total}
            </h2>


            <button
                type="button"
                class="checkout-button"
                onclick="goToCheckout()"
            >
                Proceed to Checkout →
            </button>

        </div>

    `;


    cartDiv.innerHTML = html;

}



/* ================= INCREASE ================= */

function increaseQuantity(index)
{

    let cart = getCart();


    cart[index].quantity++;


    saveCart(cart);


    showCart();

}



/* ================= DECREASE ================= */

function decreaseQuantity(index)
{

    let cart = getCart();


    if (cart[index].quantity > 1)
    {

        cart[index].quantity--;

    }

    else
    {

        cart.splice(index, 1);

    }


    saveCart(cart);


    showCart();

}



/* ================= REMOVE ================= */

function removeProduct(index)
{

    let cart = getCart();


    cart.splice(index, 1);


    saveCart(cart);


    showCart();

}



/* ================= CHECKOUT ================= */

function goToCheckout()
{

    window.location.href = '/checkout';

}



/* ================= SHOW CART ================= */

showCart();


</script>


</body>

</html>

