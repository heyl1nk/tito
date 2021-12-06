<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maqueta</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/styles.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="box">
        <span >
        <h1 style="margin-bottom: 10px; text-align: center;">Login</h1>
        <?php
        if (isset($_SESSION['error_login']) && $_SESSION['error_login'] == 'No se encuentra el usuario') : ?>

            <strong style="color: red;">Datos erroneos</strong>

        <?php endif; ?>
        <form action="<?= base_url ?>user/login" method="post" >
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" class="input" name="user">
                <label for="floatingInput">User</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" class="input" name="password">
                <label for="floatingPassword">Password</label>
              </div>
              <button type="submit" class="btn btn-dark">Entrar</button>
        </form>
        <?php Utils::deleteSession('error_login') ?>
        </span>
    </div>
  </body>
</html>