
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JENNY | FAQ</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff7fa;
            color: #222;
            min-height: 100vh;
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


        /* ================= FAQ HERO ================= */

        .faq-hero {
            padding: 140px 20px 60px;
            text-align: center;
            background: linear-gradient(
                135deg,
                #fff7fa,
                #fde8ef
            );
        }

        .faq-hero h1 {
            font-size: 48px;
            letter-spacing: 2px;
            margin-bottom: 15px;
            color: #111;
        }

        .faq-hero h1 span {
            color: #d88ca0;
        }

        .faq-hero p {
            max-width: 650px;
            margin: auto;
            color: #666;
            font-size: 17px;
            line-height: 1.7;
        }


        /* ================= FAQ SECTION ================= */

        .faq-section {
            max-width: 900px;
            margin: auto;
            padding: 60px 20px 80px;
        }

        .faq-intro {
            text-align: center;
            margin-bottom: 35px;
        }

        .faq-intro h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .faq-intro p {
            color: #777;
            font-size: 15px;
        }

        .faq-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }


        /* ================= FAQ ITEM ================= */

        .faq-item {
            background: white;
            border-radius: 15px;
            border: 1px solid #f1d5df;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: 0.3s ease;
        }

        .faq-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .faq-question {
            width: 100%;
            border: none;
            background: white;
            padding: 22px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            color: #222;
            cursor: pointer;
        }

        .faq-question:hover {
            color: #d88ca0;
        }

        .faq-icon {
            font-size: 24px;
            color: #d88ca0;
            min-width: 25px;
            text-align: center;
        }

        .faq-answer {
            display: none;
        }

        .faq-answer p {
            padding: 0 25px 22px;
            color: #666;
            line-height: 1.7;
            font-size: 15px;
        }

        .faq-item.active .faq-answer {
            display: block;
        }


        /* ================= CONTACT BOX ================= */

        .faq-contact {
            margin-top: 50px;
            background: #111;
            color: white;
            padding: 40px 25px;
            border-radius: 20px;
            text-align: center;
        }

        .faq-contact h2 {
            font-size: 27px;
            margin-bottom: 12px;
        }

        .faq-contact p {
            color: #ddd;
            margin-bottom: 22px;
            line-height: 1.6;
        }

        .contact-btn {
            display: inline-block;
            padding: 13px 28px;
            background: #d88ca0;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .contact-btn:hover {
            background: white;
            color: #111;
            transform: translateY(-3px);
        }


        /* ================= FOOTER ================= */

        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 25px 20px;
        }

        footer span {
            color: #ffb6d2;
        }


        /* ================= RESPONSIVE ================= */

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

            .faq-hero {
                padding: 120px 20px 50px;
            }

            .faq-hero h1 {
                font-size: 36px;
            }

            .faq-hero p {
                font-size: 15px;
            }

            .faq-section {
                padding: 45px 15px 60px;
            }

            .faq-intro h2 {
                font-size: 26px;
            }

            .faq-question {
                padding: 18px;
                font-size: 14px;
            }

            .faq-answer p {
                padding: 0 18px 18px;
                font-size: 14px;
            }

            .faq-contact {
                padding: 30px 20px;
            }

            .faq-contact h2 {
                font-size: 23px;
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

        <form
            action="{{ route('logout') }}"
            method="POST"
            style="display:inline;"
        >

            @csrf

            <button
                type="submit"
                class="btn logout-btn"
            >
                Logout
            </button>

        </form>

    </div>

</nav>



<!-- ================= FAQ HERO ================= -->

<section class="faq-hero">

    <h1>
        Frequently Asked <span>Questions</span>
    </h1>

    <p>
        Find quick answers to common questions about
        JENNY Jewelry & Cosmetics, orders, products and shopping.
    </p>

</section>



<!-- ================= FAQ SECTION ================= -->

<section class="faq-section">

    <div class="faq-intro">

        <h2>
            How Can We Help?
        </h2>

        <p>
            Click on any question to view its answer.
        </p>

    </div>


    <div class="faq-container">


        <!-- FAQ 1 -->

        <div class="faq-item">

            <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
            >

                <span>
                    How can I place an order?
                </span>

                <span class="faq-icon">
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    Browse our products, select the product you
                    like, add it to your basket, and proceed to
                    checkout. Enter your required information and
                    place your order.
                </p>

            </div>

        </div>


        <!-- FAQ 2 -->

        <div class="faq-item">

            <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
            >

                <span>
                    Can I search for a specific product?
                </span>

                <span class="faq-icon">
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    Yes. You can use the product search option
                    on the Products page to quickly find a product
                    by its name.
                </p>

            </div>

        </div>


        <!-- FAQ 3 -->

        <div class="faq-item">

            <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
            >

                <span>
                    How can I check my order status?
                </span>

                <span class="faq-icon">
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    Open the Order History page from the navbar.
                    There you can view your previous orders and
                    their current status.
                </p>

            </div>

        </div>


        <!-- FAQ 4 -->

        <div class="faq-item">

            <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
            >

                <span>
                    Can I reorder a previous order?
                </span>

                <span class="faq-icon">
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    Yes. Open your Order History and use the
                    Reorder button on a previous order. The
                    products will be added to your basket again.
                </p>

            </div>

        </div>


        <!-- FAQ 5 -->

        <div class="faq-item">

            <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
            >

                <span>
                    What happens after I place an order?
                </span>

                <span class="faq-icon">
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    After successfully placing an order, you will
                    see an Order Successful page with your Order ID.
                    Your order will then appear in Order History.
                </p>

            </div>

        </div>


        <!-- FAQ 6 -->

        <div class="faq-item">

            <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
            >

                <span>
                    How can I contact JENNY?
                </span>

                <span class="faq-icon">
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    You can visit the Contact page from the navbar
                    to find the available contact information and
                    send a message to JENNY.
                </p>

            </div>

        </div>


        <!-- FAQ 7 -->

        <div class="faq-item">

            <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
            >

                <span>
                    Can I view products by category?
                </span>

                <span class="faq-icon">
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    Yes. Products can be browsed by categories
                    such as Jewelry and Cosmetics from the
                    Products section.
                </p>

            </div>

        </div>


        <!-- FAQ 8 -->

        <div class="faq-item">

            <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
            >

                <span>
                    What should I do if a product is out of stock?
                </span>

                <span class="faq-icon">
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    If a product is out of stock, you can browse
                    other available products or check the product
                    again later.
                </p>

            </div>

        </div>


    </div>


    <!-- ================= CONTACT BOX ================= -->

    <div class="faq-contact">

        <h2>
            Still Have Questions?
        </h2>

        <p>
            If you need more information, feel free to visit
            our Contact page.
        </p>

        <a
            href="{{ route('contact') }}"
            class="contact-btn"
        >
            Contact Us
        </a>

    </div>

</section>



<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © 2026 <span>JENNY</span> Jewelry & Cosmetics
    </p>

</footer>



<!-- ================= JAVASCRIPT ================= -->

<script>

    function toggleFAQ(button)
    {
        let item = button.parentElement;

        let answer = item.querySelector('.faq-answer');

        let icon = item.querySelector('.faq-icon');


        if (answer.style.display === "block")
        {
            answer.style.display = "none";

            icon.innerHTML = "+";
        }
        else
        {
            answer.style.display = "block";

            icon.innerHTML = "×";
        }
    }

</script>


</body>

</html>

