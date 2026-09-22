
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | JENNY</title>

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
            color: #111;
            background: #fff;
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
            min-height: 400px;
            background: linear-gradient(135deg, #fff7fa, #fce8ef);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .hero span {
            color: #d97898;
            font-size: 14px;
            letter-spacing: 4px;
            font-weight: bold;
        }

        .hero p {
            max-width: 700px;
            margin: auto;
            color: #555;
            line-height: 1.8;
            font-size: 17px;
        }

        .about-section {
            padding: 80px 7%;
            text-align: center;
        }

        .about-section h2 {
            font-size: 38px;
            margin-bottom: 20px;
        }

        .about-section p {
            max-width: 800px;
            margin: 0 auto 20px;
            color: #666;
            line-height: 1.8;
        }

        .cards {
            margin-top: 50px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            padding: 35px;
            background: #fff7fa;
            border: 1px solid #f1d5df;
            border-radius: 18px;
        }

        .card i {
            font-size: 40px;
            color: #d97898;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 12px;
        }

        .card p {
            font-size: 14px;
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

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

// navbar
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
<section class="hero">

    <div>

        <span>ABOUT JENNY</span>

        <h1>
            Beauty With Sparkle
        </h1>

        <p>
            JENNY is a jewelry and cosmetics store created
            to bring beautiful products, elegant style and
            everyday beauty together in one place.
        </p>

    </div>

</section>


<section class="about-section">

    <h2>
        Our Story
    </h2>

    <p>
        JENNY offers a collection of imitation jewelry and
        cosmetics selected for customers who love beauty,
        elegance and a little sparkle in their everyday life.
    </p>

    <p>
        Our goal is to make shopping simple and enjoyable.
        Customers can explore products, choose their favorite
        items and place orders easily through our website.
    </p>


    <div class="cards">

        <div class="card">

            <i class="bi bi-gem"></i>

            <h3>
                Jewelry
            </h3>

            <p>
                Elegant necklaces, earrings, bracelets
                and other beautiful jewelry pieces.
            </p>

        </div>


        <div class="card">

            <i class="bi bi-stars"></i>

            <h3>
                Cosmetics
            </h3>

            <p>
                Beauty essentials including tints,
                lip products and everyday makeup.
            </p>

        </div>


        <div class="card">

            <i class="bi bi-bag-heart"></i>

            <h3>
                Easy Shopping
            </h3>

            <p>
                Browse products, add them to your basket
                and place your order easily.
            </p>

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

