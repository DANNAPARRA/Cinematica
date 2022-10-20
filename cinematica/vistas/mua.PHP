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
    <h2 class="p-1">Movimiento Uniformemente Acelerado</h2>
    <pre>
         <b>a=vf-vi/t </b>
                a=aceleracion
                vf=velocidad final
                vi=velocidad inicial
                t=tiempo
              </pre>
    <div class="container">
        <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="input-group">
                <p><b>selecione la unidad de la velocidad   </b></p> 
                <select class="form-select" name="velocidad">
                    <option value="mts">Metros</option>
                    <option>Kilometros</option>
                    <option>millas</option>
                </select>

                <select class="form-select" name="tiempoa">
                    <option  value="sg">Segundos </option>
                    <option>Minutos</option>
                    <option>Horas</option>
                </select>
            </div>
<div class="input-group mt-3">
<input type="number" class="form-control"  placeholder="Escriba la velocida inicial" name="inicial" step="0.01" required>
<input type="number" class="form-control"  placeholder="Escriba la velocida final" name="final" step="0.01" required>
<input type="number" class="form-control"  placeholder="Escriba el tiempo" name="tiempo" step="0.01"  required>
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
                  echo "velocidad inicial ".$_POST['inicial']."". $_POST['velocidad'];
                  echo "velocidad final ".$_POST['final']."". $_POST['velocidad'];
                  echo " en ". $_POST['tiempo']." ". $_POST['tiempoa']."<br>";

                  echo "la aceleracion es : ".$_POST['final']- $_POST['inicial']/$_POST['tiempo']. $_POST['velocidad']."/". $_POST['tiempo'];
                 
                }
                ?>
    </div>

    <?php
            include '../modules/menu/footer.php';
            ?>

</body>

</html>