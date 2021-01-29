<?php
require ('index.php');
?>

<p style="text-align: center; font-size: 48px;">Authorisatized as <?=$_SESSION["log"]?></p>

<div class="container">

<form>

<input class="btn" type="submit" formaction="logout.php" value="Log out">

</form>

</div>

<style>

p{
    font-family: Verdana, sans-serif;
}

.container{
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn {

display: inline-block;
padding: 6px 12px;
font-weight: 400;
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
cursor: pointer;
border: 1px solid transparent;
border-radius: 4px;
color: #333;
background-color: #fff;
border-color: #ccc;
min-width: 13%;
font-size: 1.9em;
outline: none;
transition: 0.2s;

}




</style>    


