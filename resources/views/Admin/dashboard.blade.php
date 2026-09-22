<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     
</head>

<body>

<div class="admin-shell">

    <div class="sidebar-backdrop" data-sidebar-close></div>

    <!-- SIDEBAR -->
    <aside class="admin-sidebar" id="adminSidebar">

        <div class="sidebar-header">

            <a class="brand-mark" href="{{ route('admin') }}">

                <span class="brand-icon">
                    <i class="bi bi-grid-1x2-fill"></i>
                </span>

                <span class="brand-copy">

                    <span class="brand-title">
                        Jewelry & Cosmetics
                    </span>

                    <span class="brand-subtitle">
                        Admin Panel
                    </span>

                </span>

            </a>

        </div>


        <!-- MENU -->
        <nav class="sidebar-nav">

            <!-- Dashboard -->
            <a class="nav-link active" href="{{ route('admin') }}">

                <span class="nav-icon">
                    <i class="bi bi-speedometer2"></i>
                </span>

                <span class="nav-text">
                    Dashboard
                </span>

            </a>


            <!-- Categories -->
            <a class="nav-link" href="{{ route('category.index') }}">

                <span class="nav-icon">
                    <i class="bi bi-grid"></i>
                </span>

                <span class="nav-text">
                    Categories
                </span>

            </a>


            <!-- Subcategories -->
            <a class="nav-link" href="{{ url('/subcategories') }}">

                <span class="nav-icon">
                    <i class="bi bi-diagram-3"></i>
                </span>

                <span class="nav-text">
                    Subcategories
                </span>

            </a>


            <!-- Products -->
            <a class="nav-link" href="{{ url('/products') }}">

                <span class="nav-icon">
                    <i class="bi bi-bag"></i>
                </span>

                <span class="nav-text">
                    Products
                </span>

            </a>


            <!-- Orders -->
            <a class="nav-link" href="{{ route('admin.orders') }}">

                <span class="nav-icon">
                    <i class="bi bi-cart-check"></i>
                </span>

                <span class="nav-text">
                    Orders & Reports
                </span>

            </a>


            <a href="/admin/contact-messages" class="nav-link">
    <i class="bi bi-envelope nav-icon"></i>
    <span>Contact Messages</span>
</a>

        </nav>


        <!-- ADMIN USER -->
        <div class="sidebar-user">

            <img
                class="avatar-img avatar-md sidebar-user-avatar"
                src="{{ asset('assets/images/avatar/avatar.jpg') }}"
                alt="Admin"
            >

            <strong>{{ Auth::user()->name }}</strong>

            <small>Administrator</small>

        </div>


        <div class="sidebar-footer">

            <span class="status-dot"></span>

            <span class="sidebar-footer-text">
                System running smoothly
            </span>

        </div>

    </aside>


    <!-- MAIN -->
    <div class="admin-main">


        <!-- NAVBAR -->
        <nav class="navbar admin-navbar navbar-expand bg-white">

            <div class="container-fluid px-3 px-lg-4">


                <!-- Sidebar Button -->
                <button
                    class="sidebar-toggle"
                    type="button"
                    data-sidebar-toggle
                    aria-controls="adminSidebar"
                    aria-expanded="true"
                >

                    <span></span>
                    <span></span>
                    <span></span>

                </button>


                <!-- Search -->
                <form class="d-none d-md-flex ms-3 flex-grow-1">

                    <input
                        class="form-control search-input"
                        type="search"
                        placeholder="Search products, orders..."
                    >

                </form>


                <!-- Navbar Actions -->
                <div class="navbar-actions ms-auto">


                    <!-- Theme -->
                    <button
                        class="icon-button theme-toggle"
                        type="button"
                        data-theme-toggle
                    >

                        <i
                            class="bi bi-moon-stars"
                            data-theme-icon
                        ></i>

                    </button>


                    <!-- Profile -->
                    <div class="dropdown">

                        <button
                            class="profile-button dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                        >

                            <img
                                class="avatar-img avatar-sm"
                                src="{{ asset('assets/images/avatar/avatar.jpg') }}"
                                alt="Admin"
                            >
                             <span class="profile-name d-none d-sm-inline">
    {{ Auth::user()->name }}
