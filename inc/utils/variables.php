<?php
   $phone = "919891119";
   $file = basename($_SERVER['PHP_SELF']);
   $page = str_replace(".php", "", $file);
   $footerInformation = "Puedes llamar al teléfono " .  $phone . " de forma totalmente gratuita y le atenderemos sin compromiso."; 
   $mainTitle = "Seguro Full";
    $titles = [
        "index.php" =>  $mainTitle . " | Inicio",
        "nosotros.php" =>  $mainTitle . " | Nosotros",
        "seguro-de-auto.php" =>  $mainTitle . " | Seguros",
        "seguro-de-decesos.php" =>  $mainTitle . " | Seguros",
        "seguro-de-hogar.php" =>  $mainTitle . " | Seguros",
        "seguro-de-salud.php" =>  $mainTitle . " | Seguros",
        "seguro-de-viaje.php" =>  $mainTitle . " | Seguros",
        "seguro-de-familiar.php" =>  $mainTitle . " | Seguros",
        "contacto.php" =>  $mainTitle . " | Contacto 24 horas",
    ];
    $pages = [
        "index.php" => "Inicio",
        "nosotros.php" =>  "Nosotros",
        "seguro-de-auto.php" =>  "Seguros",
        "seguro-de-decesos.php" =>  "Seguros",
        "seguro-de-hogar.php" =>  "Seguros",
        "seguro-de-salud.php" =>  "Seguros",
        "seguro-de-viaje.php" =>  "Seguros",
        "seguro-de-familiar.php" =>  "Seguros",
        "contacto.php" =>  "Contacto 24 horas",
        "politica-de-privacidad.php" => "Política de privacidad",
        "aviso-legal.php" => "Aviso legal",

    ];
    $pagesHeader = [
        "index.php" => "inicio",
        "nosotros.php" =>  "nosotros",
        "contacto.php" => "contacto",
    ];
