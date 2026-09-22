<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->name }} | JENNY</title>

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

        

         /* NAVBAR */

nav {
    width: 100%;
    padding: 18px 7%;
    background: #fff;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
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

nav ul {
    display: flex;
    gap: 28px;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li a {
    text-decoration: none;
    color: #222;
    font-size: 14px;
    font-weight: bold;
    margin-left: 0;
    transition: 0.3s;
}

nav ul li a:hover {
    color: #c96f8e;
}

.nav-buttons {
    display: flex;
    gap: 10px;
    align-items: center;
}

.nav-buttons .btn {
    text-decoration: none;
    padding: 11px 18px;
    border-radius: 25px;
    font-size: 14px;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

.shop-btn {
    background: #111;
    color: #fff;
}

.cart-btn {
    background: #d98ca5;
    color: #fff;
}

.logout-btn {
    background: #111;
    color: #fff;
}

.shop-btn:hover,
.logout-btn:hover {
    background: #d98ca5;
}

.cart-btn:hover {
    background: #111;
}

        /* PRODUCT DETAIL */

        .product-detail {
            max-width: 1100px;
            margin: 100px auto;
            padding: 20px;

            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .product-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 15px;
        }

        .product-info h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .price {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .category {
            color: #d88ca0;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .description {
            color: #666;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .stock {
            margin-bottom: 25px;
            font-weight: bold;
        }

        .back-btn {
            display: inline-block;
            background: #111;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
        }

        .back-btn:hover {
            background: #d88ca0;
        }

        /* MOBILE */

        @media(max-width: 700px) {

            .product-detail {
                grid-template-columns: 1fr;
                margin: 50px auto;
            }

            .product-image img {
                height: 350px;
            }

            .product-info h1 {
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
        <li><a href="{{ route('index') }}">Home</a></li>

        <li><a href="{{ route('collection') }}">Collection</a></li>

        <li><a href="{{ url('/shop/products') }}">Products</a></li>

        <li><a href="{{ route('about') }}">About</a></li>

        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>

    <div class="nav-buttons">

        <a href="{{ url('/shop/products') }}" class="btn shop-btn">
            Shop Now
        </a>

        <a href="{{ url('/cart') }}" class="btn cart-btn">
            Basket
        </a>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf

            <button type="submit" class="btn logout-btn">
                Logout
            </button>
        </form>

    </div>

</nav>

    <!-- PRODUCT DETAIL -->

    <div class="product-detail">

        <!-- PRODUCT IMAGE -->

        <div class="product-image">

            @if($product->image)

                <img
                    src="{{ asset('storage/products/' . $product->image) }}"
                    alt="{{ $product->name }}"
                >

            @else

                <div style="
                    height:500px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    background:#f5f5f5;
                    border-radius:15px;
                ">
                    No Image
                </div>

            @endif

        </div>


        <!-- PRODUCT INFORMATION -->

        <div class="product-info">

            <div class="category">

                Category:
                {{ $product->category->name ?? 'N/A' }}

            </div>


            <h1>
                {{ $product->name }}
            </h1>


            <div class="price">

                Rs. {{ $product->price }}

            </div>


            @if($product->subcategory)

                <p style="margin-bottom:15px;">

                    Subcategory:
                    {{ $product->subcategory->name }}

                </p>

            @endif


            @if($product->quantity > 0)

                <div class="stock" style="color:green;">
                    In Stock
                </div>

            @else

                <div class="stock" style="color:red;">
                    Out of Stock
                </div>

            @endif


            <p class="description">

                Beautiful {{ $product->name }}
                available at JENNY Jewelry & Cosmetics.

                Explore this product and add it to your
                shopping basket.

            </p>

 <a href="{{ route('index') }}#hzc3zd" class="back-btn">
    Back to Products
</a>

        </div>

    </div>

</body>

</html>