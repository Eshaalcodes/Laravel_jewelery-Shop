<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JENNY | Jewelry & Cosmetics</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

        /* ================= HERO ================= */

        .hero {
            min-height: 100vh;
            margin-top: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

            background:
                linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)),
                url("https://i.pinimg.com/736x/6e/4a/27/6e4a27f8b7b8f5128e682f5843e3ffa2.jpg");

            background-size: cover;
            background-position: center;
        }

        .hero-content {
            color: white;
            max-width: 800px;
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
            letter-spacing: 2px;
        }

        .hero-content p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .hero-btn {
            display: inline-block;
            padding: 15px 35px;
            background: #d88ca0;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            transition: 0.3s;
        }

        .hero-btn:hover {
            background: #111;
            transform: scale(1.05);
        }

        /* ================= INTRO ================= */

        .intro {
            text-align: center;
            padding: 100px 10%;
        }

        .intro small {
            color: #d88ca0;
            letter-spacing: 4px;
            font-weight: bold;
        }

        .intro h2 {
            font-size: 42px;
            margin: 20px 0;
        }

        .intro p {
            max-width: 750px;
            margin: auto;
            line-height: 1.8;
            color: #666;
        }

        /* ================= COLLECTIONS ================= */

        .collections {
            padding: 50px 7% 100px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title small {
            color: #d88ca0;
            letter-spacing: 4px;
        }

        .section-title h2 {
            font-size: 42px;
            margin-top: 12px;
        }

        .collection-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .collection-card {
            height: 600px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 45px;
            background-size: cover;
            background-position: center;
            transition: 0.5s;
        }

        .collection-card:hover {
            transform: translateY(-8px);
        }

        .jewelry-img {
            background-image:
                linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.5)),
                url("https://zerakijewels.com/cdn/shop/files/1fd2a360-3aba-40fc-9331-1eb27edb9363.png?v=1783325950&width=1086");
        }

        .cosmetics-img {
            background-image:
                linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.5)),
                url("https://i.pinimg.com/originals/22/ec/3f/22ec3f84ff5961d8f0b8a1971ad1a016.png?nii=t");
        }

        .collection-content {
            color: white;
        }

        .collection-content h3 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .collection-content p {
            margin-bottom: 20px;
        }

        .collection-content a {
            display: inline-block;
            padding: 12px 25px;
            background: white;
            color: #111;
            text-decoration: none;
            border-radius: 25px;
        }

        /* ================= MOVING TEXT ================= */

        .marquee {
            overflow: hidden;
            background: #111;
            color: white;
            padding: 20px 0;
            white-space: nowrap;
        }

        .marquee-content {
            display: inline-block;
            animation: moveText 18s linear infinite;
            font-size: 20px;
            letter-spacing: 4px;
        }

        @keyframes moveText {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        /* ================= FEATURES ================= */

        .features {
            padding: 100px 7%;
            background: #faf7f8;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .feature {
            background: white;
            padding: 40px 25px;
            text-align: center;
            border-radius: 10px;
            transition: 0.4s;
        }

        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .feature-number {
            font-size: 30px;
            color: #d88ca0;
            margin-bottom: 20px;
        }

        .feature h3 {
            margin-bottom: 12px;
        }

        .feature p {
            color: #777;
            line-height: 1.6;
        }

        /* ================= STORY ================= */

        .story {
            padding: 100px 7%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .story-image {
            height: 600px;
            background-image:
                url("https://i.pinimg.com/736x/4d/67/e2/4d67e2149e993cbf3864350339c534b7.jpg");
            background-size: cover;
            background-position: center;
        }

        .story-content small {
            color: #d88ca0;
            letter-spacing: 4px;
            font-weight: bold;
        }

        .story-content h2 {
            font-size: 45px;
            margin: 20px 0;
        }

        .story-content p {
            color: #666;
            line-height: 1.9;
            margin-bottom: 20px;
        }

        /* ================= FINAL BANNER ================= */

        .final-banner {
            min-height: 550px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

            background:
                linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
                url("https://i.pinimg.com/736x/27/09/fc/2709fc15e6b6488a075546ea85e4faa7.jpg");

            background-size: cover;
            background-position: center;
        }

        .final-content {
            color: white;
            max-width: 750px;
            padding: 30px;
        }

        .final-content h2 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .final-content p {
            line-height: 1.7;
            margin-bottom: 30px;
        }

        /* ================= ABOUT ================= */

        .about {
            padding: 100px 10%;
            text-align: center;
        }

        .about h2 {
            font-size: 42px;
            margin-bottom: 25px;
        }

        .about p {
            max-width: 800px;
            margin: auto;
            color: #666;
            line-height: 1.9;
        }

        /* ================= CONTACT ================= */

        .contact {
            background: #f8eef1;
            padding: 90px 10%;
            text-align: center;
        }

        .contact h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .contact p {
            color: #666;
            margin-bottom: 30px;
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

        /* ================= CHAT ================= */

        .chat-button {
            position: fixed;
            right: 25px;
            bottom: 25px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #111;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 2000;
            font-size: 24px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.25);
        }

        .chat-box {
            position: fixed;
            right: 25px;
            bottom: 95px;
            width: 320px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            overflow: hidden;
            display: none;
            z-index: 2000;
        }

        .chat-header {
            background: #111;
            color: white;
            padding: 18px;
            font-weight: bold;
        }
        .chat-close {
    float: right;
    background: none;
    border: none;
    color: white;
    font-size: 25px;
    cursor: pointer;
    line-height: 20px;
}

.chat-close:hover {
    color: #d88ca0;
}

        .chat-messages {
            height: 250px;
            overflow-y: auto;
            padding: 15px;
        }

        .message {
            background: #f4e6e9;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .chat-input {
            display: flex;
            border-top: 1px solid #ddd;
        }

        .chat-input input {
            width: 100%;
            padding: 14px;
            border: none;
            outline: none;
        }

        .chat-input button {
            width: 60px;
            border: none;
            background: #d88ca0;
            color: white;
            cursor: pointer;
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

        /* ================= RESPONSIVE ================= */

        @media(max-width: 900px) {

            nav {
                padding: 0 4%;
            }

            nav ul {
                display: none;
            }

            .hero-content h1 {
                font-size: 45px;
            }

            .collection-grid,
            .story {
                grid-template-columns: 1fr;
            }

            .feature-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media(max-width: 600px) {

            nav {
                height: 65px;
            }

            .logo {
                font-size: 22px;
            }

            .nav-buttons .btn {
                padding: 9px 13px;
                font-size: 12px;
            }

            .hero {
                margin-top: 65px;
            }

            .hero-content h1 {
                font-size: 38px;
            }

            .hero-content p {
                font-size: 15px;
            }

            .intro h2,
            .section-title h2,
            .about h2 {
                font-size: 32px;
            }

            .collection-card {
                height: 450px;
                padding: 25px;
            }

            .collection-content h3 {
                font-size: 30px;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

            .story-image {
                height: 400px;
            }

            .story-content h2 {
                font-size: 34px;
            }

            .final-content h2 {
                font-size: 35px;
            }

            .chat-box {
                width: calc(100% - 40px);
                right: 20px;
            }

            
 

        }

        /* ================= PRODUCT CARD ANIMATION ================= */

.product-card {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    animation: productFade 0.8s ease both;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.product-card img {
    transition: transform 0.5s ease;
}

.product-card:hover img {
    transform: scale(1.06);
}

@keyframes productFade {
    from {
        opacity: 0;
        transform: translateY(25px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
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




/* =========================
   JENNY AUTO CAROUSEL
========================= */
 .jenny-carousel {
    width: 100%;
    max-width: 1100px;
    margin: 30px auto 45px;
    padding: 0 15px;
    box-sizing: border-box;
}

.jenny-carousel-track {
    width: 100%;
    height: 260px;
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    background: #fdf5f8;
}

.jenny-slide {
    width: 100%;
    height: 100%;
    display: none;
    align-items: center;
    justify-content: center;
}

.jenny-slide.active {
    display: flex;
}

.jenny-slide img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    display: block;
}


/* TABLET */

@media (max-width: 768px) {

    .jenny-carousel-track {
        height: 200px;
    }

}


/* MOBILE */

@media (max-width: 480px) {

    .jenny-carousel {
        padding: 0 8px;
        margin: 20px auto 30px;
    }

    .jenny-carousel-track {
        height: 160px;
        border-radius: 10px;
    }

}


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #111111;
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

  

        /* HERO */

        .collection-hero {
            min-height: 430px;
            background: linear-gradient(
                135deg,
                #fff7fa,
                #fce8ef
            );

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 70px 20px;
        }

        .hero-content {
            max-width: 850px;
        }

        .small-title {
            color: #d97898;
            letter-spacing: 4px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .hero-content h1 {
            font-size: 60px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 18px;
            color: #555555;
            line-height: 1.7;
            max-width: 700px;
            margin: auto;
        }

        /* COLLECTION INTRO */

        .intro {
            text-align: center;
            padding: 75px 7% 35px;
        }

        .intro h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .intro p {
            max-width: 700px;
            margin: auto;
            color: #666666;
            line-height: 1.7;
        }

        /* CATEGORY BOXES */

        .category-area {
            padding: 35px 7% 70px;
        }

        .category-boxes {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .category-box {
            padding: 40px;
            background: #111111;
            color: white;
            border-radius: 18px;
            text-align: center;
            transition: 0.3s;
        }

        .category-box:hover {
            transform: translateY(-5px);
        }

        .category-box i {
            font-size: 40px;
            color: #e58fa9;
            margin-bottom: 15px;
        }

        .category-box h3 {
            font-size: 27px;
            margin-bottom: 10px;
        }

        .category-box p {
            color: #dddddd;
            line-height: 1.6;
        }

        /* PRODUCT SECTION */

        .products-section {
            padding: 70px 7%;
            background: #fff7fa;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-heading span {
            color: #d97898;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .section-heading h2 {
            font-size: 38px;
            margin-top: 10px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .product-card {
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid #f1d5df;
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            background: #fce8ef;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .product-description {
            color: #777777;
            font-size: 14px;
            min-height: 42px;
            line-height: 1.5;
        }

        .product-price {
            color: #d97898;
            font-size: 20px;
            font-weight: bold;
            margin: 13px 0;
        }

        .stock {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .available {
            color: #4d8b5a;
        }

        .out-stock {
            color: #cc4c4c;
        }

        .view-btn {
            display: inline-block;
            text-decoration: none;
            background: #111111;
            color: #ffffff;
            padding: 10px 17px;
            border-radius: 25px;
            font-size: 13px;
            transition: 0.3s;
        }

        .view-btn:hover {
            background: #d97898;
            color: white;
        }

        /* EMPTY */

        .empty-message {
            text-align: center;
            padding: 35px;
            background: #ffffff;
            border-radius: 15px;
            color: #777777;
        }

        /* FEATURE STRIP */

        .features {
            padding: 65px 7%;
            background: #111111;
            color: white;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: center;
        }

        .feature i {
            font-size: 35px;
            color: #e58fa9;
            margin-bottom: 15px;
        }

        .feature h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .feature p {
            color: #cccccc;
            line-height: 1.6;
        }

        /* FOOTER */

        footer {
            background: #ffffff;
            padding: 35px 7%;
            text-align: center;
            border-top: 1px solid #f3dce4;
        }

        footer .footer-logo {
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 4px;
            margin-bottom: 10px;
        }

        footer p {
            color: #777777;
            font-size: 14px;
        }

        /* MOBILE */

        @media (max-width: 1000px) {

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 700px) {

            .navbar {
                padding: 18px 5%;
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-content h1 {
                font-size: 40px;
            }

            .category-boxes {
                grid-template-columns: 1fr;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

        }

 

    </style>

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/home.css')}}">
</head>

<body>

    <!-- ================= NAVBAR ================= -->
 <nav>

    <div class="logo">
        JENNY<span>.</span>
    </div>

    <ul>
        <li><a href="{{ route('index') }}">Home</a></li>

        <li><a href="{{ route('collection') }}">Collection</a></li>

        <li><a href="{{ url('/shop/products') }}">Products</a></li>

        <li><a href="{{ route('about') }}">About</a></li>

        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li>
    <a href="{{ route('faq') }}">FAQ</a>
</li>
    </ul>

    <div class="nav-buttons">
@if (Auth::check())
   @if (Auth::user()->role=='admin')
     <a href="{{ route('admin') }}" class="btn shop-btn">
    Dashboard
</a> 

@endif


@endif




    

        <a href="{{ url('/shop/products') }}" class="btn shop-btn">
            Shop Now
        </a>

        <a href="{{ url('/cart') }}" class="btn cart-btn">
            Basket
        </a>
        <a href="{{ route('order.history') }}" class="btn cart-btn">Order History</a>
@if (Auth::check())
   
 <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf

            <button type="submit" class="btn logout-btn">
                Logout
            </button>
        </form>

        @else
      <a href="{{ route('order.history') }}" class="btn cart-btn">Sign In </a>
        <a href="{{ route('order.history') }}" class="btn cart-btn">Sign Up</a>
@endif

     

       

    </div>

</nav>

@yield('website')

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


    <!-- ================= CHAT BUTTON ================= -->

    <div class="chat-button" onclick="toggleChat()">
        💬
    </div>


    <!-- ================= CHAT BOX ================= -->

    <div class="chat-box" id="chatBox">

        <div class="chat-header">
    <span>JENNY Customer Care</span>

    <button onclick="toggleChat()" class="chat-close">
        ×
    </button>
</div>

        <div class="chat-messages" id="chatMessages">

            <div class="message">
                Hello! 👋 Welcome to JENNY.
                How can we help you?
            </div>

        </div>

        <div class="chat-input">

            <input
                type="text"
                id="chatInput"
                placeholder="Type your message..."
                onkeydown="if(event.key==='Enter') sendMessage()"
            >

            <button onclick="sendMessage()">
                ➤
            </button>

        </div>

    </div>


    <!-- ================= JAVASCRIPT ================= -->

    <script>

        function toggleChat() {

            const chatBox =
                document.getElementById("chatBox");

            if (chatBox.style.display === "block") {

                chatBox.style.display = "none";

            } else {

                chatBox.style.display = "block";

            }

        }


        function sendMessage() {

            const input =
                document.getElementById("chatInput");

            const messages =
                document.getElementById("chatMessages");

            const text =
                input.value.trim();

            if (text === "") {
                return;
            }


            const userMessage =
                document.createElement("div");

            userMessage.className = "message";

            userMessage.innerText = text;

            messages.appendChild(userMessage);


            let reply =
                "Thank you for contacting JENNY. Please explore our products.";


            const lowerText =
                text.toLowerCase();


            if (
                lowerText.includes("jewelry") ||
                lowerText.includes("jewellery")
            ) {

                reply =
                    "You can find our jewelry products in the Products section.";

            }


            else if (
                lowerText.includes("cosmetic") ||
                lowerText.includes("makeup")
            ) {

                reply =
                    "You can explore our cosmetics collection from the Products page.";

            }


            else if (
                lowerText.includes("cart") ||
                lowerText.includes("basket")
            ) {

                reply =
                    "You can view your shopping basket by clicking the Basket button.";

            }


            else if (
                lowerText.includes("buy") ||
                lowerText.includes("shop") ||
                lowerText.includes("product")
            ) {

                reply =
                    "Sure! Click Shop Now to explore our available products.";

            }


            else if (
                lowerText.includes("hello") ||
                lowerText.includes("hi") ||
                lowerText.includes("salam")
            ) {

                reply =
                    "Hello! Welcome to JENNY Jewelry & Cosmetics. 💕";

            }


            setTimeout(function() {

                const botMessage =
                    document.createElement("div");

                botMessage.className = "message";

                botMessage.innerText = reply;

                messages.appendChild(botMessage);

                messages.scrollTop =
                    messages.scrollHeight;

            }, 500);


            input.value = "";

        }




        // auto carosel
        
document.addEventListener("DOMContentLoaded", function () {

    const slides = document.querySelectorAll(".jenny-slide");

    let currentSlide = 0;

    setInterval(function () {

        slides[currentSlide].classList.remove("active");

        currentSlide++;

        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }

        slides[currentSlide].classList.add("active");

    }, 3500);

});


    </script>

</body>

</html>