</span>
                        </button>


                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <a
                                    class="dropdown-item"
                                    href="{{ route('index') }}"
                                >
                                    Goto Site
                                </a>
                            </li>

                            <li>
                                <a
                                    class="dropdown-item"
                                    href="{{ route('admin.orders') }}"
                                >
                                    Orders & Reports
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>

                                <form
                                    action="{{ route('logout') }}"
                                    method="POST"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="dropdown-item"
                                    >
                                        Sign out
                                    </button>

                                </form>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </nav>


        <!-- DASHBOARD CONTENT -->
        <main class="dashboard-content">

            <div class="container-fluid px-3 px-lg-4 py-4">


                <!-- PAGE HEADING -->
                <div class="page-heading">

                    <div class="page-heading-copy">

                        <span class="page-icon">
                            <i class="bi bi-speedometer2"></i>
                        </span>

                        <div>

                            <p class="eyebrow mb-1">
                                ADMIN PANEL
                            </p>

                            <h1 class="h3 mb-1">
                                Dashboard
                            </h1>

                            <p class="text-muted mb-0">
                                Manage your jewelry and cosmetics ecommerce website.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- DASHBOARD CARDS -->
                <section
                    class="row g-3 mt-1"
                    aria-label="Dashboard metrics"
                >


                    <!-- Categories -->
                    <div class="col-12 col-sm-6 col-xl-3">

                        <article class="metric-card metric-primary">

                            <div class="metric-top">

                                <span class="metric-label">
                                    Categories
                                </span>

                                <span class="metric-icon">

                                    <i class="bi bi-grid"></i>

                                </span>

                            </div>

                            <div class="metric-value">
                                {{ $categories }}
                            </div>

                            <div class="metric-meta">

                                <span>
                                    Total Categories
                                </span>

                            </div>

                        </article>

                    </div>


                    <!-- Products -->
                    <div class="col-12 col-sm-6 col-xl-3">

                        <article class="metric-card metric-success">

                            <div class="metric-top">

                                <span class="metric-label">
                                    Products
                                </span>

                                <span class="metric-icon">

                                    <i class="bi bi-bag"></i>

                                </span>

                            </div>

                            <div class="metric-value">
                                {{ $products }}
                            </div>

                            <div class="metric-meta">

                                <span>
                                    Total Products
                                </span>

                            </div>

                        </article>

                    </div>


                    <!-- Orders -->
                    <div class="col-12 col-sm-6 col-xl-3">

                        <article class="metric-card metric-warning">

                            <div class="metric-top">

                                <span class="metric-label">
                                    Orders
                                </span>

                                <span class="metric-icon">

                                    <i class="bi bi-cart-check"></i>

                                </span>

                            </div>

                            <div class="metric-value">
                                {{ $orders }}
                            </div>

                            <div class="metric-meta">

                                <span>
                                    Total Orders
                                </span>

                            </div>

                        </article>

                    </div>


                    <!-- Customers -->
                    <div class="col-12 col-sm-6 col-xl-3">

                        <article class="metric-card metric-danger">

                            <div class="metric-top">

                                <span class="metric-label">
                                    Customers
                                </span>

                                <span class="metric-icon">

                                    <i class="bi bi-people"></i>

                                </span>

                            </div>

                            <div class="metric-value">
                                {{ $customers }}
                            </div>

                            <div class="metric-meta">

                                <span>
                                    Total Customers
                                </span>

                            </div>

                        </article>

                    </div>

                </section>


                <!-- MANAGEMENT SECTION -->
                <section class="row g-3 mt-3">


                    <!-- Category Management -->
                    <div class="col-12 col-md-6 col-xl-3">

                        <div class="panel h-100">

                            <div class="panel-header">

                                <div>

                                    <h2 class="h5 mb-1 section-title">

                                        <i class="bi bi-grid"></i>

                                        <span>
                                            Categories
                                        </span>

                                    </h2>

                                    <p class="text-muted mb-0">
                                        Manage categories
                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ route('category.index') }}"
                                class="btn btn-primary w-100"
                            >
                                Manage Categories
                            </a>

                        </div>

                    </div>


                    <!-- Subcategory Management -->
                    <div class="col-12 col-md-6 col-xl-3">

                        <div class="panel h-100">

                            <div class="panel-header">

                                <div>

                                    <h2 class="h5 mb-1 section-title">

                                        <i class="bi bi-diagram-3"></i>

                                        <span>
                                            Subcategories
                                        </span>

                                    </h2>

                                    <p class="text-muted mb-0">
                                        Manage subcategories
                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ url('/subcategories') }}"
                                class="btn btn-primary w-100"
                            >
                                Manage Subcategories
                            </a>

                        </div>

                    </div>


                    <!-- Product Management -->
                    <div class="col-12 col-md-6 col-xl-3">

                        <div class="panel h-100">

                            <div class="panel-header">

                                <div>

                                    <h2 class="h5 mb-1 section-title">

                                        <i class="bi bi-bag"></i>

                                        <span>
                                            Products
                                        </span>

                                    </h2>

                                    <p class="text-muted mb-0">
                                        Add, edit and delete products
                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ url('/products') }}"
                                class="btn btn-primary w-100"
                            >
                                Manage Products
                            </a>

                        </div>

                    </div>


                    <!-- Orders -->
                    <div class="col-12 col-md-6 col-xl-3">

                        <div class="panel h-100">

                            <div class="panel-header">

                                <div>

                                    <h2 class="h5 mb-1 section-title">

                                        <i class="bi bi-cart-check"></i>

                                        <span>
                                            Orders
                                        </span>

                                    </h2>

                                    <p class="text-muted mb-0">
                                        Orders and reports
                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ route('admin.orders') }}"
                                class="btn btn-primary w-100"
                            >
                                Order Management
                            </a>

                        </div>

                    </div>

                </section>


                <!-- REPORTS -->
                <!-- REPORTS -->
