<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product</title>

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


        <!-- SIDEBAR LINKS -->

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


                <!-- HEADING -->

                <div class="management-header">

                    <div class="management-title">

                        <div class="management-title-icon">

                            <i class="bi bi-bag"></i>

                        </div>

                        <div>

                            <h1>Add New Product</h1>

                            <p>
                                Add a new jewelry or cosmetics product.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- FORM CARD -->

                <div class="management-card">


                    {{-- VALIDATION ERRORS --}}

                    @if($errors->any())

                        <div
                            style="
                                background:#fff1f3;
                                border:1px solid #f1d5df;
                                color:#c62828;
                                padding:15px;
                                border-radius:8px;
                                margin-bottom:20px;
                            "
                        >

                            <strong>Please fix these errors:</strong>

                            @foreach($errors->all() as $error)

                                <div style="margin-top:5px;">
                                    {{ $error }}
                                </div>

                            @endforeach

                        </div>

                    @endif


                    <!-- IMPORTANT: ORIGINAL ACTION -->

                    <form
                        action="/products/store"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf


                        <div style="max-width:700px;">


                            <!-- CATEGORY -->

                            <label
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
                                name="category_id"
                                required
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                    background:#ffffff;
                                "
                            >

                                <option value="">
                                    Select Category
                                </option>

                                @foreach($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                                    >
                                        {{ $category->name }}
                                    </option>

                                @endforeach

                            </select>


                            <!-- SUBCATEGORY -->

                            <label
                                style="
                                    display:block;
                                    margin-top:20px;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Subcategory
                            </label>


                            <select
                                name="subcategory_id"
                                required
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                    background:#ffffff;
                                "
                            >

                                <option value="">
                                    Select Subcategory
                                </option>

                                @foreach($subcategories as $subcategory)

                                    <option
                                        value="{{ $subcategory->id }}"
                                        {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}
                                    >
                                        {{ $subcategory->name }}
                                    </option>

                                @endforeach

                            </select>


                            <!-- PRODUCT NAME -->

                            <label
                                style="
                                    display:block;
                                    margin-top:20px;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Product Name
                            </label>


                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                placeholder="Enter product name"
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                "
                            >


                            <!-- DESCRIPTION -->

                            <label
                                style="
                                    display:block;
                                    margin-top:20px;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Description
                            </label>


                            <textarea
                                name="description"
                                required
                                rows="4"
                                placeholder="Enter product description"
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                    resize:vertical;
                                "
                            >{{ old('description') }}</textarea>


                            <!-- PRICE -->

                            <label
                                style="
                                    display:block;
                                    margin-top:20px;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Price
                            </label>


                            <input
                                type="number"
                                name="price"
                                value="{{ old('price') }}"
                                required
                                placeholder="Enter price"
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                "
                            >


                            <!-- QUANTITY -->

                            <label
                                style="
                                    display:block;
                                    margin-top:20px;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Quantity
                            </label>


                            <input
                                type="number"
                                name="quantity"
                                value="{{ old('quantity') }}"
                                required
                                placeholder="Enter quantity"
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                "
                            >


                            <!-- PRODUCT IMAGE -->

                            <label
                                style="
                                    display:block;
                                    margin-top:20px;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Product Image
                            </label>


                            <input
                                type="file"
                                name="image"
                                style="
                                    width:100%;
                                    padding:10px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    background:#ffffff;
                                "
                            >


                            <!-- STATUS -->

                            <label
                                style="
                                    display:block;
                                    margin-top:20px;
                                    margin-bottom:8px;
                                    font-weight:700;
                                    color:#111111;
                                "
                            >
                                Status
                            </label>


                            <select
                                name="status"
                                required
                                style="
                                    width:100%;
                                    padding:12px 14px;
                                    border:1px solid #f1d5df;
                                    border-radius:8px;
                                    font-size:16px;
                                    background:#ffffff;
                                "
                            >

                                <option
                                    value="1"
                                    {{ old('status', '1') == '1' ? 'selected' : '' }}
                                >
                                    Available
                                </option>

                                <option
                                    value="0"
                                    {{ old('status') == '0' ? 'selected' : '' }}
                                >
                                    Not Available
                                </option>

                            </select>


                            <!-- BUTTON -->

                            <div style="margin-top:25px;">

                                <button
                                    type="submit"
                                    class="management-add-btn"
                                >

                                    <i class="bi bi-plus-lg"></i>

                                    Add Product

                                </button>


                                <a
                                    href="/products"
                                    style="
                                        margin-left:15px;
                                        color:#e58fa9;
                                        font-weight:700;
                                        text-decoration:none;
                                    "
                                >
                                    ← Back to Products
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