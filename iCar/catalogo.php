<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>ICAR - Principal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                    <?php
                    if (isset($_SESSION['email'] ) && $_SESSION['email']=="admin@icar.com"){
                    echo "<a class='linku' href='painelGerente.php'>
                        <li>GERENTE</li>
                        </a>";           
                    }   
                    ?>    
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

    </div>
    <div class="fooo">
        ICAR © 2019 - Todos os direitos reservados
    </div>



    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox">


                <figure class="col-md-4">
                    <a href="carro1.jpg">
                        <img alt="picture" src="carro1.jpg" title="Carro Incrivel 1" class="img-fluid chupa">
                        <figcaption class="textocarro">
                            <h4>BMW CD209</h4>
                            <p>R$300.000,00</p>
                        </figcaption>
                    </a>
                </figure>



                <figure class="col-md-4">
                    <a href="carro2.jpg">
                        <img alt="picture" src="carro2.jpg" title="Carro Incrivel 2" class="img-fluid chupa" />
                        <figcaption class="textocarro">
                            <h4>Honda Civic</h4>
                            <p>R$90.000,00</p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="carro3.jpg">
                        <img alt="picture" src="carro3.jpg" title="Carro Incrivel 3" class="img-fluid chupa" />
                        <figcaption class="textocarro">
                            <h4>Renault Sandero</h4>
                            <p>R$50.000,00</p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="carro4.jpg">
                        <img alt="picture" src="carro4.jpg" title="Carro Incrivel 4" class="img-fluid chupa" />
                        <figcaption class="textocarro">
                            <h4>Jeep Renegade</h4>
                            <p>R$70.000,00</p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="carro5.jpg" data-size="1600x1067">
                        <img alt="picture" src="carro5.jpg" class="img-fluid chupa" />
                        <figcaption class="textocarro">
                            <h4>Fiat Argo</h4>
                            <p>R$50.000,00</p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="carro6.jpg" data-size="1600x1067">
                        <img alt="picture" src="carro6.jpg" class="img-fluid chupa" />
                        <figcaption class="textocarro">
                            <h4>Lamborghini Huracan</h4>
                            <p>R$2.300.000,</p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="carro1.jpg" data-size="1600x1067">
                        <img alt="picture" src="carro1.jpg" class="img-fluid chupa" />
                        <figcaption class="textocarro">
                            <h4>BMW CD209</h4>
                            <p>R$300.000,00</p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="carro8.jpg" data-size="1600x1067">
                        <img alt="picture" src="carro8.jpg" class="img-fluid chupa" />
                        <figcaption class="textocarro">
                            <h4>Norio</h4>
                            <p>R$30.000,00</p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="carro9.jpg" data-size="1600x1067">
                        <img alt="picture" src="carro9.jpg" class="img-fluid chupa" />
                        <figcaption class="textocarro">
                            <h4>Chevrolet TrailBlazer</h4>
                            <p>R$200.000,00</p>
                        </figcaption>
                    </a>
                </figure>

            </div>

        </div>
    </div>
</body>

</html>