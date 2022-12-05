<head>
    <style>
        .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
@media screen and (min-width: 992px) {
    .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .product-col-r-bottom {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}
    </style>
</head>
<?php
$con=new mysqli("localhost","root","","technology");
$q="SELECT * FROM product";
$t=$con->query($q);
    while($row = mysqli_fetch_assoc($t)) 
    {

        $pid=$row['pid'];
        $pname=$row['name'];
        $pcat=$row['category'];
        $price=$row['price'];
        $img=$row['img'];
        echo" 
<div class='card'>
  <img src='$img' alt='Denim Jeans' style='width:100%'>
  <h1>$pname</h1>
  <p class='price'>$price</p>
  <p>Some text about the jeans..</p>
  <p><button>Add to Cart</button></p>
</div>";
    }
    ?>