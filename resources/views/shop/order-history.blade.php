<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JENNY | Order History</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #fff;
            color: #111;
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

        /* PAGE */

        .page {
            padding: 120px 7% 60px;
        }

        .page h1 {
            text-align: center;
            font-size: 38px;
            margin-bottom: 10px;
        }

        .page-subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 40px;
        }

        /* ORDER CARD */

        .order-card {
            max-width: 900px;
            margin: 0 auto 25px;
            padding: 25px;
            border-radius: 18px;
            background: #fff;
            border: 1px solid #f0d5de;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .order-header h2 {
            font-size: 20px;
        }

        .status {
            padding: 8px 16px;
            border-radius: 20px;
            background: #f8d7e2;
            color: #111;
            font-size: 13px;
            font-weight: bold;
        }

        .order-info {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .info-box {
            background: #fafafa;
            padding: 12px 15px;
            border-radius: 10px;
            min-width: 180px;
        }

        .info-box strong {
            display: block;
            margin-bottom: 5px;
        }

        .products-title {
            margin-bottom: 12px;
            font-size: 18px;
        }

        .product-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .order-total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            margin-top: 18px;
        }

        .empty {
            text-align: center;
            padding: 50px 20px;
            color: #777;
        }

        .shop-link {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #111;
            color: white;
            text-decoration: none;
            border-radius: 25px;
        }

        /* MOBILE */

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

            .page {
                padding: 110px 5% 40px;
            }

            .page h1 {
                font-size: 30px;
            }

            .order-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .order-info {
                display: block;
            }

            .info-box {
                margin-bottom: 10px;
            }

            .product-item {
                gap: 10px;
            }
        }
        .reorder-btn {
    display: inline-block;
    margin-top: 15px;
    padding: 12px 25px;
    background: #d88ca0;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 25px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.reorder-btn:hover {
    background: #111;
    transform: translateY(-3px);
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
            <a href="{{ route('order.history') }}" class="btn cart-btn">Order History</a>

            <form action="{{ route('logout') }}" method="POST" style="display:inline;">

                @csrf

                <button type="submit" class="btn logout-btn">
                    Logout
                </button>

            </form>

        </div>

    </nav>


    <!-- ORDER HISTORY -->

    <section class="page">

        <h1>Order History</h1>

        <p class="page-subtitle">
            View your previous orders and order details
        </p>


        @if ($orders->count() > 0)

            @foreach ($orders as $order)

                <div class="order-card">

                    <div class="order-header">

                        <h2>
                            Order #{{ $order->id }}
                        </h2>

                        <span class="status">
                            {{ $order->status }}
                        </span>

                    </div>


                    <div class="order-info">

                        <div class="info-box">

                            <strong>Order Date</strong>

                            {{ $order->created_at->format('d M Y') }}

                        </div>


                        <div class="info-box">

                            <strong>Customer</strong>

                            {{ $order->name }}

                        </div>


                        <div class="info-box">

                            <strong>Email</strong>

                            {{ $order->email }}

                        </div>

                    </div>


                    <h3 class="products-title">
                        Products
                    </h3>


                    @foreach ($order->items as $item)

                        <div class="product-item">

                            <span>
                                {{ $item->product->name }}
                                ×
                                {{ $item->quantity }}
                            </span>

                            <span>
                                Rs. {{ $item->price * $item->quantity }}
                            </span>

                        </div>

                    @endforeach

                 <div class="order-total">

    Total:
    Rs. {{ $order->total }}

    <br>

    <button
        type="button"
        class="reorder-btn"
        onclick='reorderOrder(@json($order->items))'
    >
        Reorder
    </button>

</div>

                </div>

            @endforeach

        @else

            <div class="empty">

                <h2>No Orders Yet</h2>

                <p>
                    You have not placed any orders yet.
                </p>

                <a href="{{ url('/shop/products') }}" class="shop-link">
                    Shop Now
                </a>

            </div>

        @endif

    </section>

    <script>

function reorderOrder(items)
{
    let cart = [];

    items.forEach(function(item)
    {
        if (!item.product)
        {
            return;
        }

        cart.push({
            id: item.product.id,
            name: item.product.name,
            price: item.product.price,
            image: item.product.image,
            quantity: item.quantity
        });
    });

    localStorage.setItem(
        'cart',
        JSON.stringify(cart)
    );

    window.location.href = '/cart';
}

</script>

</body>

</html>