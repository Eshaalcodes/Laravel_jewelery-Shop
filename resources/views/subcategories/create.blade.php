<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Sub Category</title>

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


            <a href="{{ route('category.index') }}" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-grid"></i>
                </span>

                <span>Categories</span>

            </a>


            <a href="/subcategories" class="nav-link active">

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


        <!-- NAVBAR -->

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
                            <i class="bi bi-diagram-3"></i>
                        </div>

                        <div>

                            <h1>Add Sub Category</h1>

                            <p>
                                Create a new jewelry or cosmetics sub category.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- FORM CARD -->

                <div class="management-card">

                    <form
                        action="{{ route('subcategories.store') }}"
                        method="POST"
                    >

                        @csrf


                        <div style="max-width: 600px;">


                            <!-- CATEGORY -->

                            <label
                                for="category_id"
                                style="
                                    display:block;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Category
                            </label>


                            <select
                                id="category_id"
                                name="category_id"
                                required
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                    background:#ffffff;
                                    outline:none;
                                "
                            >

                                <option value="">
                                    Select Category
                                </option>

                                @foreach($categories as $category)

                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>

                                @endforeach

                            </select>


                            <!-- SUB CATEGORY NAME -->

                            <label
                                for="name"
                                style="
                                    display:block;
                                    margin-top:20px;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Sub Category Name
                            </label>


                            <input
                                type="text"
                                id="name"
                                name="name"
                                required
                                placeholder="Enter sub category name"
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                    outline:none;
                                "
                            >


                            <!-- BUTTONS -->

                            <div style="margin-top:20px;">

                                <button
                                    type="submit"
                                    class="management-add-btn"
                                >
                                    <i class="bi bi-plus-lg"></i>
                                    Add Sub Category
                                </button>


                                <a
                                    href="/subcategories"
                                    style="
                                        margin-left:15px;
                                        color:#e58fa9;
                                        font-weight:700;
                                        text-decoration:none;
                                    "
                                >
                                    ← Back to Subcategories
                                </a>

                            </div>


                        </div>

                    </form>

                </div>


            </div>

        </div>


    </main>

</div>

</body>

</html>