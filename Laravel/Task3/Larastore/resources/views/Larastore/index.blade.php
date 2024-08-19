
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
            background: url('https://www.shutterstock.com/image-illustration/view-clothes-rack-dresses-tshirts-600nw-2329038221.jpg') no-repeat center center/cover;
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
        <h1 class="logo"> Lara Store <sub>by Ala</sub> </h1>
        <nav>
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
<!-- Main Banner -->
<section class="banner">
    <div class="container">
        <h2>Welcome to Lara Store <sub>by Ala</sub> </h2>
        <p>Your one-stop shop for everything you need.</p>
        <a href="/index/all" class="btn">Shop Now</a>
    </div>
</section>



<!-- Product Listing -->
<section class="products">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="product-list">
            @foreach($products as $product)
            <div class="product-item">
                <img src="https://picsum.photos/200/300?random=" alt="Product 1">
                <h1> {{$product->product_name}}</h1>
                <p>{{$product->product_price}}</p>
                <form method="GET" action="{{ route('product.show', $product->id) }}">
                    <button type="submit">View</button>
                </form>
                <form style="display: inline" method="POST" action="{{route('product.destroy' , $product->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"   class="btn btn-danger">Delete</button>
                </form>



            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2024 MyStore. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
