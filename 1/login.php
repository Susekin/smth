<?php

require_once ("index.php");
require ("reqdb.php");

$stmt = $dbh->prepare("SELECT COUNT(login) FROM passwords WHERE login = ? AND password = ?");
if ($stmt->execute(array($_REQUEST["login"],md5($_REQUEST["password"])))) {

    $row = $stmt->fetch(PDO::FETCH_NUM);

    if ($row[0] != 0){

        $_SESSION["log"] = $_REQUEST["login"];
        header ("Location: /loggedpage.php");

        } else { 
        require ("loginpage.php"); ?>
        <p style="text-align: center;">WRONG CREDENTIALS</p>
        <?php }
    
}

?>