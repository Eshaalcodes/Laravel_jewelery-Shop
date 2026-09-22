
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | JENNY</title>

    <link rel="stylesheet"
          href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('assets/css/bootstrap-icons.css') }}">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff;
            color: #111;
        }

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

        .hero {
            min-height: 380px;
            background: linear-gradient(135deg, #fff7fa, #fce8ef);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 20px;
        }

        .hero span {
            color: #d97898;
            letter-spacing: 4px;
            font-size: 14px;
            font-weight: bold;
        }

        .hero h1 {
            font-size: 55px;
            margin: 18px 0;
        }

        .hero p {
            max-width: 650px;
            margin: auto;
            color: #555;
            line-height: 1.7;
        }

        .contact-section {
            padding: 75px 7%;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .contact-info {
            background: #111;
            color: white;
            padding: 40px;
            border-radius: 18px;
        }

        .contact-info h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .contact-info p {
            color: #ddd;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .info-item {
            display: flex;
            gap: 15px;
            margin: 22px 0;
            align-items: center;
        }

        .info-item i {
            color: #e58fa9;
            font-size: 25px;
        }

        .contact-form {
            padding: 40px;
            background: #fff7fa;
            border: 1px solid #f1d5df;
            border-radius: 18px;
        }

        .contact-form h2 {
            margin-bottom: 25px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 18px;
            border: 1px solid #e5cbd4;
            border-radius: 8px;
            outline: none;
            font-family: Arial, sans-serif;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #d97898;
        }

        .contact-form textarea {
            height: 130px;
            resize: none;
        }

        .contact-form button {
            border: none;
            background: #d97898;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
        }

        .contact-form button:hover {
            background: #111;
        }

        .success-message {
            background: #e8f8ee;
            color: #1f7a45;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 35px;
        }

        footer .footer-logo {
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 4px;
        }

        footer p {
            color: #ccc;
            margin-top: 8px;
        }

        @media (max-width: 700px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 40px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

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

        <a href="{{ url('/shop/products') }}" class="btn shop-btn">
            Shop Now
        </a>

        <a href="{{ url('/cart') }}" class="btn cart-btn">
            Basket
        </a>
        <a href="{{ route('order.history') }}" class="btn cart-btn">Order History</a>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf

            <button type="submit" class="btn logout-btn">
                Logout
            </button>
        </form>

    </div>

</nav>


<section class="hero">

    <div>

        <span>
            GET IN TOUCH
        </span>

        <h1>
            Contact JENNY
        </h1>

        <p>
            Have a question about our jewelry or cosmetics?
            We would love to hear from you.
        </p>

    </div>

</section>


<section class="contact-section">

    <div class="contact-grid">


        <div class="contact-info">

            <h2>
                Let's Connect
            </h2>

            <p>
                Feel free to contact JENNY for questions
                about products, orders or anything else.
            </p>


            <div class="info-item">

                <i class="bi bi-envelope"></i>

                <span>
                    jenny@example.com
                </span>

            </div>


            <div class="info-item">

                <i class="bi bi-telephone"></i>

                <span>
                    +92 300 1234567
                </span>

            </div>


            <div class="info-item">

                <i class="bi bi-geo-alt"></i>

                <span>
                    Pakistan
                </span>

            </div>


            <div class="info-item">

                <i class="bi bi-clock"></i>

                <span>
                    Mon - Sat | 10:00 AM - 7:00 PM
                </span>

            </div>

        </div>


        <div class="contact-form">

            <h2>
                Send Us a Message
            </h2>


            @if(session('success'))

                <div class="success-message">
                    {{ session('success') }}
                </div>

            @endif


            <form action="/contact/send" method="POST">

                @csrf


                <input
                    type="text"
                    name="name"
                    placeholder="Your Name"
                    required
                >


                <input
                    type="email"
                    name="email"
                    placeholder="Your Email"
                    required
                >


                <input
                    type="text"
                    name="subject"
                    placeholder="Subject"
                    required
                >


                <textarea
                    name="message"
                    placeholder="Your Message"
                    required
                ></textarea>


                <button type="submit">
                    Send Message
                </button>

            </form>

        </div>

    </div>

</section>


<footer>

    <div class="footer-logo">
        JENNY.
    </div>

    <p>
        Jewelry & Cosmetics
    </p>

    <p>
        © {{ date('Y') }} JENNY. All Rights Reserved.
    </p>

</footer>


</body>

</html>

