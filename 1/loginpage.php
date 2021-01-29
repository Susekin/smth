<?php

require_once ("index.php");

if (isset($_SESSION["log"])){
    header ("Location: /loggedpage.php");
    exit();
}

?>


<div class = "container">

    <p style="font-size: 48px;">Authorisation</p>

</div>



<div class="container2">

    <form id="form" method="POST">
     
        <input type="text" id="login" placeholder="login" name="login">
        <br>
        <input type="text" id="password" placeholder="password" name="password">
        <br>
        <input class="btn" onclick="validate('login.php')" type="button" value="Submit">
        <br>
        <input class="btn" onclick="validate('register.php')" type="button" value="Register">

    </form>    

</div>    





<style>

input{
    outline: none;
    border-radius: 3px;
    padding: 6px 12px 8px;
    margin-bottom: 12px;
    width: 270px;
}

p{
    font-family: Verdana, sans-serif;
}

.container{
    display: flex;
    align-items: center;
    justify-content: center;
}

.container2{
    display: grid;
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

<script>
   


function validate(func){

    if (document.getElementById("login").value === "" || document.getElementById("password").value === ""){
        alert ("type credentials");
        return 0;
}

    if(/^[a-zA-Z0-9- ]*$/.test(document.getElementById("login").value) == false  || /^[a-zA-Z0-9- ]*$/.test(document.getElementById("password").value) == false) {
        alert('string contains non english characters');
        return 0;
}
     
    document.getElementById("form").action = func;
    document.getElementById("form").submit();

}

</script>