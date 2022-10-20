<?php
$valor='';
$desde='';
$hasta='';
function convertir_a_metros($valor, $unidad_desde)
{
    switch ($unidad_desde) {
        case 'Milimetro':
            return $valor / 1000;
            break;
        case 'Centimetro':
            return $valor / 100;
            break;
        case 'Metro':
            return $valor * 1;
            break;
        case 'Kilometro':
            return $valor * 1000;
            break;
        case 'Pie':
            return $valor * 0.3048;
            break;
        case 'Pulgada':
            return $valor * 0.0254;
            break;
        default:
            return 'unidad de medida no soportada';
            break;
    }
}

function convertir_desde_metros($valor, $unidad_hasta)
{
    switch ($unidad_hasta) {
        case 'Milimetro':
            return $valor * 1000;
            break;
        case 'Centimetro':
            return $valor * 100;
            break;
        case 'Metro':
            return $valor * 1;
            break;
        case 'Kilometro':
            return $valor / 1000;
            break;
        case 'Pie':
            return $valor / 0.3048;
            break;
        case 'Pulgada':
            return $valor /0.0254;
            break;
        default:
            return 'unidad de medida no soportada';
            break;
    }
}


 if(isset($_POST['convertir'])) {
$valor= $_POST['valor'];
$desde= $_POST['desde'];
$hasta= $_POST['hasta'];
$calculoDesde = convertir_a_metros($valor,$desde);
$calculoHasta = convertir_desde_metros($calculoDesde,$hasta);
$resultado = number_format($calculoHasta,4);
 }
?>


<!doctype html>
<html lang="es">
  <head>
  <title>La fisica del minimalista</title>
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
  <h2 class=" p-3">Conversor de Longitud</h2>
    <div class="container">
        <form method="POST"> 

        <div class="row mt-4">

           <div class="col-sm-4">
           
           <label for="valor" class="form-label" >VALOR:</label>
            <input type="number" name="valor" class="form-control" required value="<?php if(isset($_POST['valor'])){echo $_POST['valor'];} ?>">  
           </div>

                <div class="col-sm-4">
                <label for="desde" class="form-label">Desde:</label>

                <select class="form-select" name="desde">    
                    <option value="">--Selecciona un valor--</option>
                        <option value="Milimetro" <?php if(isset($_POST['desde'])
                         && $_POST['desde']=='Milimetro') {echo 'selected';} ?>>Milímetro</option>
                        <option value="Centimetro"  <?php if(isset($_POST['desde'])
                         && $_POST['desde'] =='Centimetro') {echo 'selected';} ?>>Centímetro</option>
                        <option value="Metro" <?php if(isset($_POST['desde'])
                         && $_POST['desde'] =='Metro') {echo 'selected';} ?>>Metro</option>
                        <option value="Kilometro"  <?php if(isset($_POST['desde'])
                         && $_POST['desde']=='kilometro') {echo 'selected';} ?>>Kilómetro</option>
                        <option value="Pie"  <?php if(isset($_POST['desde'])
                         && $_POST['desde'] =='Pie') {echo 'selected';} ?>>Pie</option>
                        <option value="Pulgada"  <?php if(isset($_POST['desde'])
                         && $_POST['desde']=='Pulgada') {echo 'selected';} ?>>Pulgada</option>
                    </select>
                
                
                
                </div>
                <div class="col-sm-4">
                <label for="desde" class="form-label">hasta:</label>
                <select class="form-select" name="hasta" >
                        <option value="">--Selecciona un valor--</option>
                        <option value="Milimetro" <?php if(isset($_POST['hasta'])
                         && $_POST['hasta']=='Milimetro') {echo 'selected';} ?>>Milímetro</option>
                        <option value="Centimetro"  <?php if(isset($_POST['hasta'])
                         && $_POST['hasta'] =='Centimetro') {echo 'selected';} ?>>Centímetro</option>
                        <option value="Metro" <?php if(isset($_POST['hasta'])
                         && $_POST['hasta'] =='Metro') {echo 'selected';} ?>>Metro</option>
                        <option value="Kilometro"  <?php if(isset($_POST['hasta'])
                         && $_POST['hasta']=='kilometro') {echo 'selected';} ?>>Kilómetro</option>
                        <option value="Pie"  <?php if(isset($_POST['hasta'])
                         && $_POST['hasta'] =='Pie') {echo 'selected';} ?>>Pie</option>
                        <option value="Pulgada"  <?php if(isset($_POST['hasta'])
                         && $_POST['hasta']=='Pulgada') {echo 'selected';} ?>>Pulgada</option>
                        </select>   
                </div>
           
        </div>  
        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" name="convertir" class="btn btn-success w-100 py-4">CONVERTIR</button>
            </div>
                
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="resultado" class="form-label">RESULTADO:</label>
                    <input type="text" name="resultado"class="form-control" value="<?php if(isset($resultado))echo $resultado; ?>">                
                </div>
            </div>
        </div> 
         </form>     
    </div>
    <?php
            include '../modules/menu/footer.php';
            ?>

  </body>
</html>