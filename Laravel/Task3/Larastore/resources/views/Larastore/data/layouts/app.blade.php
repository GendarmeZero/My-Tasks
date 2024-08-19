
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lara Store</title>
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
@yield('header')
<!-- Header -->
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
@yield('footer')
