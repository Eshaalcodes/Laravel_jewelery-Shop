```blade
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JENNY | Products</title>

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
            background:
                linear-gradient(
                    135deg,
                    #fff6f8,
                    #fde9ef,
                    #fff
                );

            padding: 70px 7%;
            text-align: center;
        }

        .hero small {
            color: #c96f8e;
            letter-spacing: 3px;
            font-weight: bold;
        }

        .hero h1 {
            font-family: Georgia, serif;
            font-size: 52px;
            margin: 15px 0;
            color: #111;
        }

        .hero p {
            max-width: 650px;
            margin: auto;
            color: #666;
            line-height: 1.8;
        }

        /* ================= SEARCH ================= */

        .search-area {
            padding: 35px 7% 15px;
            background: #fff;
        }

        .search-box {
            max-width: 700px;
            margin: auto;
            display: flex;
            gap: 10px;
        }

        .search-box input {
            flex: 1;
            padding: 15px 20px;
            border: 1px solid #ddd;
            border-radius: 30px;
            outline: none;
            font-size: 15px;
        }

        .search-box input:focus {
            border-color: #d98ca5;
        }

        .search-box button {
            border: none;
            padding: 0 25px;
            border-radius: 30px;
            background: #111;
            color: white;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .search-box button:hover {
            background: #d98ca5;
        }

        .show-all {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #c96f8e;
            text-decoration: none;
            font-weight: bold;
        }

        /* ================= PRODUCTS ================= */

        .products-section {
            padding: 45px 7% 80px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-heading small {
            color: #c96f8e;
            letter-spacing: 3px;
            font-weight: bold;
        }

        .section-heading h2 {
            font-family: Georgia, serif;
            font-size: 38px;
            margin-top: 10px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1250px;
            margin: auto;
        }

        /* ================= PRODUCT CARD ================= */

        .product-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            transition: 0.4s ease;
            animation: cardAppear 0.7s ease;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
        }

        @keyframes cardAppear {

            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        .product-image {
            width: 100%;
            height: 320px;
            background: #fdf1f4;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.06);
        }

        .no-image {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #999;
            font-size: 16px;
        }

        .product-content {
            padding: 24px;
        }

        .product-content h2 {
            font-family: Georgia, serif;
            font-size: 24px;
            margin-bottom: 12px;
            color: #111;
        }

        .product-content h2 a {
            text-decoration: none;
            color: #111;
        }

        .category {
            color: #c96f8e;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .subcategory {
            color: #777;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .description {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            min-height: 45px;
            margin-bottom: 15px;
        }

        .price {
            font-size: 22px;
            font-weight: bold;
            color: #111;
            margin-bottom: 8px;
        }

        .quantity {
            font-size: 13px;
            color: #777;
            margin-bottom: 18px;
        }

        /* ================= BUTTON ================= */

        .cart-button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 30px;
            background: #111;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .cart-button:hover {
            background: #d98ca5;
            transform: translateY(-2px);
        }

        .out-stock {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 30px;
            background: #ddd;
            color: #777;
            font-weight: bold;
            cursor: not-allowed;
        }

        /* ================= EMPTY ================= */

        .empty-products {
            text-align: center;
            padding: 70px 20px;
            color: #777;
        }

        .empty-products h3 {
            font-family: Georgia, serif;
            font-size: 28px;
            color: #222;
            margin-bottom: 10px;
        }

        /* ================= BASKET ================= */

        .bottom-basket {
            text-align: center;
            margin-top: 20px;
        }

        .bottom-basket a {
            display: inline-block;
            text-decoration: none;
            background: #d98ca5;
            color: white;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .bottom-basket a:hover {
            background: #111;
            transform: translateY(-2px);
        }

        /* ================= FOOTER ================= */

        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        footer .footer-logo {
            font-size: 25px;
            letter-spacing: 5px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        footer .footer-logo span {
            color: #d98ca5;
        }

        footer p {
            color: #bbb;
            font-size: 13px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 950px) {

            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

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

            .hero {
                padding: 50px 5%;
                margin-top: 65px;
            }

            .hero h1 {
                font-size: 38px;
            }

            .products-section {
                padding-left: 5%;
                padding-right: 5%;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .search-area {
                padding-left: 5%;
                padding-right: 5%;
            }

            .search-box {
                flex-direction: column;
            }

            .search-box button {
                padding: 13px;
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

<!-- ================= HERO ================= -->

<section class="hero">

    <small>
        JENNY JEWELRY & COSMETICS
    </small>

    <h1>
        Discover Your Beauty
    </h1>

    <p>
        Explore our beautiful collection of jewelry and cosmetics,
        carefully selected to add elegance, confidence and sparkle
        to your everyday style.
    </p>

</section>


<!-- ================= SEARCH ================= -->

<section class="search-area">

    <form
        action="/shop/products"
        method="GET"
        class="search-box"
    >

        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Search product by name..."
        >

        <button type="submit">
            Search
        </button>

    </form>


    @if(request('search'))

        <a
            href="/shop/products"
            class="show-all"
        >
            ✨ Show All Products
        </a>

    @endif

</section>


<!-- ================= PRODUCTS ================= -->

<section class="products-section">

    <div class="section-heading">

        <small>
            OUR COLLECTION
        </small>

        <h2>
            Featured Products
        </h2>

    </div>


    <!-- CATEGORY BUTTONS -->

    <div style="text-align:center; margin:25px 0;">

        <a
            href="{{ url('/shop/products') }}"
            style="
                text-decoration:none;
                background:#111;
                color:white;
                padding:10px 20px;
                border-radius:25px;
                margin:5px;
                display:inline-block;
            "
        >
            All Products
        </a>

        <a
            href="{{ url('/shop/products?category=Jewelery') }}"
            style="
                text-decoration:none;
                background:#d88ca0;
                color:white;
                padding:10px 20px;
                border-radius:25px;
                margin:5px;
                display:inline-block;
            "
        >
            Jewelry
        </a>

        <a
            href="{{ url('/shop/products?category=Cosmetics') }}"
            style="
                text-decoration:none;
                background:#d88ca0;
                color:white;
                padding:10px 20px;
                border-radius:25px;
                margin:5px;
                display:inline-block;
            "
        >
            Cosmetics
        </a>

    </div>


    @if($products->count() > 0)

        <div class="products-grid">

            @foreach($products as $product)

                <div class="product-card">


                    <!-- IMAGE -->

                    <div class="product-image">

                        @if($product->image)

                            <a href="{{ route('shop.product.detail', $product->id) }}">

                                <img
                                    src="{{ asset('storage/products/' . $product->image) }}"
                                    alt="{{ $product->name }}"
                                >

                            </a>

                        @else

                            <div class="no-image">
                                No Image Available
                            </div>

                        @endif

                    </div>


                    <!-- CONTENT -->

                    <div class="product-content">


                        <!-- NAME -->

                        <h2>

                            <a
                                href="{{ route('shop.product.detail', $product->id) }}"
                            >
                                {{ $product->name }}
                            </a>

                        </h2>


                        <!-- CATEGORY -->

                        <p class="category">

                            Category:
                            {{ $product->category->name ?? 'N/A' }}

                        </p>


                        <!-- SUBCATEGORY -->

                        <p class="subcategory">

                            Subcategory:
                            {{ $product->subcategory->name ?? 'N/A' }}

                        </p>


                        <!-- DESCRIPTION -->

                        <p class="description">

                            {{ $product->description }}

                        </p>


                        <!-- PRICE -->

                        <div class="price">

                            Rs. {{ $product->price }}

                        </div>


                        <!-- QUANTITY -->

                        <p class="quantity">

                            Available Quantity:
                            {{ $product->quantity }}

                        </p>


                        <!-- ADD TO CART -->

                        @if($product->quantity > 0)

                            <button
                                type="button"
                                class="cart-button"
                                onclick="addToCart(
                                    {{ $product->id }},
                                    @js($product->name),
                                    {{ $product->price }},
                                    @js($product->image),
                                    {{ $product->quantity }}
                                )"
                            >
                                🛒 Add to Basket
                            </button>

                        @else

                            <button
                                type="button"
                                class="out-stock"
                                disabled
                            >
                                Out of Stock
                            </button>

                        @endif


                    </div>

                </div>

            @endforeach

        </div>


        <!-- ================= PAGINATION ================= -->

        @if ($products->hasPages())

            <div style="text-align:center; margin-top:30px;">

                @if ($products->onFirstPage())

                    <span style="
                        display:inline-block;
                        padding:10px 18px;
                        margin:5px;
                        border-radius:25px;
                        background:#eee;
                        color:#999;
                    ">
                        Previous
                    </span>

                @else

                    <a
                        href="{{ $products->previousPageUrl() }}"
                        style="
                            display:inline-block;
                            padding:10px 18px;
                            margin:5px;
                            border-radius:25px;
                            background:#111;
                            color:white;
                            text-decoration:none;
                        "
                    >
                        Previous
                    </a>

                @endif


                @for ($page = 1; $page <= $products->lastPage(); $page++)

                    @if ($page == $products->currentPage())

                        <span style="
                            display:inline-block;
                            padding:10px 15px;
                            margin:5px;
                            border-radius:50%;
                            background:#d88ca0;
                            color:white;
                        ">
                            {{ $page }}
                        </span>

                    @else

                        <a
                            href="{{ $products->url($page) }}"
                            style="
                                display:inline-block;
                                padding:10px 15px;
                                margin:5px;
                                border-radius:50%;
                                background:white;
                                color:#111;
                                border:1px solid #d88ca0;
                                text-decoration:none;
                            "
                        >
                            {{ $page }}
                        </a>

                    @endif

                @endfor


                @if ($products->hasMorePages())

                    <a
                        href="{{ $products->nextPageUrl() }}"
                        style="
                            display:inline-block;
                            padding:10px 18px;
                            margin:5px;
                            border-radius:25px;
                            background:#111;
                            color:white;
                            text-decoration:none;
                        "
                    >
                        Next
                    </a>

                @else

                    <span style="
                        display:inline-block;
                        padding:10px 18px;
                        margin:5px;
                        border-radius:25px;
                        background:#eee;
                        color:#999;
                    ">
                        Next
                    </span>

                @endif

            </div>

        @endif


    @else

        <div class="empty-products">

            <h3>
                No Products Found
            </h3>

            <p>
                Sorry, we couldn't find a product matching your search.
            </p>

        </div>

    @endif


    <!-- BASKET BUTTON -->

    <div class="bottom-basket">

        <a href="/cart">
            🛒 Go To Basket
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


<!-- ================= CART JAVASCRIPT ================= -->

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


function addToCart(
    id,
    name,
    price,
    image,
    availableQuantity
)
{

    let cart = getCart();


    let product = cart.find(function(item)
    {
        return item.id == id;
    });


    if (product)
    {

        if (product.quantity < availableQuantity)
        {
            product.quantity++;
        }
        else
        {
            alert(
                'Maximum available quantity reached.'
            );

            return;
        }

    }

    else
    {

        cart.push({

            id: id,

            name: name,

            price: price,

            image: image,

            quantity: 1

        });

    }


    saveCart(cart);


    alert(
        name + ' added to basket!'
    );

}

</script>


</body>

</html>
```
