<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Product</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>

        .edit-form {
            max-width: 800px;
        }

        .edit-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
            color: #111111;
        }

        .edit-form input,
        .edit-form select,
        .edit-form textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #f1d5df;
            border-radius: 8px;
            font-size: 15px;
            background: #ffffff;
            margin-bottom: 20px;
        }

        .edit-form textarea {
            min-height: 120px;
            resize: vertical;
        }

        .edit-form input:focus,
        .edit-form select:focus,
        .edit-form textarea:focus {
            border-color: #e58fa9;
            outline: none;
            box-shadow: 0 0 0 3px rgba(229, 143, 169, 0.12);
        }

        .current-image {
            margin-bottom: 20px;
        }

        .current-image img,
        #preview {
            border-radius: 10px;
            object-fit: cover;
            border: 1px solid #f1d5df;
        }

        .update-btn {
            border: none;
            cursor: pointer;
        }

        .back-link {
            color: #e58fa9;
            font-weight: 700;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .error-box {
            background: #fff0f0;
            border: 1px solid #f3bcbc;
            color: #c62828;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .image-label {
            margin-top: 5px;
        }

    </style>

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

                <span>
                    Dashboard
                </span>

            </a>


            <a href="{{ route('category.index') }}" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-grid"></i>
                </span>

                <span>
                    Categories
                </span>

            </a>


            <a href="/subcategories" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-diagram-3"></i>
                </span>

                <span>
                    Subcategories
                </span>

            </a>


            <a href="/products" class="nav-link active">

                <span class="nav-icon">
                    <i class="bi bi-bag"></i>
                </span>

                <span>
                    Products
                </span>

            </a>


            <a href="{{ route('admin.orders') }}" class="nav-link">

                <span class="nav-icon">
                    <i class="bi bi-cart-check"></i>
                </span>

                <span>
                    Orders & Reports
                </span>

            </a>

        </nav>


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



    <!-- MAIN AREA -->

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



        <!-- PAGE -->

        <div class="management-page">

            <div class="management-container">


                <!-- HEADER -->

                <div class="management-header">

                    <div class="management-title">

                        <div class="management-title-icon">

                            <i class="bi bi-pencil-square"></i>

                        </div>


                        <div>

                            <h1>
                                Edit Product
                            </h1>

                            <p>
                                Update your jewelry and cosmetics product.
                            </p>

                        </div>

                    </div>

                </div>



                <!-- CARD -->

                <div class="management-card">


                    <!-- ERRORS -->

                    @if($errors->any())

                        <div class="error-box">

                            @foreach($errors->all() as $error)

                                <p style="margin: 0 0 5px 0;">
                                    {{ $error }}
                                </p>

                            @endforeach

                        </div>

                    @endif



                    <!-- FORM -->

                    <form
                        action="/products/update/{{ $product->id }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="edit-form"
                    >

                        @csrf



                        <!-- CATEGORY -->

                        <label>
                            Category
                        </label>

                        <select name="category_id">

                            @foreach($categories as $category)

                                <option
                                    value="{{ $category->id }}"
                                    {{ $category->id == $product->category_id ? 'selected' : '' }}
                                >

                                    {{ $category->name }}

                                </option>

                            @endforeach

                        </select>



                        <!-- SUBCATEGORY -->

                        <label>
                            Subcategory
                        </label>

                        <select name="subcategory_id">

                            @foreach($subcategories as $subcategory)

                                <option
                                    value="{{ $subcategory->id }}"
                                    {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}
                                >

                                    {{ $subcategory->name }}

                                </option>

                            @endforeach

                        </select>



                        <!-- PRODUCT NAME -->

                        <label>
                            Product Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ $product->name }}"
                            required
                        >



                        <!-- DESCRIPTION -->

                        <label>
                            Description
                        </label>

                        <textarea
                            name="description"
                            required
                        >{{ $product->description }}</textarea>



                        <!-- PRICE -->

                        <label>
                            Price
                        </label>

                        <input
                            type="number"
                            name="price"
                            value="{{ $product->price }}"
                            required
                        >



                        <!-- QUANTITY -->

                        <label>
                            Quantity
                        </label>

                        <input
                            type="number"
                            name="quantity"
                            value="{{ $product->quantity }}"
                            required
                        >



                        <!-- CURRENT IMAGE -->

                        <label>
                            Current Image
                        </label>

                        <div class="current-image">

                            @if($product->image)

                                <img
                                    src="{{ asset('storage/products/' . $product->image) }}"
                                    width="120"
                                    height="120"
                                >

                            @else

                                <p>
                                    No Image
                                </p>

                            @endif

                        </div>



                        <!-- CHANGE IMAGE -->

                        <label class="image-label">
                            Change Image
                        </label>

                        <input
                            type="file"
                            name="image"
                            accept="image/*"
                            onchange="previewImage(event)"
                        >


                        <br>


                        <img
                            id="preview"
                            src=""
                            width="150"
                            height="150"
                            style="display:none; margin-bottom:20px;"
                        >



                        <!-- STATUS -->

                        <label>
                            Status
                        </label>

                        <select name="status">

                            <option
                                value="1"
                                {{ $product->status == 1 ? 'selected' : '' }}
                            >
                                Available
                            </option>

                            <option
                                value="0"
                                {{ $product->status == 0 ? 'selected' : '' }}
                            >
                                Not Available
                            </option>

                        </select>



                        <!-- BUTTONS -->

                        <div
                            style="
                                margin-top:10px;
                                display:flex;
                                align-items:center;
                                gap:20px;
                            "
                        >

                            <button
                                type="submit"
                                class="management-add-btn update-btn"
                            >

                                <i class="bi bi-check-lg"></i>

                                Update Product

                            </button>


                            <a
                                href="/products"
                                class="back-link"
                            >

                                ← Back to Products

                            </a>

                        </div>


                    </form>


                </div>

            </div>

        </div>


    </main>


</div>



<!-- IMAGE PREVIEW SCRIPT -->

<script>

    function previewImage(event)
    {
        let image = document.getElementById('preview');

        if (event.target.files && event.target.files[0])
        {
            image.src = URL.createObjectURL(
                event.target.files[0]
            );

            image.style.display = 'block';
        }
    }

</script>


</body>

</html>