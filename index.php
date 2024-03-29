<?php 
    session_start();
    if(!isset($_SESSION['user'])){ 
        if(!isset($_SESSION['admin'])){
            echo "<script>
                document.location.href = 'login.php';
            </script>";
            exit;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="row bg-dark fixed-top">
            <h1 class="ml-5" style="color: red; font-weight: bold;">CRUD</h1>
            <div style="padding-top: 25px; padding-left: 30px;"><h5><a href="index.php">Home</a></h5></div>
            <h6 style="margin-left: 1050px; padding-top: 10px;"><button class="btn btn-danger"><a style="font-weight: bold; text-decoration: none;" href="logout.php">Logout</a></button></h6>
        </div>
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-2">
                <?php 
                if(isset($_SESSION["admin"])){
                   require_once ("dashboard.php"); 
                } else {
                    require_once ("dash_user.php");
                }

                 ?>
            </div>
            <div class="col-md-8 bg-light">
                <?php 
                    define("IS_INDEX", true);

                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    } else {
                        $page = "beranda";
                    }

                    require_once ('aplikasi.php');
                    require_once ($page . ".php");
                ?>
            </div>
        </div>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>