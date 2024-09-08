<?php

session_start();

// php populate html table from mysql database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "concessionaria";

// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query

$query = "SELECT * FROM veiculos";


// result for method one
$result1 = mysqli_query($connect, $query);

$dataRow = "";

?>

<!DOCTYPE html>

<html>

    <head>

            <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>ICAR - Tabela</title>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>

            table {
                text-align: center;
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                max-width: 100%;
            }

            td,th {
                border: 1px solid #ddd;
                text-align: center;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2;}

            tr:hover {background-color: #ddd;}

            th {
                text-align: center;
                padding-top: 2%;
                padding-bottom: 5%;
                background-color: #101010;
                color: white;
            }
            

        </style>

    </head>

    <body>
    <div class="all">
    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <h1><a class="linku" href="principal.php">I<span>CAR</span></a></h1>
            </div>

            <ul class="navigation">
                <a class="linku" href="principal.php">
                    <li>INÍCIO</li>
                </a>
               <a class='linku' href='painelGerente.php'>
                    <li>GERENTE</li>
                </a>
                <a class="linku" href="catalogo.php">
                    <li>CATÁLOGO</li>
                </a>
                <a class="linku" href="sobre.php">
                    <li>SOBRE</li>
                </a>
                <?php
                if (!isset($_SESSION['email'])){
                echo "<a class='linku' href='index.php'>
                  <li>LOGIN</li>
                </a>";
              }
                else{
                  echo "<a class='linku' href='logout.php'>
                  <li>LOGOUT</li>
                </a>";
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="boxx" style="margin-top: 10%">
<!-- Table One -->
<table style="background-color: white;">

<tr>
    <th>#</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Ano</th>
    <th>Cor</th>
    <th>Valor</th>
    <th>Combustivel</th>
</tr>

<?php while($row1 = mysqli_fetch_array($result1)):;?>
<tr>
    <td><?php echo $row1[0];?></td>
    <td><?php echo $row1[1];?></td>
    <td><?php echo $row1[2];?></td>
    <td><?php echo $row1[3];?></td>
    <td><?php echo $row1[4];?></td>
    <td><?php echo $row1[5];?></td>
    <td><?php echo $row1[6];?></td>
    
</tr>
<?php endwhile;?>

</table>
    </div>
</div>
<div class="fooo">
    ICAR © 2019 - Todos os direitos reservados
</div>

    </body>

</html>