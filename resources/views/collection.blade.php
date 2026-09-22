@extends('usernav')

@section('website')

<!-- HERO -->

<section class="collection-hero">

    <div class="hero-content">

        <div class="small-title">
            JENNY COLLECTION
        </div>

        <h1 style='color:#DB7093'>
            Beauty Meets Sparkle
        </h1>

        <p>
            Explore our carefully selected collection of
            beautiful jewelry and cosmetics made to add
            elegance, confidence and sparkle to your everyday style.
        </p>

    </div>

</section>


<!-- INTRO -->

<section class="intro">

    <h2>
        Discover Your Collection
    </h2>

    <p>
        From elegant jewelry pieces to everyday beauty essentials,
        JENNY brings together products that make your personal style
        feel special.
    </p>

</section>


<!-- CATEGORY BOXES -->

<section class="category-area">

    <div class="category-boxes">

        <div class="category-box">

            <i class="bi bi-gem"></i>

            <h3>
                Jewelry
            </h3>

            <p>
                Discover beautiful imitation jewelry,
                necklaces, earrings, bracelets and more.
            </p>

        </div>


        <div class="category-box">

            <i class="bi bi-stars"></i>

            <h3>
                Cosmetics
            </h3>

            <p>
                Explore beauty essentials including
                makeup products, tints, lip products and more.
            </p>

        </div>

    </div>

</section>


<!-- JEWELRY -->

<section class="products-section">

    <div class="section-heading">

        <span>
            OUR JEWELRY
        </span>

        <h2>
            Jewelry Collection
        </h2>

    </div>


    @if($jewelryProducts->count() > 0)

        <div class="product-grid">

            @foreach($jewelryProducts as $product)

                <div class="product-card">

                    @if($product->image)

                        <img
                            src="{{ asset('storage/products/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="product-image"
                        >

                    @else

                        <div
                            class="product-image"
                            style="display:flex; align-items:center; justify-content:center;"
                        >
                            <i class="bi bi-gem"
                               style="font-size:50px; color:#d97898;">
                            </i>
                        </div>

                    @endif


                    <div class="product-info">

                        <h3>
                            {{ $product->name }}
                        </h3>

                        <p class="product-description">
                            {{ $product->description }}
                        </p>

                        <div class="product-price">
                            Rs. {{ $product->price }}
                        </div>


                        @if($product->quantity > 0)

                            <div class="stock available">
                                <i class="bi bi-check-circle"></i>
                                In Stock
                            </div>

                        @else

                            <div class="stock out-stock">
                                <i class="bi bi-x-circle"></i>
                                Out of Stock
                            </div>

                        @endif


                        <a
                            href="/shop/products?search={{ urlencode($product->name) }}"
                            class="view-btn"
                        >
                            View Product
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty-message">
            No jewelry products available right now.
        </div>

    @endif

</section>


<!-- COSMETICS -->

<section class="products-section">

    <div class="section-heading">

        <span>
            OUR BEAUTY COLLECTION
        </span>

        <h2>
            Cosmetics Collection
        </h2>

    </div>


    @if($cosmeticsProducts->count() > 0)

        <div class="product-grid">

            @foreach($cosmeticsProducts as $product)

                <div class="product-card">

                    @if($product->image)

                        <img
                            src="{{ asset('storage/products/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="product-image"
                        >

                    @else

                        <div
                            class="product-image"
                            style="display:flex; align-items:center; justify-content:center;"
                        >
                            <i class="bi bi-stars"
                               style="font-size:50px; color:#d97898;">
                            </i>
                        </div>

                    @endif


                    <div class="product-info">

                        <h3>
                            {{ $product->name }}
                        </h3>

                        <p class="product-description">
                            {{ $product->description }}
                        </p>

                        <div class="product-price">
                            Rs. {{ $product->price }}
                        </div>


                        @if($product->quantity > 0)

                            <div class="stock available">
                                <i class="bi bi-check-circle"></i>
                                In Stock
                            </div>

                        @else

                            <div class="stock out-stock">
                                <i class="bi bi-x-circle"></i>
                                Out of Stock
                            </div>

                        @endif


                        <a
                            href="/shop/products?search={{ urlencode($product->name) }}"
                            class="view-btn"
                        >
                            View Product
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty-message">
            No cosmetics products available right now.
        </div>

    @endif

</section>


<!-- FEATURES -->

<section class="features">

    <div class="feature-grid">

        <div class="feature">

            <i class="bi bi-gem"></i>

            <h3>
                Elegant Jewelry
            </h3>

            <p>
                Beautiful pieces selected for
                your everyday sparkle.
            </p>

        </div>


        <div class="feature">

            <i class="bi bi-heart"></i>

            <h3>
                Beauty Essentials
            </h3>

            <p>
                Cosmetics for your everyday
                beauty routine.
            </p>

        </div>


        <div class="feature">

            <i class="bi bi-bag-heart"></i>

            <h3>
                Easy Shopping
            </h3>

            <p>
                Browse products and add your
                favorite items to your basket.
            </p>

        </div>

    </div>

</section>

@endsection;

@endextend;