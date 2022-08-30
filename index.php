<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<!--Incluindo o arquivo de header-->
    
<?php include './Navegacao/header.php';?>

<!--Criando a barra de navegação-->

<div>
    <nav>
        <a href="?p=home">Home</a>
        <a href="?p=sobre_nos">Sobre Nós</a>
        <a href="?p=contato" >Contato</a>

    </nav>
</div>
<!--Incluindo o arquivo do rodapé-->

<?php include './Navegacao/footer.php';
    require_once 'links.php';
    nav_bar($_GET['p']);

    echo $_GET['p'];
    
?>

</body>
</html>

