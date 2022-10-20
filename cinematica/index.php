<!DOCTYPE html>
<html>

<head>
    <title>La fisica del minimalista</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"> </script>
</head>

<body>
    <?php include './modules/menu/menu.php'; ?>
    <div class="conteiner-fluid bg-light">
        <div class="container p-5">

            <div class="row">
                <div class="col-4">
                    <img src="./img/3.png" class="rounded w-100" alt="...">
                </div>

                <div class="col-8">
                    <h2>Cinemática</h2>
                    <p>La cinemática es la rama de la mecánica que describe el movimiento de los objetos sólidos sin
                        considerar las causas que lo originan y se limita, principalmente, al estudio de la trayectoria
                        en
                        función del tiempo.
                        <br>Para ello utiliza velocidades y aceleraciones, que describen cómo cambia la posición en
                        función
                        del tiempo. La velocidad se determina como el cociente entre el desplazamiento y el tiempo
                        utilizado, mientras que la aceleración es el cociente entre el cambio de velocidad y el tiempo
                        utilizado.
                    </p>
                </div>
            </div>

            <div class="conteiner-fluid ">
                <div class="container p-3">
                <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        MUR
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>MUR: Movimiento Uniforme Rectilineo</strong> Movimiento en el que los cuerpos se desplazan en una trayectoria recta con una velocidad constante y recorren distancias iguales en tiempos iguales.
     Ejemplo: Un auto que por cada hora que transcurre recorre 150 kilómetros
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        MUA
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>MUA:Movimiento Uniformemente Acelerado.</strong> Describe los cuerpos cuando se desplazan en una trayectoria rectilínea con una aceleración constante
      Ejemplos: Un cuerpo que aumenta su velocidad a 3 m//s por cada segundo
                      Una fruta que se cae de un árbol acelerada por la gravedad
                      Una pelota que es lanzada verticalmente hacia arriba
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        CONVERCIONES
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      La conversión de longitudes es simplemente cuestión de multiplicar por el número correcto. Para convertir longitudes sigue los siguientes pasos: Encuentra el número de conversión correcto (ver Tablas de conversión). Luego, simplemente multiplica por ese número.
      </div>
    </div>
  </div>
</div>

                </div>
            </div>
            <?php
            include './modules/menu/footer.php';
            ?>

</body>

</html>