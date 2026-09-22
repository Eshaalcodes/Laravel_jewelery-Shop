```blade
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Category</title>

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

        <!-- MENU -->
        <nav class="sidebar-nav">

            <a href="/admin" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-speedometer2"></i>
                </span>

                <span>Dashboard</span>

            </a>

            <a href="{{ route('category.index') }}" class="nav-link active">

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

        <!-- FOOTER -->
        <div class="sidebar-footer">

            <span class="status-dot"></span>

            System running smoothly

        </div>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="admin-main">

        <!-- NAVBAR -->
        <header class="admin-navbar">

            <button class="sidebar-toggle" type="button">

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


        <!-- PAGE CONTENT -->
        <div class="management-page">

            <div class="management-container">

                <!-- PAGE HEADING -->
                <div class="management-header">

                    <div class="management-title">

                        <div class="management-title-icon">

                            <i class="bi bi-pencil-square"></i>

                        </div>

                        <div>

                            <h1>Edit Category</h1>

                            <p>
                                Update your jewelry and cosmetics category.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- FORM CARD -->
                <div class="management-card">

                    <form
                        action="{{ route('category.update', $category->id) }}"
                        method="POST"
                    >

                        @csrf

                        <div style="max-width:700px;">

                            <label
                                for="name"
                                style="
                                    display:block;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Category Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ $category->name }}"
                                required
                                class="form-control"
                                style="
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                    background:#ffffff;
                                "
                            >

                            <!-- BUTTONS -->
                            <div
                                style="
                                    margin-top:25px;
                                    display:flex;
                                    align-items:center;
                                    gap:15px;
                                "
                            >

                                <button
                                    type="submit"
                                    class="management-add-btn"
                                >

                                    <i class="bi bi-check-lg"></i>

                                    Update Category

                                </button>


                                <a
                                    href="{{ route('category.index') }}"
                                    style="
                                        color:#e58fa9;
                                        font-weight:700;
                                        text-decoration:none;
                                    "
                                >
                                    ← Back to Categories
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
```
