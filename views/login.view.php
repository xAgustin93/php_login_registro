<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container container-registro">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo">Login</h1>
                <hr class="border">
            </div>

            <div class="col-12">
                <form id="form-registro" class="form-inline" actio="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="login">
                    <label class="sr-only" for="usuario">Usuario</label>
                    <div class="input-group col-12 form-section">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="formUsuario" placeholder="Usuario" name="usuario">
                    </div>

                    <label class="sr-only" for="usuario">Contraseña</label>
                    <div class="input-group col-12 form-section">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                        <input type="password" class="form-control" id="formpassword" placeholder="Contraseña" name="password">
                        <button type="submit" class="btn btn-primary mb-2" onlcik="login.submit()">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                    <?php if(!empty($errores)): ?>
                        <div class="error">
                            <ul>
                                <?php echo $errores; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </form>
            </div>

            <div class="col-12">
                <p class="text-center">
                    ¿ No tienes cuenta ?
                    <br>
                    <a href="registrate.php">Registro</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>