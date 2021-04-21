<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template</title>
        <style>

            header{
                position: relative;
                margin: auto;
                text-align: center;
                padding: 5px;
            }

            nav{
                position: relative;
                margin: auto;
                width: 100%;
                height: auto;
                background: black;
            }

            nav ul{
                position: relative;
                margin: auto;
                width: 50%;
                text-align: center;
            }

            nav ul li{
                display: inline-block;
                width: 24%;
                line-height: 50px;
                list-style: none;
            }

            nav ul li a{
                color: white;
                text-decoration: none;
            }

            section{
                position: relative;
                padding: 20px;
            }

            h1{
                text-align: center;
            }

            form{
                text-align: center;
            }

            table{
                
            }
        </style>
    </head>
    <body>
        <header>
            <h1>LOGOTIPO</h1>
        </header>
        <?php
            include "modules/navegacion.php";
        ?>
        <section>
            <?php
                $mvc = new MvcController();
                $mvc -> enlacesPaginasController();
            ?>
        </section>
    </body>
</html>