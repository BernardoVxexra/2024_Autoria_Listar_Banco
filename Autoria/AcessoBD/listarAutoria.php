<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoria</title>
</head>
<body>
    <center>
        <font face = "Century Gothic" size = "6">
            <b>Listando a Autoria</b><br>
        </font>
        <style>
        table {
            width: 40%;
            margin-top: -330px;
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
                <th>Cod_Autor</th>
                <th>Cod_Livro</th>
                <th>DataLaçamento</th>
                <th>Editora</th>
            </tr>
        </thead>

        <?php
        include_once 'Autoria.php';
        $a = new Autoria();
        $autoria_bd=$a->listar();
        ?>

        <?php
        foreach($autoria_bd as $autoria_mostrar){
    
          ?>
          <tr>
            <br><br>
            <b> <th><?php echo $autoria_mostrar[0]; ?></b>   &nbsp;&nbsp;&nbsp;&nbsp;
                <th><?php echo $autoria_mostrar[1]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <th><?php echo $autoria_mostrar[2]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <th><?php echo $autoria_mostrar[3]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
        </tr>  
            <?php
        }
            echo "<br> <br> <br> <button> <a href = 'menu.html'> Voltar </a>"; ?>
    </center>
    </table>
</body>
</html>