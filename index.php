<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechSevi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="product.css">

<body>
    <form action="#" method="post">
    <nav id="navbar">
        <div id="logo">
            <img src="1.png" alt="TechHome">
        </div>
        
        <ul>
            <li class="item"><a href="#home"><i class="fa fa-home"></i>Home</a></li>
            <li class="item"><a href="#services-container"><i class="fa fa-bars"></i> Products</a></li>
            <li class="item"><a href="aboutus.php">About</a></li>
            <li class="item"><a href="booking.php">Book Trial</a></li>
            <li class="item"><a href="contact-us.php">Contact-Us</a></li>
            <li class="item"><a href="login.php">Log-in</a></li>
        </ul>
        <!-- <div class="icons">
            <a href="#"><i class="fa fa-facebook-f fa-2x"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
        </div> -->
    </nav>

    <section id="home">
        <h1 class="h-primary">Technology</h1>
        <p>That Keeps On Evolving</p>
        <button class="btn">Explore</button>
    </section>

    

    <section id='services-container'>
    <h1 class='h-primary center' id='head1'>Products</h1>
    <div id='product-items'>
    
    <?php
$con=new mysqli("localhost","root","","technology");
$q="SELECT * FROM product";
$t=mysqli_query($con,$q);

    while($row =mysqli_fetch_assoc($t)) 
    {

        $pid=$row['pid'];
        $pname=$row['name'];
        $pcat=$row['category'];
        $price=$row['price'];
        $img=$row['img'];
        echo
        " 
      
        
        
        <!-- start of single product -->
    <div class='product'>
        <div class='product-content'>
            <div class='product-img'>
    
                <img src='$img' alt='not available'>
            </div>
            <div class='product-btns'>
                <button type='submit' class='btn-cart'>Add to cart
                    <span><i class='fa fa-plus'></i></span>
                </button>
                <a href='payment.php?id=$pid' class='btn-buy' name=b1> Buy now
                    <span><i class='fa fa-shopping-cart'></i></span>
                </button></a>
            </div>
        </div>
        <div class='product-info'>
            <div class='product-info-top'>
                <h2 class='sm-title'>$pcat</h2>
                <div class='rating'>
                    <span><i class='fa fa-star'></i></span>
                    <span><i class='fa fa-star'></i></span>
                    <span><i class='fa fa-star'></i></span>
                    <span><i class='fa fa-star-half-empty'></i></span>
                    <span><i class='fa fa-star-o'></i></span>
                </div>
            </div>
            <a href='#' class='product-name'>$pname</a>
            <p>₹ $price</p>
    
    
        </div>
    </div>";


    }
    ?>
                       
            
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.techsevi.com. All rights reserved!
        </div>
    </footer>
    </form>
</body>
</html>