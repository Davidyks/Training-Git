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
        <a href="/add-product">Add Product</a>
        <br>
        <h1>Man Shoes</h1>
        <div class="manShoes">
            @forelse($shoes as $s)
                <div>
                    <img src="{{ asset('storage/'.$s->Photo) }}" alt="{{ $s->Photo }}">
                    <h2>Name: {{ $s->Name }}</h2>
                    <h2>Price: Rp{{ $s->Price }}</h2>
                    <h2>Size: {{ $s->Size }}</h2>
                    <h2>Color: {{ $s->Color }}</h2>
                    <button class="btn btn-success">
                        <a href="/edit-product/{{ $s->id }}">Edit</a>
                    </button>
                    <br>
                    <form action="/delete-product/{{ $s->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">
                            Delete
                        </button>
                    </form>
                </div>
            @empty
                <p>{{ "Shoes empty." }}</p>
            @endforelse
        </div>

        <br>
        <h1>Woman Shoes</h1>
        <div class="womanShoes">
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>