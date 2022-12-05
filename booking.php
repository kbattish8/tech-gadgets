<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial Booking</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
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
        
/*         html {
/*             font-size: 62.5%;
        } */
        
        body {
            box-sizing: border-box;
        }
        
        section {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .section booking {
            height: 100vh;
            background-image: linear-gradient(to right bottom, #66a5ad, #c4dfe6);
        }
        
        .book {
            width: 60%;
            height: 60%;
            background-image: linear-gradient(105deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.9) 50%, transparent 50%), url("5.jpg");
            background-size: 100%;
            background-position: right;
            border-radius: 3px;
            box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.2);
            margin-top: 85px;
        }
        
        .form {
            width: 50%;
            padding: 6rem;
        }
        
        .head {
            font-size: 4rem;
            margin-bottom: 3rem;
            color: #07575b;
        }
        
        .form-group {
            margin-bottom: 2rem;
        }
        
        .form-group:nth-child(3) {
            margin-bottom: 5rem;
        }
        
        .input {
            font-size: 1. 5rem;
            font-family: inherit;
            padding: 1.5rem 2rem;
            border-radius: 2px;
            background-color: rgba(196, 223, 230, 0.4);
            border: none;
            border-bottom: 3px solid transparent;
            width: 90%;
            display: block;
            transition: all 0.3s;
        }
        
        .input:focus {
            outline: none;
            box-shadow: 0 1rem 2 rem rgba(0, 0, 0, 0.1);
            border-bottom: 3px solid #07575b;
            background-color: rgba(196, 223, 230);
            ;
        }
        
        .input:focus:invalid {
            border-bottom: 3px solid red;
        }
        
        .input:focus::-webkit-input-placeholder {
            color: grey;
        }
        
        .form-label {
            font-size: 1.4 rem;
            font-weight: 700;
            margin-left: 2rem;
            margin-top: 0.7rem;
            display: block;
            transition: all 0.3s;
        }
        
        .form-radio:placeholder-shown+.form-label {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-4rem);
        }
        
        .form-radio {
            width: 25%;
            display: inline-block;
        }
        
        .button,
        .button:link,
        .button:visited {
            text-transform: uppercase;
            text-decoration: none;
            padding: 0.5rem 4rem;
            display: inline-block;
            border-radius: 10rem;
            transition: all 0.2s;
            position: relative;
            font-size: 16px;
            border: none;
            cursor: pointer;
            opacity: 0.7;
            margin-top: 4rem;
            background-color: coral;
            color: black;
        }
        
        .button:hover {
            transform: translateY(-3px);
            /* background-color: blue; */
            opacity: 1;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
        }
        
        .button:active,
        .button:focus {
            outline: none;
            transform: translateY(-1px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
        }
        
        .form-rbtn {
            font-size: 20px;
        }
        
        .button {
            border: none;
            color: black;
            cursor: pointer;
            font-size: 16px;
            background-color: #1f77d8e3;
        }
        
        footer {
            background: black;
            color: white;
            padding: 9px 20px;
            text-align: center;
            margin-top: 120px;
        }
        
        .icons {
            margin-left: 550px;
            color: rgb(254, 254, 254);
            padding-left: 30px;
        }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
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
    <section class="Booking">
        <div class="book">
            <div class="form">
                <form action="#" method="post" class="form1">
                    <h2 class="head">
                        Start Booking
                    </h2>
                    <div class="form-group">
                        <input type="text" class="input" placeholder="Full Name" name=t1 id="name">
                        <label for="name" class="form-label">Full Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" class="input" placeholder="Eamil Address" name=t2 id="Email">
                        <label for="email" class="form-label">Email Address</label>
                    </div>
                    <div class="form-group">
                        <input type="date" class="input" placeholder="Date" name=t3 id="Email">
                        <label for="email" class="form-label">Date</label>
                    </div>

                    <button type=submit class="button" name=b1>Book Trial</button>
            </div>
            </form>
        </div>
        </div>
    </section>
    <footer>
        <div class="center">
            Copyright &copy; www.techsevi.com. All rights reserved!
        </div>
    </footer>

</body>
<?php
if(isset($_POST['b1']))
{
    if(!empty($_POST['t1']&&$_POST['t2']&&$_POST['t3']))
    {
        $a=$_POST['t1'];
        $b=$_POST['t2'];
        $c=$_POST['t3'];
        $con=new mysqli("localhost","root","","technology");
        $q="insert into booking(name,email,date) values ('$a','$b','$c')";
        if($con->query($q)==true)
        {
            echo "Booking Succesfull";
        }
        else
        {
            echo "Query prob";
        }
    }
    else
    {
        echo "Name or Email or Date cannot be empty";
    }
}
?>

</html>
