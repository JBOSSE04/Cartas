<?php
    require_once 'Views/Layout/header.php';
    require_once "Lib/autoloader.php";
    require_once "Config/config.php";
    require_once 'log.php';

    
    use Controllers\FrontController;
    FrontController::main();

    require_once 'Views/Layout/footer.php';
?>