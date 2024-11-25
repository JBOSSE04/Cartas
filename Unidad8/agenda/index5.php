<?php 
require_once "views/autoloader.php";
require_once 'config/config.php';

require_once 'views/layout/header.php';
namespace Unidad8\Agenda\Models;

use Unidad8\Agenda\Models\contacto;
use Unidad8\Agenda\Models\ContactoController;
use models\Contacto;


?>


<?php if((!empty($_GET)))?>

<?php 

$contactoDAO = new contacto();

if(isset($_GET['id']) && method_exists('id') && is_numeric($_GET['id']) && $_GET['id'] > 0  && $contacto = $contactoDAO->getContactoById($_) ){
    $contacto = $contactoDAO->getContactoById($_GET['id']);
    $contactoController = new ContactoController();
    $contactoController->editar($contacto);
    header('Location: index.php');
    exit();
}else{
    header('Location: index.php');
    exit();
    }
    
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"></form>

<input type="hidden" name="id" value="<?php echo $contacto->getId();?>">

<label for="nombre">Nombre:</label>

<input type="text" id="nombre" name="nombre" value="<?php echo $contacto->getNombre();?>">

<label for="apellido">Apellido:</label>

<input type="text" id="apellido" name="apellido" value="<?php echo $contacto->getApellido();?>">


?>