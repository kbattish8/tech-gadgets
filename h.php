<form action="#" method="post">
<input type="text" name="t1" id="">
<input type="submit" name="b1" value="submit" placeholder="submit" >

<?php
if(isset($_POST['b1']))
{
if(ctype_alpha($_POST['t1']))
{
    echo "true";
}}?>
</form>





