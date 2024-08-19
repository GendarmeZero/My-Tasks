<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Homepage Clone</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: #ffffff;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #141414;
        }
        .navbar img {
            width: 100px;
        }
        .navbar ul {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .navbar ul li {
            margin-left: 20px;
        }
        .navbar ul li a {
            color: #ffffff;
            text-decoration: none;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            background: url('https://assets.nflxext.com/ffe/siteui/vlv3/2215f1f7-25d3-49b3-8a2e-330009f9dd1b/62c91a0a-c5b2-4eaf-8002-7a199e863f52/NG-en-20230619-popsignuptwoweeks-perspective_alpha_website_large.jpg') no-repeat center center/cover;
        }
        .hero-content {
            text-align: center;
        }
        .hero-content h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .hero-content p {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .hero-content button {
            padding: 15px 30px;
            font-size: 20px;
            color: #ffffff;
            background-color: #e50914;
            border: none;
            cursor: pointer;
        }
        .sections {
            padding: 50px 20px;
        }
        .section-title {
            margin-bottom: 20px;
            font-size: 30px;
        }
        .row {
            display: flex;
            overflow-x: auto;
            gap: 10px;
        }
        .row img {
            width: 200px;
            border-radius: 10px;
        }
        form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            align-items: center;
        }

        form input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        form button {
            padding: 8px 16px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .movie-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Increased minimum width for larger cards */
            gap: 20px;
            padding: 20px;
        }

        .movie-card {
            background-color: #222;
            color: white;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Added shadow for a more pronounced effect */
        }

        .movie-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4); /* Enhanced shadow on hover */
        }

        .movie-card-image img {
            width: 100%;
            height: auto;
            display: block;
            border-bottom: 2px solid #333;
        }

        .movie-card-content {
            padding: 20px; /* Increased padding for better spacing */
        }

        .movie-card h3 {
            margin: 0 0 10px;
            font-size: 20px; /* Increased font size for titles */
        }

        .movie-card p {
            margin: 0 0 10px;
            font-size: 16px; /* Increased font size for description */
            color: #ddd;
        }

        .genre {
            background-color: #e50914;
            padding: 8px 12px; /* Increased padding for better visibility */
            border-radius: 5px;
            font-size: 14px; /* Increased font size */
            color: white;
            display: inline-block; /* Make sure genre is inline with text */
        }





    </style>
</head>
@yield('header')

<body>
<!-- Navbar -->
<div class="navbar">
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Logonetflix.png" alt="Netflix Logo">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Shows</a></li>
        <li><a href="#">Footer</a></li>
        <li><a href="#">Dashboard</a></li>
    </ul>
</div>
@yield('nav')
