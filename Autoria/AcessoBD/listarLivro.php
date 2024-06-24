<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <center>
        <font face = "Century Gothic" size = "6">
            <b>Listando os Livros</b><br>
        </font>
        
        
        <style>
        table {
            width: 70%;
            margin-top: -250px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    
    <table>
        <thead>
            <tr>
                <th>Cod_Livro</th>
                <th>Livro</th>
                <th>Categoria</th>
                <th>ISBN</th>
                <th>Idioma</th>

            </tr>
        </thead>
        
        
        <?php
        include_once 'livro.php';
        $a = new livro();
        $livro_bd=$a->listar();
        ?>

        <?php
        foreach($livro_bd as $livro_mostrar){
            ?>
            <tr>
            <br><br>
            <b> <th><?php echo $livro_mostrar[0]; ?></b>   &nbsp;&nbsp;&nbsp;&nbsp;
            <th><?php echo $livro_mostrar[1]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
            <th><?php echo $livro_mostrar[2]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
            <th><?php echo $livro_mostrar[3]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
            <th><?php echo $livro_mostrar[4]; ?> 
        </tr>   
            <?php
        }
            echo "<br> <br> <br> <br> <button> <a href = 'menu.html'> Voltar </a>"; ?>
    </center>
    </table>
    
</body>
</html>