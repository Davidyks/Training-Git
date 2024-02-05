<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="left">
            <a href=""><img src="https://img.freepik.com/premium-vector/shoes-shop-logo-template-design_316488-452.jpg" alt="Shoe Store Logo"></a>
        </div>
        <div class="right">
            <a href="/home">Home</a>
            <a href="#">Product</a>
            <a href="/contact-us">Contact Us</a>
            <a href="/login" class="login">Login</a>
        </div>
    </nav>
    
    <div class="product">
        <br>
        <h1>Man Shoes</h1>
        <div class="manShoes">
            <div>
                <img src="{{ asset('asset/Man Formal Shoes.webp') }}" alt="">
                <h2>Name: Man Formal Shoes</h2>
                <h2>Price: Rp300.000</h2>
                <h2>Size: 40-45</h2>
                <h2>Color: Black</h2>
            </div>

            <div>
                <img src="{{ asset('asset/Man Running Shoes.webp') }}" alt="">
                <h2>Name: Man Running Shoes</h2>
                <h2>Price: Rp500.000</h2>
                <h2>Size: 40-45</h2>
                <h2>Color: Gray</h2>
            </div>

            <div>
                <img src="{{ asset('asset/Man Sneaker.jpg') }}" alt="">
                <h2>Name: Man Sneaker</h2>
                <h2>Price: Rp400.000</h2>
                <h2>Size: 40-45</h2>
                <h2>Color: White</h2>
            </div>
        </div>

        <br>
        <h1>Woman Shoes</h1>
        <div class="womanShoes">
            <div>
                <img src="{{ asset('asset/Woman Formal Shoes.jpg') }}" alt="">
                <h2>Name: Woman Formal Shoes</h2>
                <h2>Price: Rp300.000</h2>
                <h2>Size: 37-42</h2>
                <h2>Color: Black</h2>
            </div>

            <div>
                <img src="{{ asset('asset/Woman Running Shoes.jpg') }}" alt="">
                <h2>Name: Woman Running Shoes</h2>
                <h2>Price: Rp500.000</h2>
                <h2>Size: 37-42</h2>
                <h2>Color: Purple</h2>
            </div>

            <div>
                <img src="{{ asset('asset/Woman Sneaker.jpg') }}" alt="">
                <h2>Name: Woman Sneaker</h2>
                <h2>Price: Rp400.000</h2>
                <h2>Size: 37-42</h2>
                <h2>Color: White</h2>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>