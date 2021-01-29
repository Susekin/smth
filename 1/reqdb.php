<?php 

$dbh = new PDO('mysql:host=localhost;dbname=test',"root", "",array(
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_EMULATE_PREPARES => false
));

$stmt = $dbh->prepare("CREATE TABLE IF NOT EXISTS `passwords` (
    id int(5) NOT null PRIMARY KEY AUTO_INCREMENT,
    login varchar(100) NOT null,
    password varchar(100) NOT null,
    date datetime DEFAULT CURRENT_TIMESTAMP)
 ENGINE=MyISAM;");
$stmt->execute();

?>