<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About-Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Bree Serif', serif
        }
        
        .container {
            width: 100%;
        }
        
        .container .info {
            display: block;
            width: 80%;
            margin: 0px auto;
            padding: 50px 0px;
        }
        
        .info .title {
            width: 100%;
            text-align: center;
            margin-bottom: 50px;
            text-transform: uppercase;
            font-size: 30px;
            color: #40c9a2;
            margin-top: 75px;
        }
        
        .info .title::after {
            content: "";
            height: 5px;
            width: 150px;
            background-color: #40c9a2;
            border-radius: 25px;
            display: block;
            margin: auto;
        }
        
        .content {
            float: left;
            width: 55%;
        }
        
        .image {
            float: right;
            width: 40%;
        }
        
        .image img {
            width: 100%;
            height: auto;
        }
        
        .content .artical h3 {
            color: #a3a3a3;
            font-size: 17px;
        }
        
        .artical .para {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }
        
        .artical .btn {
            margin-top: 50px;
        }
        
        .artical .btn a {
            text-decoration: none;
            padding: 8px 25px;
            background-color: #88941e;
            border-radius: 40px;
            color: #fff;
            font-size: 18px;
            letter-spacing: 1.5px;
        }
        
        .artical .btn a:hover {
            color: #fff;
            background-color: #f28f92;
            transition: 1s ease;
        }
        
        .container .social {
            width: 100%;
            clear: both;
            margin: 0px auto;
            margin-left: 160px;
        }
        
        #navbar {
            display: flex;
            align-items: center;
            position: sticky;
            z-index: 1;
            width: 100%;
            height: 98px;
            margin-bottom: 10px;
        }
        
        #logo {
            margin: 10px 34px;
        }
        
        #logo img {
            height: 59px;
            margin: 3px 6px;
        }
        
        #navbar::before {
            content: "";
            background-color: black;
            position: absolute;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
            z-index: -1;
            opacity: 0.7;
        }
        
        #navbar ul {
            display: flex;
            font-family: 'Baloo Bhai', cursive;
        }
        
        #navbar ul li {
            list-style: none;
            font-size: 1.3rem;
        }
        
        #navbar ul li a {
            color: white;
            display: block;
            padding: 3px 18px;
            border-radius: 20px;
            text-decoration: none;
        }
        
        #navbar ul li a:hover {
            color: red;
            background-color: white;
        }
        
        footer {
            background: black;
            color: white;
            padding: 9px 20px;
            text-align: center;
            margin-top: 100px;
        }
        
        .icons {
            margin-left: 525px;
            color: rgb(254, 254, 254);
        }
    </style>
</head>

<body>
    <section>
        <nav id="navbar">
            <div id="logo">
                <img src="1.png" alt="TechHome">
            </div>
            <!-- <a href="#navbar"><button id="top">
                <i class="material-icons">arrow_upward</i>
            </button></a> -->
            <ul>
                <li class="item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="item"><a href="index.php"><i class="fa fa-bars"></i> Products</a></li>
                <li class="item"><a href="aboutus.php">About</a></li>
                <li class="item"><a href="booking.php">Book Trial</a></li>
                <li class="item"><a href="contact-us.php">Contact-Us</a></li>
                <li class="item"><a href="login.php">Log-in</a></li>
            </ul>
            <div class="icons">
                <a href="#"><i class="fa fa-facebook-f fa-2x"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
            </div>
        </nav>
        <div class="container">
            <div class="info">
                <h1 class="title">ABOUT-US</h1>
                <div class="content">
                    <div class="artical">
                        <h3>
                            Latest Gadgets at discounted price</h3>
                        <p class="para">
                        Hello my name is karmanya this is my page that you see if you want to purchase anything please go and visit the products page first any thing and go to the trail page if you want to buy anything . Did you like anything please visit my site again and please ensure to like subscribe and share my site tpo everone.
                        </p>

                        <div class="btn">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image">
                <img src="about-us.jpg" alt="image not available">
            </div>
            <div class="social">
                <a href="#"><i class="fa fa-facebook-f fa-2x"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
            </div>

        </div>
        <footer>
            <div class="center">
                Copyright &copy; www.techsevi.com. All rights reserved!
            </div>
        </footer>

</body>

</html>