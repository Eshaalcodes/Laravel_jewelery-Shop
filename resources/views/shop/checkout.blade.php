<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JENNY | Checkout</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff7fa;
            color: #222;
        }

        /* ================= NAVBAR ================= */

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 75px;
            background: rgba(255, 255, 255, 0.96);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 3px;
            color: #111;
        }

        .logo span {
            color: #d88ca0;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #111;
            font-size: 15px;
            font-weight: 500;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #d88ca0;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 30px;
            font-size: 14px;
            transition: 0.3s;
        }

        .shop-btn {
            background: #111;
            color: white;
        }

        .cart-btn {
            border: 1px solid #111;
            color: #111;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .logout-btn {
            border: 1px solid #d88ca0;
            background: #d88ca0;
            color: white;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #111;
            color: white;
        }

        /* ================= HERO ================= */
        .hero {
    background: #d88ca0;
    color: white;
    text-align: center;
    padding: 120px 20px 55px;
}

.hero h1 {
    font-size: 42px;
    margin-bottom: 12px;
}

.hero p {
    color: #fff;
    font-size: 17px;
}

        /* ================= MAIN ================= */

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 45px auto;
        }

        .checkout-grid {
            display: grid;
            grid-template-columns: 1.4fr 0.8fr;
            gap: 30px;
            align-items: start;
        }

        .card {
            background: white;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        }

        .card h2 {
            margin-bottom: 25px;
            font-size: 25px;
        }

        /* ================= FORM ================= */

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 9px;
            font-size: 15px;
            background: #fff;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #e58aaa;
            box-shadow: 0 0 0 3px rgba(229,138,170,0.12);
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        /* ================= ERRORS ================= */

        .error-box {
            background: #ffe5eb;
            border-left: 5px solid #d6336c;
            color: #a51d45;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .error-box p {
            margin-top: 6px;
        }

        /* ================= ORDER SUMMARY ================= */

        .summary-card {
            position: sticky;
            top: 100px;
        }

        .summary-item {
            border-bottom: 1px solid #eee;
            padding: 15px 0;
        }

        .summary-item h3 {
            font-size: 17px;
            margin-bottom: 8px;
        }

        .summary-item p {
            color: #666;
            margin: 5px 0;
        }

        .total {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 18px;
            border-top: 2px solid #f1c2d3;
            font-size: 22px;
            font-weight: bold;
        }

        /* ================= BUTTON ================= */

        .checkout-btn {
            width: 100%;
            margin-top: 25px;
            padding: 15px;
            border: none;
            border-radius: 30px;
            background: #111;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .checkout-btn:hover {
            background: #e58aaa;
            color: #111;
        }

        /* ================= EMPTY CART ================= */

        .empty-cart {
            text-align: center;
            padding: 30px;
            color: #c22;
        }

        /* ================= BACK LINK ================= */

        .back-link {
            display: inline-block;
            margin-top: 30px;
            color: #111;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            color: #d66c91;
        }

        /* ================= FOOTER ================= */

        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
        }

        footer span {
            color: #ffb6d2;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 800px) {

            .checkout-grid {
                grid-template-columns: 1fr;
            }

            .summary-card {
                position: static;
            }

            .hero h1 {
                font-size: 32px;
            }

        }

        @media (max-width: 500px) {

            nav {
                padding: 0 5%;
            }

            .logo {
                font-size: 22px;
            }

            .container {
                width: 94%;
            }

            .card {
                padding: 20px;
            }

        }

    </style>

</head>

<body>


<!-- ================= NAVBAR ================= -->

<nav>

    <div class="logo">
        JENNY<span>.</span>
    </div>

    <ul>

        <li>
            <a href="{{ route('index') }}">Home</a>
        </li>

        <li>
            <a href="{{ route('collection') }}">Collection</a>
        </li>

        <li>
            <a href="{{ url('/shop/products') }}">Products</a>
        </li>

        <li>
            <a href="{{ route('about') }}">About</a>
        </li>

        <li>
            <a href="{{ route('contact') }}">Contact</a>
        </li>

        <li>
            <a href="{{ route('faq') }}">FAQ</a>
        </li>

    </ul>

    <div class="nav-buttons">

        <a href="{{ url('/shop/products') }}" class="btn shop-btn">
            Shop Now
        </a>

        <a href="{{ url('/cart') }}" class="btn cart-btn">
            Basket
        </a>

        <a href="{{ route('order.history') }}" class="btn cart-btn">
            Order History
        </a>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">

            @csrf

            <button type="submit" class="btn logout-btn">
                Logout
            </button>

        </form>

    </div>

</nav>


<!-- ================= HERO ================= -->

