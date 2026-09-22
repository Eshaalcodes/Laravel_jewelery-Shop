<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Order Management</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
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


            <a href="/products" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-bag"></i>
                </span>

                <span>Products</span>

            </a>


            <a
                href="{{ route('admin.orders') }}"
                class="nav-link active"
            >

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


                <!-- PAGE HEADING -->

                <div class="management-header">

                    <div class="management-title">

                        <div class="management-title-icon">

                            <i class="bi bi-cart-check"></i>

                        </div>


                        <div>

                            <h1>Order Management</h1>

                            <p>
                                Manage customer orders and view reports.
                            </p>

                        </div>

                    </div>

                </div>



                <!-- ORDERS -->

                <div class="management-card">

                    <h2 style="margin-bottom: 20px;">
                        All Orders
                    </h2>


                    @if($orders->count() == 0)

                        <div class="management-empty">

                            <h3>
                                No orders found.
                            </h3>

                        </div>

                    @else


                        <table class="management-table">

                            <thead>

                                <tr>

                                    <th>Order ID</th>

                                    <th>Name</th>

                                    <th>Address</th>

                                    <th>Email</th>

                                    <th>Work Phone</th>

                                    <th>Cell No</th>

                                    <th>Date Of Birth</th>

                                    <th>Category</th>

                                    <th>Remarks</th>

                                    <th>Total</th>

                                    <th>Status</th>

                                    <th>Order Date</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach($orders as $order)

                                <tr>

                                    <td>
                                        {{ $order->id }}
                                    </td>

                                    <td>
                                        {{ $order->name }}
                                    </td>

                                    <td>
                                        {{ $order->address }}
                                    </td>

                                    <td>
                                        {{ $order->email }}
                                    </td>

                                    <td>
                                        {{ $order->work_phone ?? 'N/A' }}
                                    </td>

                                    <td>
                                        {{ $order->cell_no }}
                                    </td>

                                    <td>
                                        {{ $order->date_of_birth ?? 'Not Provided' }}
                                    </td>

                                    <td>
                                        {{ $order->category ?? 'Not Provided' }}
                                    </td>

                                    <td>
                                        {{ $order->remarks ?? 'N/A' }}
                                    </td>

                                    <td>
                                        Rs. {{ $order->total }}
                                    </td>


                                    <!-- STATUS -->

                                    <td>

                                        <form
                                            action="{{ route('admin.orders.status', $order->id) }}"
                                            method="POST"
                                        >

                                            @csrf

                                            <select
                                                name="status"
                                                class="form-select form-select-sm"
                                                onchange="this.form.submit()"
                                            >

                                                <option value="Pending"
                                                    {{ $order->status == 'Pending' ? 'selected' : '' }}>
                                                    Pending
                                                </option>

                                                <option value="Approved"
                                                    {{ $order->status == 'Approved' ? 'selected' : '' }}>
                                                    Approved
                                                </option>

                                                <option value="Rejected"
                                                    {{ $order->status == 'Rejected' ? 'selected' : '' }}>
                                                    Rejected
                                                </option>

                                            </select>

                                        </form>

                                    </td>


                                    <td>
                                        {{ $order->created_at }}
                                    </td>

                                </tr>

                                @endforeach

                            </tbody>

                        </table>


                    @endif

                </div>



                <!-- TOP PRODUCTS -->

                <div class="management-card" style="margin-top: 25px;">

                    <div class="report-title">

                        <div>

                            <h2>
                                Top 10 Best-Selling Products
                            </h2>

                            <p>
                                Products with the highest number of sales.
                            </p>

                        </div>

                    </div>


                    @if($topProducts->count() == 0)

                        <div class="management-empty">

                            <h3>
                                No sales found.
                            </h3>

                        </div>

                    @else


                        <table class="management-table">

                            <thead>

                                <tr>

                                    <th>Rank</th>

                                    <th>Product Name</th>

                                    <th>Total Sold</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach($topProducts as $key => $item)

                                <tr>

                                    <td>
                                        {{ $key + 1 }}
                                    </td>

                                    <td>
                                        {{ $item->product->name ?? 'Deleted Product' }}
                                    </td>

                                    <td>
                                        {{ $item->total_sold }}
                                    </td>

                                </tr>

                                @endforeach

                            </tbody>

                        </table>


                    @endif

                </div>



                <!-- TOP CLIENTS -->

                <div class="management-card" style="margin-top: 25px;">

                    <div class="report-title">

                        <div>

                            <h2>
                                Top 10 Clients by Shopping
                            </h2>

                            <p>
                                Customers ranked by total shopping amount.
                            </p>

                        </div>

                    </div>


                    @if($topClients->count() == 0)

                        <div class="management-empty">

                            <h3>
                                No clients found.
                            </h3>

                        </div>

                    @else


                        <table class="management-table">

                            <thead>

                                <tr>

                                    <th>Rank</th>

                                    <th>Client Name</th>

                                    <th>Email</th>

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
                                        {{ $client->name }}
                                    </td>

                                    <td>
                                        {{ $client->email }}
                                    </td>

                                    <td>
                                        Rs. {{ $client->total_shopping }}
                                    </td>

                                </tr>

                                @endforeach

                            </tbody>

                        </table>


                    @endif

                </div>


            </div>

        </div>


    </main>

</div>

</body>

</html>