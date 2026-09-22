<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jewelry Products</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

<div class="admin-shell">

    <!-- SIDEBAR -->
    <aside class="admin-sidebar">

        <div class="sidebar-header">

            <div class="brand-mark">

                <div class="brand-icon">
                    <i class="bi bi-gem"></i>
                </div>

                <div>
                    <div class="brand-name">
                        Jewelry & Cosmetics
                    </div>

                    <div class="brand-subtitle">
                        Admin Panel
                    </div>
                </div>

            </div>

        </div>


        <nav class="sidebar-nav">

            <a href="/admin" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-speedometer2"></i>
                </span>

                <span>Dashboard</span>

            </a>


            <a href="/categories" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-grid"></i>
                </span>

                <span>Categories</span>

            </a>


            <a href="/subcategories" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-diagram-3"></i>
                </span>

                <span>Subcategories</span>

            </a>


            <a href="/products" class="nav-link active">

                <span class="nav-icon">
                    <i class="bi bi-bag"></i>
                </span>

                <span>Products</span>

            </a>


            <a href="{{ route('admin.orders') }}" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-cart-check"></i>
                </span>

                <span>Orders & Reports</span>

            </a>

        </nav>


        <!-- USER -->
        <div class="sidebar-user">

            <div class="user-avatar">
                {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
            </div>

            <div class="user-name">
                {{ Auth::user()->name }}
            </div>

            <div class="user-status">
                Active Workspace
            </div>

        </div>


        <div class="sidebar-footer">

            <span class="status-dot"></span>

            System running smoothly

        </div>

    </aside>


    <!-- MAIN -->
    <main class="admin-main">

        <!-- TOP NAVBAR -->
        <header class="admin-navbar">

            <button class="sidebar-toggle">
                <i class="bi bi-list"></i>
            </button>

            <input
                type="text"
                class="navbar-search"
                placeholder="Search products, orders..."
            >

            <div class="navbar-user">
                {{ Auth::user()->name }}
            </div>

        </header>


        <!-- CONTENT -->
        <div class="management-page">

            <div class="management-container">


                <!-- HEADING -->
                <div class="management-header">

                    <div class="management-title">

                        <div class="management-title-icon">
                            <i class="bi bi-bag"></i>
                        </div>

                        <div>

                            <h1>Products</h1>

                            <p>
                                Manage jewelry and cosmetics products.
                            </p>

                        </div>

                    </div>


                    <a
                        href="/products/create"
                        class="management-add-btn"
                    >
                        <i class="bi bi-plus-lg"></i>
                        Add New Product
                    </a>

                </div>


                <!-- PRODUCT TABLE -->
                <div class="management-card">

                    <h2 style="margin-bottom: 20px;">
                        All Products
                    </h2>

                    <table class="management-table">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Product Name</th>

                                <th>Category</th>

                                <th>Subcategory</th>

                                <th>Description</th>

                                <th>Price</th>

                                <th>Quantity</th>

                                <th>Image</th>

                                <th>Status</th>

                                <th>Action</th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($products as $product)

                            <tr>

                                <td>
                                    {{ $product->id }}
                                </td>


                                <td>
                                    {{ $product->name }}
                                </td>


                                <td>
                                    {{ $product->category->name ?? 'N/A' }}
                                </td>


                                <td>
                                    {{ $product->subcategory->name ?? 'N/A' }}
                                </td>


                                <td>
                                    {{ $product->description }}
                                </td>


                                <td>
                                    Rs. {{ $product->price }}
                                </td>


                                <td>
                                    {{ $product->quantity }}
                                </td>


                                <td>

                                    @if(
                                        $product->image &&
                                        file_exists(
                                            public_path(
                                                'storage/products/' .
                                                $product->image
                                            )
                                        )
                                    )

                                        <img
                                            src="{{ asset('storage/products/' . $product->image) }}"
                                            class="management-product-image"
                                            alt="{{ $product->name }}"
                                        >

                                    @else

                                        <div class="management-no-image">
                                            No Image
                                        </div>

                                    @endif

                                </td>


                                <td>

                                    @if($product->status == 1)

                                        <span class="status-available">
                                            Available
                                        </span>

                                    @else

                                        <span class="status-unavailable">
                                            Not Available
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <a
                                        href="/products/edit/{{ $product->id }}"
                                        class="action-edit"
                                    >
                                        Edit
                                    </a>

                                    <span style="margin: 0 8px;">|</span>

                                    <a
                                        href="/products/delete/{{ $product->id }}"
                                        class="action-delete"
                                        onclick="return confirm('Are you sure you want to delete this product?')"
                                    >
                                        Delete
                                    </a>

                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>