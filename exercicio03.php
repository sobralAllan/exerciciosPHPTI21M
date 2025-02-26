<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercício 03</title>
</head>
<body>
    <?php include('funcoes.php') ?>
    <h1> Compare a entrada de dois números e retorne em 
        tela o maior:
    </h1><br><br>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primeiro Número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numeroUm" placeholder="Primeira Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segundo Número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numeroDois" placeholder="Segundo Número">
        </div>
     

    <br><br>
    <button type="submit" class="btn btn-primary">Calcular
        <?php
            //Coletando os números dos campos
            if(isset($_POST['numeroUm']) && 
                isset($_POST['numeroDois']) && 
                    $_POST['numeroUm'] != "" &&
                    $_POST['numeroDois'] != "")
            {
                $num1 = $_POST['numeroUm'];
                $num2 = $_POST['numeroDois'];
            }
        ?>
    </button>
    <br><br>
    </form>  

    
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" readonly>
            <?php
                echo exercicio03($num1, $num2);              
            ?>
        </textarea>
    </div>
    
    <button class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button> </h1><br><br>
</body>
</html>