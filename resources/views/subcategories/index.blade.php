<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sub Categories</title>

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
                    <div class="brand-name">Jewelry & Cosmetics</div>
                    <div class="brand-subtitle">Admin Panel</div>
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


        <!-- PAGE CONTENT -->
        <div class="management-page">

            <div class="management-container">

                <!-- HEADING -->
                <div class="management-header">

                    <div class="management-title">

                        <div class="management-title-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>

                        <div>
                            <h1>Subcategories</h1>

                            <p>
                                Manage jewelry and cosmetics subcategories.
                            </p>
                        </div>

                    </div>

                    <a
                        href="{{ route('subcategories.create') }}"
                        class="management-add-btn"
                    >
                        <i class="bi bi-plus-lg"></i>
                        Add Sub Category
                    </a>

                </div>


                <!-- TABLE CARD -->
                <div class="management-card">

                    <h2 style="margin-bottom: 20px;">
                        All Subcategories
                    </h2>

                    <table class="management-table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sub Category</th>
                                <th>Category ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($subCategories as $subCategory)

                            <tr>

                                <td>
                                    {{ $subCategory->id }}
                                </td>

                                <td>
                                    {{ $subCategory->name }}
                                </td>

                                <td>
                                    {{ $subCategory->category_id }}
                                </td>

                                <td>

                                    <a
                                        href="{{ route('subcategories.edit', $subCategory->id) }}"
                                        class="action-edit"
                                    >
                                        Edit
                                    </a>

                                    <span style="margin: 0 8px;">|</span>

                                    <form
                                        action="{{ route('subcategories.destroy', $subCategory->id) }}"
                                        method="POST"
                                        style="display:inline"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="action-delete"
                                            onclick="return confirm('Are you sure you want to delete this sub category?')"
                                        >
                                            Delete
                                        </button>

                                    </form>

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