<?php session_start();

if(isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    // echo $usuario . ' - ' . $password;

    $errores = '';

    if(empty($usuario) or empty($password)){
        $errores = '<li>Rellena los datos para poder logearte.</li>';
    } else {
        $password = hash('sha512', $password);

        try {
            $conexion = new PDO('mysql:host=localhost;dbname=login_registro', 'root', 'root');
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
        $statement->execute(array(
            ':usuario' => $usuario,
            ':password' => $password
        ));
        $resultado = $statement->fetch();

        if($resultado != false){
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
        } else {
            $errores .= '<li>Los datos son incorrectos.</li>';
        }

        // var_dump($resultado);
        // echo '<br><br>' . $usuario . ' - ' . $password;

        

    }
}



 require 'views/login.view.php';

?>