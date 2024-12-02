<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>View</title>

    <style>
        h1{
            text-align: center;
        }
        
        #body{
            text-align: center;
        }
    </style>
</head>
<body>

<div id="container">
	<h1> Exibindo a camada de view </h1>

	<div id="body">

		<form action="Teste1.php" method="post">
        <input type="text" placeholder="Nome" name="txtNome">
        <br>
        <button type="submit"> Enviar para o banco de dados </button>
        </form>

    </div>

</body>
</html>