<section class="panel mt-3">

    <div class="panel-header">

        <div>
            <h2 class="h5 mb-1 section-title">
                <i class="bi bi-bar-chart-line"></i>
                <span>
                    Reports
                </span>
            </h2>

            <p class="text-muted mb-0">
                View best-selling products and top clients.
            </p>
        </div>

        <a
            href="{{ route('admin.orders') }}"
            class="btn btn-primary btn-sm"
        >
            View All Orders
        </a>

    </div>


    <div class="row g-3">

        <!-- TOP 10 BEST SELLING PRODUCTS -->
        <div class="col-12 col-lg-6">

            <div class="p-3 border rounded h-100">

                <h5 class="mb-3">
                    <i class="bi bi-trophy"></i>
                    Top 10 Best-Selling Products
                </h5>

                @if($topProducts->count() > 0)

                    <div class="table-responsive">

                        <table class="table table-sm table-hover align-middle">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Sold</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($topProducts as $key => $item)

                                    <tr>

                                        <td>
                                            {{ $key + 1 }}
                                        </td>

                                        <td>
                                            {{ $item->product->name ?? 'Product Deleted' }}
                                        </td>

                                        <td>
                                            <span class="badge bg-primary">
                                                {{ $item->total_sold }}
                                            </span>
                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="text-muted text-center py-4">
                        No sales data available yet.
                    </div>

                @endif

            </div>

        </div>


        <!-- TOP 10 CLIENTS -->
        <div class="col-12 col-lg-6">

            <div class="p-3 border rounded h-100">

                <h5 class="mb-3">
                    <i class="bi bi-people"></i>
                    Top 10 Clients
                </h5>

                @if($topClients->count() > 0)

                    <div class="table-responsive">

                        <table class="table table-sm table-hover align-middle">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Client</th>
                                    <th>Total Shopping</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($topClients as $key => $client)

                                    <tr>

                                        <td>
                                            {{ $key + 1 }}
                                        </td>

                                        <td>
                                            <strong>
                                                {{ $client->name }}
                                            </strong>

                                            <br>

                                            <small class="text-muted">
                                                {{ $client->email }}
                                            </small>
                                        </td>

                                        <td>
                                            <span class="badge bg-success">
                                                Rs. {{ number_format($client->total_spent, 2) }}
                                            </span>
                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="text-muted text-center py-4">
                        No client shopping data available yet.
                    </div>

                @endif

            </div>

        </div>

    </div>

