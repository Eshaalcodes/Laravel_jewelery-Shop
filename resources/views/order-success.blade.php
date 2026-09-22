
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JENNY | Order Successful</title>

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
            min-height: 100vh;
        }


        /* NAVBAR */

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


        /* SUCCESS SECTION */

        .success-section {
            min-height: 75vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 120px 20px 50px;
        }

        .success-card {
            background: white;
            width: 100%;
            max-width: 650px;
            text-align: center;
            padding: 55px 35px;
            border-radius: 22px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        }

        .success-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #f7c3d7;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
        }

        .success-card h1 {
            font-size: 38px;
            margin-bottom: 15px;
        }

        .success-card h1 span {
            color: #d66c91;
        }

        .thank-you {
            color: #666;
            font-size: 17px;
            margin-bottom: 25px;
        }


        /* ORDER ID */

        .order-id {
            background: #fff0f5;
            border: 1px solid #f3c5d6;
            border-radius: 12px;
            padding: 18px;
            margin: 25px 0;
        }

        .order-id p {
            color: #666;
            margin-bottom: 8px;
        }

        .order-id strong {
            font-size: 24px;
            color: #111;
        }


        /* CONTINUE SHOPPING BUTTON */

        .success-card .shop-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 14px 30px;
            background: #111;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .success-card .shop-btn:hover {
            background: #e58aaa;
            color: #111;
        }


        /* FOOTER */

        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 25px 20px;
        }

        footer span {
            color: #ffb6d2;
        }


        /* RESPONSIVE */

        @media (max-width: 650px) {

            nav {
                padding: 0 4%;
            }

            nav ul {
                display: none;
            }

            .logo {
                font-size: 22px;
            }

            .nav-buttons {
                gap: 5px;
            }

            .nav-buttons .btn {
                padding: 9px 13px;
                font-size: 12px;
            }

            .success-section {
                padding: 110px 15px 40px;
            }

            .success-card {
                padding: 40px 20px;
            }

            .success-card h1 {
                font-size: 30px;
            }

        }

    </style>

</head>


<body>


<!-- NAVBAR -->

<nav>

    <div class="logo">
        JENNY<span>.</span>
    </div>


    <ul>

        <li>
            <a href="{{ route('index') }}">
                Home
            </a>
        </li>

        <li>
            <a href="{{ route('collection') }}">
                Collection
            </a>
        </li>

        <li>
            <a href="{{ url('/shop/products') }}">
                Products
            </a>
        </li>

        <li>
            <a href="{{ route('about') }}">
                About
            </a>
        </li>

        <li>
            <a href="{{ route('contact') }}">
                Contact
            </a>
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



<!-- SUCCESS SECTION -->

<section class="success-section">

    <div class="success-card">

        <div class="success-icon">
            ✓
        </div>


        <h1>
            Order <span>Placed!</span>
        </h1>


        <p class="thank-you">
            Thank you for shopping with JENNY Jewelry & Cosmetics.
        </p>


        @if(session('order_id'))

            <div class="order-id">

                <p>
                    Your Order ID is
                </p>

                <strong>
                    #{{ session('order_id') }}
                </strong>

            </div>

        @endif


        <p>
            Your order has been successfully received.
        </p>


        <a
            href="{{ url('/shop/products') }}"
            class="shop-btn"
        >
            Continue Shopping →
        </a>

    </div>

</section>



<!-- FOOTER -->

<footer>

    <p>
        © 2026 <span>JENNY</span> Jewelry & Cosmetics
    </p>

</footer>



<script>

    // Clear cart after successful order

    localStorage.removeItem('cart');

</script>


</body>

</html>

