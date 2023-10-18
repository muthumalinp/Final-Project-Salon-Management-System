<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Anoma Bridal and Beauty Salon\Home</title>

    

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


</head>
<body class="body">
    <script src="asset('js/bootstrap.js')}}"></script>
    <script src="asset('js/bootstrap.min.js')}}"></script>

    <nav class="nav1">
        <div id="div1 w3-bar-block">
        <form style="padding-left:5%; padding-right:5%">
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; height: auto; color:white; padding: 15px 32px; font-size: 15px; margin: 2px 5px;"><a href="#">Home</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px;"><a href="/About">About</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px;"><a href="/Services">Services</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px;"><a href="/Gallery">Gellery</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px;"><a href="/Product">Product</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px"><a href="/Rent">Rent</a></button>
        </form>
        </div>
    </nav>

    <nav>
    <div id="sign">
            <button type="button" data-toggle="collapse" data-target="#navbarCollaps">
            <span>
                <a href="/Register">Register</a>
            </span>   
        </button>
        </div>
    </nav>

    <div id="bookbox1">
        <p id="book1">Shedule Your Appoinment</p>
    </div>

    <p class="sname">Anoma Bridal & Beauty Salon</p>

    <img src="{{ asset('css/home1.jpeg') }}" alt="Salon" class="pic">
</body>
</html>