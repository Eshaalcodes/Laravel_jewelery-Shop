@extends('usernav')

@section('website')


<img src="" alt="">

<!-- ================= CATEGORIES ================= -->

<section class="categories-section">

    <div class="section-title">

        <small>
            SHOP BY CATEGORY
        </small>

        <h2 style="color:white;">
            Our Categories
        </h2>

    </div>


    <div class="feature-grid">

        <div class="feature">

            <div class="feature-number">
                01
            </div>

            <h3>
                Jewelry
            </h3>

            <p>
                Discover beautiful imitation jewelry
                for your special moments.
            </p>

            <a href="/shop/products" class="hero-btn">
                View Jewelry
            </a>

        </div>


        <div class="feature">

            <div class="feature-number">
                02
            </div>

            <h3>
                Cosmetics
            </h3>

            <p>
                Explore our collection of cosmetics
                and beauty essentials.
            </p>

            <a href="/shop/products" class="hero-btn">
                View Cosmetics
            </a>

        </div>

    </div>

</section>


<!-- ================= JEWELRY PRODUCTS ================= -->

<section class="products-section">

    <div class="section-title">

        <small>
            JENNY COLLECTION
        </small>

        <h2 style="color:white;">
            Jewelry Products
        </h2>

    </div>


    <div class="feature-grid">

        @forelse($jewelryProducts as $product)

            <div class="feature product-card">

                <div class="product-image">

                    @if($product->image)

                        <img
                            src="{{ asset('storage/products/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            style="width:100%; height:250px; object-fit:cover; border-radius:10px;"
                        >

                    @else

                        <div style="height:250px;">
                            No Image
                        </div>

                    @endif

                </div>


                <div class="feature-number">
                    Jewelry
                </div>


                <h3>
                    {{ $product->name }}
                </h3>


                <p>
                    Rs. {{ $product->price }}
                </p>


                @if($product->quantity > 0)

                    <p style="color:#d88ca0;">
                        In Stock
                    </p>

                @else

                    <p style="color:#999;">
                        Out of Stock
                    </p>

                @endif


                <a href="/shop/products" class="hero-btn">
                    View Product
                </a>

            </div>

        @empty

            <p style="color:white;">
                No jewelry products available.
            </p>

        @endforelse

    </div>

</section>


<!-- ================= COSMETICS PRODUCTS ================= -->

<section class="products-section">

    <div class="section-title">

        <small>
            BEAUTY COLLECTION
        </small>

        <h2 style="color:white;">
            Cosmetics Products
        </h2>

    </div>


    <div class="feature-grid">

        @forelse($cosmeticsProducts as $product)

            <div class="feature product-card">

                <div class="product-image">

                    @if($product->image)

                        <img
                            src="{{ asset('storage/products/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            style="width:100%; height:250px; object-fit:cover; border-radius:10px;"
                        >

                    @else

                        <div style="height:250px;">
                            No Image
                        </div>

                    @endif

                </div>


                <div class="feature-number">
                    Cosmetics
                </div>


                <h3>
                    {{ $product->name }}
                </h3>


                <p>
                    Rs. {{ $product->price }}
                </p>


                @if($product->quantity > 0)

                    <p style="color:#d88ca0;">
                        In Stock
                    </p>

                @else

                    <p style="color:#999;">
                        Out of Stock
                    </p>

                @endif


                <a href="/shop/products" class="hero-btn">
                    View Product
                </a>

            </div>

        @empty

            <p style="color:white;">
                No cosmetics products available.
            </p>

        @endforelse

    </div>

</section>
```







  <section class="features">

        <div class="section-title">

            <small>
                WHY JENNY
            </small>

            <h2 style='color:white'>
                Shopping Made Easy
            </h2>

        </div>


        <div class="feature-grid">

            <div class="feature">

                <div class="feature-number">
                    01
                </div>

                <h3>
                    Beautiful Products
                </h3>

                <p>
                    Explore our jewelry and cosmetics
                    collection.
                </p>

            </div>


            <div class="feature">

                <div class="feature-number">
                    02
                </div>

                <h3>
                    Easy Shopping
                </h3>

                <p>
                    Browse products and add your favorites
                    to the basket.
                </p>

            </div>


            <div class="feature">

                <div class="feature-number">
                    03
                </div>

                <h3>
                    Easy Ordering
                </h3>

                <p>
                    Complete your details and place your
                    order easily.
                </p>

            </div>


            <div class="feature">

                <div class="feature-number">
                    04
                </div>

                <h3>
                    Customer Care
                </h3>

                <p>
                    We are here to help you with your
                    shopping experience.
                </p>

            </div>

        </div>

    </section>


    <!-- ================= STORY ================= -->

    <section class="story">

        <div class="story-image">
        </div>


        <div class="story-content">

            <small>
                OUR STORY
            </small>

            <h2>
                Made For Your
                Special Moments
            </h2>

            <p>
                JENNY brings together beautiful imitation
                jewelry and cosmetics in one convenient
                online store.
            </p>

            <p>
                Whether you are looking for a beautiful
                accessory or a cosmetic essential,
                our collection is designed to give you
                more choices in one place.
            </p>

            <a href="/shop/products"
               class="hero-btn">
                View Products
            </a>

        </div>

    </section>


    <!-- ================= FINAL BANNER ================= -->

    <section class="final-banner">

        <div class="final-content">

            <h2>
                Add A Little Sparkle
            </h2>

            <p>
                Discover jewelry and cosmetics that
                complement your style.
            </p>

            <a href="/shop/products"
               class="hero-btn">
                Shop Now
            </a>

        </div>

    </section>


    <!-- ================= ABOUT ================= -->

    <section class="about" id="about">

        <small style="color:#d88ca0; letter-spacing:4px;">
            ABOUT JENNY
        </small>

        <h2>
            Jewelry & Cosmetics
        </h2>

        <p>
            JENNY is an online jewelry and cosmetics store
            where customers can browse products, search
            products by name, add items to their basket,
            select quantities and complete their orders
            easily.
        </p>

    </section>


    <!-- ================= CONTACT ================= -->

    <section class="contact" id="contact">

        <h2>
            Ready To Shop?
        </h2>

        <p>
            Explore our latest jewelry and cosmetics
            collection today.
        </p>

        <a href="/shop/products"
           class="hero-btn">
            Start Shopping
        </a>

    </section>


@endsection;

@endextend;