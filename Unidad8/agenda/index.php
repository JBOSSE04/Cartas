<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Agenda</title>
    <link rel="shortcut icon" href="#">

</head>
<body>
    <header>
        <h1>Agenda</h1>
    </header>
    <main>
        <?php 
            require_once 'config/config.php';
            require_once 'lib/basededatos.php';
            require_once 'autoloader.php';


            try {
                $contact = new \Unidad8\Agenda\models\contacto('1', 'Ricardo', 'Solano Perez', 'ric@gmail.com');

                echo "<h2>Contact Information</h2>";
                echo "<p>ID: {$contacto->getid()}</p>"; 
                echo "<p>Full Name: {$contacto->getname()}</p>";
                echo "<p>Email: {$contacto->getemail()}</p>"; 
            } catch (Exception $e) {
                echo "<p>Error: {$e->getMessage()}</p>";

                            }
        
            
        ?>
        <?php 
            $data = ['id'=>null]
        ?>
        
    </main>
</body>
</html>


