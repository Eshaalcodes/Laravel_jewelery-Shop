<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Category Management | Jewelry & Cosmetics</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        /* =========================================
           CATEGORY PAGE
           SOFT PINK + WHITE + BLACK
           ========================================= */

        body {
            background: #ffffff;
            color: #111111;
        }

        .category-page {
            padding: 35px;
        }

        .category-header {
            margin-bottom: 30px;
        }

        .category-header h1 {
            color: #111111;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .category-header p {
            color: #6b7280;
            margin: 0;
        }

        /* Top management links */

        .management-links {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .management-card {
            background: #ffffff;
            border: 1px solid #f1d5df;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        .management-card .management-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            background: #fde8ef;
            color: #d97898;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 14px;
            font-size: 20px;
        }

        .management-card h3 {
            color: #111111;
            font-size: 19px;
            margin-bottom: 15px;
        }

        .management-card a {
            display: block;
            text-decoration: none;
            background: #e58fa9;
            color: #ffffff;
            text-align: center;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 600;
        }

        .management-card a:hover {
            background: #d97898;
            color: #ffffff;
        }

        /* Add Category */

        .add-category {
            margin-bottom: 25px;
        }

        .add-category a {
            display: inline-block;
            background: #e58fa9;
            color: #ffffff;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }

        .add-category a:hover {
            background: #d97898;
            color: #ffffff;
        }

        /* Category table */

        .category-table-card {
            background: #ffffff;
            border: 1px solid #f1d5df;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        .category-table-card h2 {
            color: #111111;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .category-table {
            width: 100%;
            border-collapse: collapse;
        }

        .category-table th {
            background: #111111;
            color: #ffffff;
            padding: 14px;
            text-align: left;
        }

        .category-table td {
            padding: 14px;
            border-bottom: 1px solid #f1d5df;
            color: #111111;
        }

        .category-table tbody tr:hover {
            background: #fff5f8;
        }

        /* Edit */

        .edit-link {
            color: #d97898;
            font-weight: 600;
            text-decoration: none;
        }

        .edit-link:hover {
            color: #111111;
        }

        /* Delete */

        .delete-link {
            color: #111111;
            font-weight: 600;
            text-decoration: none;
        }

        .delete-link:hover {
            color: #d97898;
        }

        /* Back button */

        .back-admin {
            margin-top: 25px;
        }

        .back-admin a {
            color: #d97898;
            text-decoration: none;
            font-weight: 600;
        }

        .back-admin a:hover {
            color: #111111;
        }

        @media (max-width: 900px) {
            .management-links {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .management-links {
                grid-template-columns: 1fr;
            }

            .category-page {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="admin-layout">

        <!-- ================= SIDEBAR ================= -->

        <aside class="admin-sidebar">

            <div class="sidebar-header">

                <a href="{{ route('admin') }}" class="brand-mark">

                    <span class="brand-icon">
                        <i class="bi bi-grid-fill"></i>
                    </span>

                    <span>
                        <span class="brand-title">Jewelry & Cosmetics</span>
                        <span class="brand-subtitle">Admin Panel</span>
                    </span>

                </a>

            </div>


            <nav class="sidebar-nav">

                <a href="{{ route('admin') }}" class="nav-link">
                    <span class="nav-icon">
                        <i class="bi bi-speedometer2"></i>
                    </span>
                    <span>Dashboard</span>
                </a>

                <a href="{{ url('/categories') }}" class="nav-link active">
                    <span class="nav-icon">
                        <i class="bi bi-grid"></i>
                    </span>
                    <span>Categories</span>
                </a>

                <a href="{{ url('/subcategories') }}" class="nav-link">
                    <span class="nav-icon">
                        <i class="bi bi-diagram-3"></i>
                    </span>
                    <span>Subcategories</span>
                </a>

                <a href="{{ url('/products') }}" class="nav-link">
                    <span class="nav-icon">
                        <i class="bi bi-bag"></i>
                    </span>
                    <span>Products</span>
                </a>

                <a href="{{ route('admin.orders') }}" class="nav-link">
                    <span class="nav-icon">
                        <i class="bi bi-cart"></i>
                    </span>
                    <span>Orders & Reports</span>
                </a>

            </nav>


            <!-- User -->

            <div class="sidebar-user">

                <div class="sidebar-user-avatar">
                    AV
                </div>

                <div>
                    <strong>
                        {{ Auth::user()->name ?? 'Admin' }}
                    </strong>

                    <small>
                        Active Workspace
                    </small>
                </div>

            </div>


            <div class="sidebar-footer">
                <span>●</span> System running smoothly
            </div>

        </aside>


        <!-- ================= MAIN AREA ================= -->

        <main class="admin-main">

            <!-- Top Navbar -->

            <header class="admin-navbar">

                <button class="sidebar-toggle" type="button">
                    <i class="bi bi-list"></i>
                </button>

                <div class="search-box">
                    <input type="text"
                           class="form-control"
                           placeholder="Search products, orders...">
                </div>

                <div class="profile-button">
                    {{ Auth::user()->name ?? 'Admin' }}
                </div>

            </header>


            <!-- Category Content -->

            <section class="category-page">

                <div class="category-header">

                    <h1>Category Management</h1>

                    <p>
                        Manage jewelry and cosmetics categories.
                    </p>

                </div>


                <!-- Management Cards -->

                <div class="management-links">

                    <!-- Subcategories -->

                    <div class="management-card">

                        <div class="management-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>

                        <h3>Subcategories</h3>

                        <a href="/subcategories">
                            Manage Subcategories
                        </a>

                    </div>


                    <!-- Products -->

                    <div class="management-card">

                        <div class="management-icon">
                            <i class="bi bi-bag"></i>
                        </div>

                        <h3>Products</h3>

                        <a href="/products">
                            Manage Products
                        </a>

                    </div>


                    <!-- Add Category -->

                    <div class="management-card">

                        <div class="management-icon">
                            <i class="bi bi-plus-circle"></i>
                        </div>

                        <h3>Add Category</h3>

                        <a href="{{ route('category.create') }}">
                            Add Category
                        </a>

                    </div>


                    <!-- Orders -->

                    <div class="management-card">

                        <div class="management-icon">
                            <i class="bi bi-cart"></i>
                        </div>

                        <h3>Orders</h3>

                        <a href="{{ route('admin.orders') }}">
                            Order Management
                        </a>

                    </div>

                </div>


                <!-- Category Table -->

                <div class="category-table-card">

                    <h2>All Categories</h2>

                    <div style="overflow-x:auto;">

                        <table class="category-table">

                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>

                            </thead>


                            <tbody>

                                @foreach($categories as $category)

                                <tr>

                                    <td>
                                        {{ $category->id }}
                                    </td>

                                    <td>
                                        {{ $category->name }}
                                    </td>

                                    <td>

                                        <a class="edit-link"
                                           href="{{ route('category.edit', $category->id) }}">
                                            Edit
                                        </a>

                                        &nbsp; | &nbsp;

                                        <a class="delete-link"
                                           href="{{ route('category.delete', $category->id) }}">
                                            Delete
                                        </a>

                                    </td>

                                </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>


                <!-- Back to Admin -->

                <div class="back-admin">

                    <a href="{{ route('admin') }}">
                        ← Back to Admin Dashboard
                    </a>

                </div>

            </section>

        </main>

    </div>


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>