</section>

                <!-- QUICK ACTIONS -->
                <section class="panel mt-3">

                    <div class="panel-header">

                        <div>

                            <h2 class="h5 mb-1 section-title">

                                <i class="bi bi-lightning"></i>

                                <span>
                                    Quick Actions
                                </span>

                            </h2>

                            <p class="text-muted mb-0">
                                Quickly access important admin functions.
                            </p>

                        </div>

                    </div>


                    <div class="row g-2">


                        <div class="col-12 col-md-3">

                            <a
                                href="{{ route('category.create') }}"
                                class="btn btn-outline-primary w-100"
                            >
                                <i class="bi bi-plus-circle"></i>
                                Add Category
                            </a>

                        </div>


                        <div class="col-12 col-md-3">

                            <a
                                href="{{ url('/subcategories/create') }}"
                                class="btn btn-outline-primary w-100"
                            >
                                <i class="bi bi-plus-circle"></i>
                                Add Subcategory
                            </a>

                        </div>


                        <div class="col-12 col-md-3">

                            <a
                                href="{{ url('/products/create') }}"
                                class="btn btn-outline-primary w-100"
                            >
                                <i class="bi bi-plus-circle"></i>
                                Add Product
                            </a>

                        </div>


                        <div class="col-12 col-md-3">

                            <a
                                href="{{ route('admin.orders') }}"
                                class="btn btn-outline-primary w-100"
                            >
                                <i class="bi bi-file-bar-graph"></i>
                                View Reports
                            </a>

                        </div>

                    </div>

                </section>

            </div>

        </main>


        <!-- BACKUP & MAINTENANCE -->
<section class="panel mt-3">

    <div class="panel-header">

        <div>

            <h2 class="h5 mb-1 section-title">

                <i class="bi bi-database-check"></i>

                <span>
                    Backup & Maintenance
                </span>

            </h2>

            <p class="text-muted mb-0">
                Keep a safe copy of your website data.
            </p>

        </div>

    </div>


    <div class="p-3 border rounded">

        <h5 class="mb-2">
            Download a Full Backup
        </h5>

        <p class="text-muted mb-3">
            Export categories, products, orders and customers
            as a single JSON file for safe storage.
        </p>

        <a
            href="{{ route('admin.backup') }}"
            class="btn btn-primary"
        >

            <i class="bi bi-download"></i>

            Download Backup (JSON)

        </a>


        <hr>


        <h6>
            Database Location
        </h6>

        <p class="text-muted mb-0">

            The live database is stored on the server.
            Keep a backup copy safely for maintenance and recovery.

        </p>

    </div>

</section>


        <!-- FOOTER -->
        <footer class="admin-footer">

            <div class="container-fluid px-3 px-lg-4">

                <span>
                    Jewelry & Cosmetics Admin Panel
                </span>

                <span>
                    Admin Dashboard
                </span>

            </div>

        </footer>

    </div>

</div>


<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>