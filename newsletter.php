<?php 
   // CONECTANDO COM O BANCO DE DADOS
    $dbname = "projetophp"; 
	$dbhost = "localhost"; 
	$dbuser = "yago"; 
    $dbpass = "123"; 
	$pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);

    // VARIÁVEL QUE REPRESENTA UM CAMPO DA TABELA:
    $email = $_REQUEST['email'];

    // INSERINDO DADOS NO BANCO DE DADOS
	$pdo->query("INSERT INTO `newsletter` (email) VALUES ('$email')");
    

    echo "dados salvos com sucesso";

    // REDIRENCIONANDO PARA URL ....
    header("Location: index.php")
?>    