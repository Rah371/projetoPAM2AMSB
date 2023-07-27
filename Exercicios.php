<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Exercicios.php" method="POST">
        Nome: <input type="text" name="txt_nome"><br><br>
        <input type="submit" name="btn_VerNome" value="Verificar nome">
        <input type="submit" name="btn_ContLetra" value="Contar letras">
    </form>    
    <?php
        $nome1= $_POST['txt_nome'];
        if(isset($_POST['btn_VerNome'])){
            VerNome($nome1);
        }
        else if(isset($_POST["btn_ContLetra"])){
            $tamanho = strlen ($nome);
            echo "Esse nome tem " .$tamanho. " letras";
        }

        function VerNome($nome){
            if ($nome != ""){
                echo "Nome válido";
            }
            echo "Nome inválido.";
        }
    ?>
</body>
</html>