<?php 
    session_start();
    require "aplikasi.php";

    if (isset($_POST["login"])) {
      $_SESSION['username'] = $_POST['username'];
      if (login($_POST) > 0 ) {
              $_SESSION['login'] = true;
              header("Location: index.php");
      } else {
        echo "<script>
              alert ('username atau password anda salah!!');
              </script>";
      }
    }

 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <body>
     <div style="width: 500px; height: 655px; margin: 20px auto 0px;background-color: #eee; padding-left: 75px;">
        <h2 class="font-weight-bold" style="padding-left: 120px; font-family: arial;">Login</h2>
    <form action="" method="post">
          <div class="form-group">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control" id="username" placeholder="Username" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <button class="btn btn-warning text-center font-weight-bold" style="width: 325px;" type="submit" name="login">Login</button>
            </div>
          </div>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>