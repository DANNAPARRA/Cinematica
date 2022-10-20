<!DOCTYPE html>
<html>

<head>
    <title>MUR:La fisica del minimalista</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"> </script>
</head>

<body>
    <?php
            include '../modules/menu/menu.php';
            ?>
    <h2 class="p-1"> Movimiento Uniforme Rectilineo</h2>
    <pre>
         <b>v= d/t </b>
                v=velocidad
                d=distancia
                t=tiempo
              </pre>
    <div class="container">
        <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="input-group">
                <input type="number" class="form-control" placeholder="Ecriba la distancia" name="distancia" step="0.01"
                    id="distancia" required>

                <select class="form-select" name="unidadL">
                    <option value="mts">Metros</option>
                    <option>Kilometros</option>
                    <option>millas</option>
                </select>
            </div>


            <div class="input-group mt-3">
                <input type="number" class="form-control" placeholder="Ecriba el tiempo" name="tiempo" step="0.01"
                    required>
                <select class="form-select" name="unidadt">
                    <option value="sg">Segundos </option>
                    <option>Minutos</option>
                    <option>Horas</option>
                </select>
            </div>
            <div class="d-grid mt-3">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-calculator-fill">Calcular</i>
                </button>
            </div>
        </form>
    </div>
    <div class="container mt-3">
        <?php
                if($_SERVER['REQUEST_METHOD']=="POST"){
                  echo "para una distancia de: ".$_POST['distancia']."". $_POST['unidadL'];
                  echo " en ". $_POST['tiempo']." ". $_POST['unidadt']."<br>";

                  echo "la velocidad resultado seria: ".$_POST['distancia']/ $_POST['tiempo']. $_POST['unidadL']."/". $_POST['unidadt'];
                 
                }
                ?>
    </div>

    <?php
            include '../modules/menu/footer.php';
            ?>


</body>

</html>