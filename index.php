<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growth System</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="nofollow" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>
  <div class="row">
    <div class="col-2">
      <header>
        <?php include 'sidebar.php' ?>
      </header>
    </div>
    <div class="col-6">
      <div class="main-content" style="padding-top: 40px">
        <div class="container-fluid">
          <?php
            $page = isset($_GET['page']) ? $_GET['page'] : '';
            if(!file_exists($page.".php")){
              include '404.html';
            }else{
              include $page.'.php';
            }
          ?>
      </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
