<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JENNY | Our Products</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff;
            color: #111;
            overflow-x: hidden;
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

        .products-hero {
            min-height: 620px;
            margin-top: 75px;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.25),
                    rgba(0, 0, 0, 0.25)
                ),
                 url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1800&q=85');

            background-size: cover;
            background-position: center;
        }

        .hero-content {
            color: white;
            padding: 30px;
            animation: fadeUp 1.2s ease;
        }

        .hero-content small {
            letter-spacing: 5px;
            font-size: 13px;
        }

        .hero-content h1 {
            font-size: 65px;
            margin: 20px 0;
            letter-spacing: 3px;
        }

        .hero-content p {
            font-size: 18px;
            letter-spacing: 1px;
        }


        /* ================= INTRO ================= */

        .intro {
            text-align: center;
            padding: 90px 10% 70px;
        }

        .intro small {
            color: #d88ca0;
            letter-spacing: 4px;
            font-weight: bold;
        }

        .intro h2 {
            font-size: 42px;
            margin: 18px 0;
        }

        .intro p {
            max-width: 700px;
            margin: auto;
            color: #666;
            line-height: 1.8;
        }


        /* ================= PRODUCT SECTIONS ================= */

        .products-section {
            padding: 60px 7% 100px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-title small {
            color: #d88ca0;
            letter-spacing: 4px;
            font-weight: bold;
        }

        .section-title h2 {
            font-size: 42px;
            margin-top: 12px;
        }


        /* ================= IMAGE GRID ================= */

        .image-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .image-box {
            height: 390px;
            overflow: hidden;
            border-radius: 12px;
            background: #f8eef1;

            opacity: 0;
            transform: translateY(35px);

            animation: imageReveal 0.9s ease forwards;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.10);

            transition:
                transform 0.5s ease,
                box-shadow 0.5s ease;
        }

        .image-box:nth-child(1) {
            animation-delay: 0.1s;
        }

        .image-box:nth-child(2) {
            animation-delay: 0.2s;
        }

        .image-box:nth-child(3) {
            animation-delay: 0.3s;
        }

        .image-box:nth-child(4) {
            animation-delay: 0.4s;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;

            transition:
                transform 0.8s ease,
                filter 0.8s ease;
        }

        .image-box:hover {
            transform: translateY(-10px);
            box-shadow:
                0 20px 40px rgba(216, 140, 160, 0.30);
        }

        .image-box:hover img {
            transform: scale(1.10);
            filter: brightness(1.06);
        }


        /* ================= DIVIDER ================= */

        .soft-divider {
            width: 80px;
            height: 3px;
            background: #d88ca0;
            margin: 0 auto 60px;
            border-radius: 5px;
        }


        /* ================= FINAL IMAGE ================= */

        .beauty-banner {
            margin: 20px 7% 100px;
            height: 480px;
            border-radius: 15px;
            overflow: hidden;
            position: relative;

            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.20),
                    rgba(0, 0, 0, 0.20)
                ),
                url("https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=1800&q=85");

            background-size: cover;
            background-position: center;

            transition: 0.6s ease;
        }

        .beauty-banner:hover {
            transform: scale(1.01);
        }


        /* ================= FOOTER ================= */

        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 45px 20px;
        }

        footer .footer-logo {
            font-size: 28px;
            letter-spacing: 4px;
            margin-bottom: 15px;
        }

        footer span {
            color: #d88ca0;
        }

        footer p {
            color: #aaa;
            font-size: 14px;
        }


        /* ================= ANIMATIONS ================= */

        @keyframes fadeUp {

            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        @keyframes imageReveal {

            from {
                opacity: 0;
                transform: translateY(35px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 1200px) {

            nav {
                padding: 0 4%;
            }

            nav ul {
                gap: 18px;
            }

            .image-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media(max-width: 900px) {

            nav {
                padding: 0 4%;
            }

            nav ul {
                display: none;
            }

            .hero-content h1 {
                font-size: 48px;
            }

            .products-hero {
                min-height: 520px;
            }

        }


        @media(max-width: 600px) {

            nav {
                height: 65px;
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

            .products-hero {
                margin-top: 65px;
                min-height: 450px;
            }

            .hero-content h1 {
                font-size: 38px;
            }

            .hero-content p {
                font-size: 15px;
            }

            .intro {
                padding: 70px 7% 50px;
            }

            .intro h2 {
                font-size: 32px;
            }

            .section-title h2 {
                font-size: 32px;
            }

            .products-section {
                padding: 50px 5% 70px;
            }

            .image-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .image-box {
                height: 420px;
            }

            .beauty-banner {
                margin: 10px 5% 70px;
                height: 350px;
            }

        }


        @media(max-width: 420px) {

            .nav-buttons .btn {
                padding: 8px 10px;
                font-size: 11px;
            }

            .hero-content h1 {
                font-size: 32px;
            }

            .image-box {
                height: 360px;
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
                <a href="{{ route('faq') }}">
                    FAQ
                </a>
            </li>

        </ul>


        <div class="nav-buttons">

            <a href="{{ url('/shop/products') }}"
               class="btn shop-btn">
                Shop Now
            </a>

            <a href="{{ url('/cart') }}"
               class="btn cart-btn">
                Basket
            </a>

            <a href="{{ route('order.history') }}"
               class="btn cart-btn">
                Order History
            </a>


            <form action="{{ route('logout') }}"
                  method="POST"
                  style="display:inline;">

                @csrf

                <button type="submit"
                        class="btn logout-btn">
                    Logout
                </button>

            </form>

        </div>

    </nav>



    <!-- ================= HERO ================= -->

    <section class="products-hero">

        <div class="hero-content">

            <small>
                WELCOME TO JENNY
            </small>

            <h1>
                Our Products
            </h1>

            <p>
                Elegance in every detail.
            </p>

        </div>

    </section>



    <!-- ================= INTRO ================= -->

    <section class="intro">

        <small>
            JENNY COLLECTION
        </small>

        <h2>
            Beauty Meets Elegance
        </h2>

        <p>
            Discover a beautiful selection of jewelry
            and cosmetics, created to add a touch of
            elegance and beauty to every special moment.
        </p>

    </section>



    <!-- ================= JEWELRY ================= -->

    <section class="products-section">

        <div class="section-title">

            <small>
                JEWELRY
            </small>

            <h2>
                Elegant Sparkle
            </h2>

        </div>

        <div class="soft-divider"></div>


        <div class="image-grid">


            <div class="image-box">

                <img
                    src="https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?auto=format&fit=crop&w=900&q=85"
                    alt="Elegant Jewelry">

            </div>


            <div class="image-box">

                <img
                    src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=900&q=85"
                    alt="Jewelry Collection">

            </div>


            <div class="image-box">

                <img
                    src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?auto=format&fit=crop&w=900&q=85"
                    alt="Jewelry">

            </div>


            <div class="image-box">

                <img
                    src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=900&q=85"
                    alt="Jewelry Accessories">

            </div>


        </div>

    </section>



    <!-- ================= COSMETICS ================= -->

    <section class="products-section">

        <div class="section-title">

            <small>
                COSMETICS
            </small>

            <h2>
                Beauty Essentials
            </h2>

        </div>

        <div class="soft-divider"></div>


        <div class="image-grid">


            <div class="image-box">

                <img
                    src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=900&q=85"
                    alt="Cosmetics">

            </div>


            <div class="image-box">

                <img
                    src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=900&q=85"
                    alt="Beauty Products">

            </div>


            <div class="image-box">

                <img
                    src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&w=900&q=85"
                    alt="Makeup Collection">

            </div>


            <div class="image-box">

                <img
                    src="https://images.unsplash.com/photo-1631730486572-226d1f595b68?auto=format&fit=crop&w=900&q=85"
                    alt="Cosmetics Collection">

            </div>


        </div>

    </section>



    <!-- ================= BEAUTY BANNER ================= -->

    <div class="beauty-banner"></div>



    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-logo">

            JENNY<span>.</span>

        </div>

        <p>
            Jewelry & Cosmetics
        </p>

        <br>

        <p>
            © 2026 JENNY. All Rights Reserved.
        </p>

    </footer>


</body>

</html>