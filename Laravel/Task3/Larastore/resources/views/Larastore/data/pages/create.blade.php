
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lara Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Reset some basic elements */
        body, h1, h2, h3, p, ul {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Container */
        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Header */
        header {
            background: #333;
            color: white;
            padding: 10px 0;
        }

        header .logo {
            display: inline-block;
        }

        header nav ul {
            list-style: none;
            display: inline-block;
            float: right;
        }

        header nav ul li {
            display: inline;
            margin-left: 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
        }

        .cart {
            float: right;
            margin-left: 20px;
        }

        .cart a {
            color: white;
            text-decoration: none;
        }

        /* Banner */
        .banner {
            background: url('https://via.placeholder.com/1500x400') no-repeat center center/cover;
            height: 400px;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        .banner h2 {
            font-size: 48px;
        }

        .banner p {
            font-size: 24px;
        }

        .banner .btn {
            display: inline-block;
            background: #f90;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 20px;
        }

        /* Products */
        .products {
            padding: 50px 0;
            text-align: center;
        }

        .products h2 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .product-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .product-item {
            width: 30%;
            margin-bottom: 30px;
        }

        .product-item img {
            width: 100%;
            height: auto;
        }

        .product-item h3 {
            margin: 15px 0;
        }

        .product-item p {
            font-size: 20px;
            color: #333;
        }

        .product-item button {
            background: #f90;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }

        /* Footer */
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <h1 class="logo">
            <a href="/index" style="text-decoration: none;">Lara Store</a> <sub>by Ala</sub>
        </h1>        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="cart">
            <a href="#">Cart (0)</a>
        </div>
    </div>
</header>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Add New Product</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post">
                        @csrf <!-- Ensure CSRF protection -->

                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" required>
                        </div>

                        <div class="mb-3">
                            <label for="product_description" class="form-label">Product Description</label>
                            <input type="text" class="form-control" id="product_description" name="product_description" placeholder="Enter product description" required>
                        </div>

                        <div class="mb-3">
                            <label for="product_price" class="form-label">Product Price</label>
                            <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter product price" required>
                        </div>

                        <div class="mb-3">
                            <label for="user" class="form-label">Select User</label>
                            <select class="form-select" id="user" name="user_id" required>
                                <option value="" disabled selected>Select a user</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <p>&copy; 2024 MyStore. All rights reserved.</p>
    </div>
</footer>
<script>
    // Shopping Cart functionality
    let cartCount = 0;

    document.querySelectorAll('.product-item button').forEach(button => {
        button.addEventListener('click', () => {
            cartCount++;
            document.querySelector('.cart a').textContent = `Cart (${cartCount})`;
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



