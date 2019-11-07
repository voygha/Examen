<!DOCTYPE html>

<html>

<head>

<title>
    Examen
</title>

<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="menulate.css">
    <link rel="stylesheet" href="bootstrap.css">

</head>

        <body>

                <header>
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu"><img src="iconos/menu.png" width="40px" height="40px" alt="">
            </label> 
            <nav class="menu">
                <ul>
                    <li><a href="index.php"> Inicio </a></li> 
                    <li><a href="Rectangulo.php"> Rectangulo</a></li>
                    <li><a href="circulo.php"> Circulo</a></li>
                    
                </ul>
            </nav>
        </header>

    <br><br>

        <form name="formularioDatos" method="post" action="pru.php">
            <h1>CALCULO DEL AREA DEL CIRCULO</h1>
            <br/>
            Introduzca radio: <input type="text" name="diam" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />

        </form>


        <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>