<section class="hero">

    <h1>
        Complete Your Order
    </h1>

    <p>
        Your beauty & sparkle is almost ready ✨
    </p>

</section>


<!-- ================= MAIN ================= -->

<div class="container">


    {{-- ERROR MESSAGE --}}

    @if(session('error'))

        <div class="error-box">

            {{ session('error') }}

        </div>

    @endif


    {{-- VALIDATION ERRORS --}}

    @if($errors->any())

        <div class="error-box">

            <strong>
                Please fix these errors:
            </strong>

            @foreach($errors->all() as $error)

                <p>
                    {{ $error }}
                </p>

            @endforeach

        </div>

    @endif


    <form action="/orders/store" method="POST">

        @csrf


        <div class="checkout-grid">


            <!-- ================= CUSTOMER INFORMATION ================= -->

            <div class="card">

                <h2>
                    Customer Information
                </h2>


                <!-- NAME -->

                <div class="form-group">

                    <label>
                        Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your name"
                        required
                    >

                </div>


                <!-- ADDRESS -->

                <div class="form-group">

                    <label>
                        Address
                    </label>

                    <textarea
                        name="address"
                        placeholder="Enter your complete address"
                        required
                    >{{ old('address') }}</textarea>

                </div>


                <!-- EMAIL -->

                <div class="form-group">

                    <label>
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                    >

                </div>


                <!-- WORK PHONE -->

                <div class="form-group">

                    <label>
                        Work Phone No
                    </label>

                    <input
                        type="text"
                        name="work_phone"
                        value="{{ old('work_phone') }}"
                        placeholder="Enter work phone number"
                    >

                </div>


                <!-- CELL NO -->

                <div class="form-group">

                    <label>
                        Cell No
                    </label>

                    <input
                        type="text"
                        name="cell_no"
                        value="{{ old('cell_no') }}"
                        placeholder="Enter cell number"
                        required
                    >

                </div>


                <!-- DATE OF BIRTH -->

                <div class="form-group">

                    <label>
                        Date Of Birth
                    </label>
                     <input
    type="date"
    name="date_of_birth"
    value="{{ old('date_of_birth') }}"
    required
>

                </div>


                <!-- CATEGORY -->

                <div class="form-group">

                    <label>
                        Category
                    </label>

                    <select name="category" required>

                        <option value="">
                            Select Category
                        </option>

                        <option value="Jewelry">
                            Jewelry
                        </option>

                        <option value="Cosmetics">
                            Cosmetics
                        </option>

                    </select>

                </div>


                <!-- REMARKS -->

                <div class="form-group">

                    <label>
                        Remarks
                    </label>

                    <textarea
                        name="remarks"
                        placeholder="Any additional information"
                    >{{ old('remarks') }}</textarea>

                </div>

            </div>


            <!-- ================= ORDER SUMMARY ================= -->

            <div class="card summary-card">

                <h2>
                    Order Summary
                </h2>


                <div id="order-summary">

                    Loading...

                </div>


                <!-- CART DATA -->

                <input
                    type="hidden"
                    name="cart"
                    id="cart"
                >


                <!-- FINALIZE ORDER -->

                <button
                    type="submit"
                    class="checkout-btn"
                >
                    Finalize Order →
                </button>

            </div>


        </div>

    </form>


    <a href="/cart" class="back-link">
        ← Back to Basket
    </a>


</div>


<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © 2026 <span>JENNY</span> Jewelry & Cosmetics
    </p>

    <p>
        Your Beauty. Your Sparkle.
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


let cart = getCart();


let summary =
    document.getElementById('order-summary');


if (cart.length === 0)

{

    summary.innerHTML = `

        <div class="empty-cart">

            <p>
                Your basket is empty.
            </p>

            <br>

            <a href="/shop/products">
                Start Shopping
            </a>

        </div>

    `;

}

else

{

    let html = '';

    let total = 0;


    cart.forEach(function(product)

    {

        let subtotal =
            product.price *
            product.quantity;


        total =
            total +
            subtotal;


        html += `

            <div class="summary-item">

                <h3>
                    ${product.name}
                </h3>

                <p>
                    Price:
                    Rs. ${product.price}
                </p>

                <p>
                    Quantity:
                    ${product.quantity}
                </p>

                <p>
                    Subtotal:
                    Rs. ${subtotal}
                </p>

            </div>

        `;

    });


    html += `

        <div class="total">

            <span>
                Total
            </span>

            <span>
                Rs. ${total}
            </span>

        </div>

    `;


    summary.innerHTML = html;

}


document.getElementById('cart').value =
    JSON.stringify(cart);

</script>


</body>

</html>