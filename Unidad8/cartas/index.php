<?php
require_once 'Views/layout/header.php';
require_once 'autoloader.php';
require_once 'config/config.php';
use Controllers\FrontController;


FrontController::main();
require_once 'Views/layout/footer.php';

?>