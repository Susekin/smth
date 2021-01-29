<?php

require ("reqdb.php");

$stmt = $dbh->prepare("SELECT COUNT(login) FROM passwords WHERE login = ?");
    if ($stmt->execute(array($_REQUEST["login"]))) {

        $row = $stmt->fetch(PDO::FETCH_NUM);

        if ($row[0] == 0){

                $stmt = $dbh->prepare("INSERT INTO passwords (login,password) VALUES (?,?)");
                $stmt->execute(array($_REQUEST["login"],md5($_REQUEST["password"])));
                ?> <p style="text-align: center;">Profile created</p> <?php
            } else { ?>
            <p style="text-align: center;">Login is already taken</p>
            <?php }
        
    }

require ("loginpage.php");

?>