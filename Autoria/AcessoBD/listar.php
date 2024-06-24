<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Autor</title>
</head>
<body>
    <center>
        <font face = "Century Gothic" size = "6">
            <b>Listar Autor</b><br>
        </font>

        <style>
        table {
            width: 50%;
            margin-top: -300px;
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
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Nascimento</th>
                
            </tr>
        </thead>
        

        <?php
        include_once 'Autor.php';
        $a = new Autor();
        $autor_bd=$a->listar();
        ?>

        <?php
        foreach($autor_bd as $autor_mostrar){
            ?>
            <tr>
            <br><br>
            <b> <th><?php echo $autor_mostrar[0]; ?></b>   &nbsp;&nbsp;&nbsp;&nbsp;
                <th><?php echo $autor_mostrar[1]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <th><?php echo $autor_mostrar[2]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <th><?php echo $autor_mostrar[3]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <th><?php echo $autor_mostrar[4]; ?> 
        </tr>
            <?php
        }
            echo "<br> <br> <br> <button> <a href = 'menu.html'> Voltar </a>"; ?>
    </center>
    </table>
</body>
</html>