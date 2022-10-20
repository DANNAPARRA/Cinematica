<?php
function urlBase(){

    $directorio = $_SERVER['PHP_SELF'];
    $infoDirectorio = pathinfo($directorio);
    $servidor = $_SERVER['SERVER_NAME'];
    $protocolo = strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0,5))=='https'?'https':'http';
    $url = $protocolo."://".$servidor."".$infoDirectorio['dirname']."/";
    return $url;
}
function url(){
    if (isset($_SERVER['HTTPS'])){
        $protocolo = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] !="off")?"https":"https";
    } else{
        $protocolo = "http";
    }
    $temp = parse_url($_SERVER['REQUEST_URI']);
    $url = $protocolo."://".$_SERVER['SERVER_NAME'].$temp['path'];
    return $url;
}
url();
?>
<nav class="navbar navbar-expand-sm bg-info navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" <?Php echo 'href="'.url().'"';?>>La fisica del minimalista</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" <?Php echo 'href="'.url().'"';?>>Inicio</a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">Cinematica</a>
                <ul class="dropdown-menu">
                    <li > 
                        <a class="dropdown-item" <?Php echo 'href="'.url().'';?>vistas/mur.php">MUR</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li > 
                        <a class="dropdown-item" href="#">MUA</a>
                    </li>
                    <div class="dropdown-divider"></div>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Convercion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
        </ul>
    </div>
</nav>

