<?php
require "model/DBConnection.php";
require "model/ProductDB.php";
require "model/Product.php";
require "controller/ProductController.php";

use \Controller\ProductController;
?>
<!DOCTYPE html>
<html style= " height: 300px">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thêm mới khách hàng</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="height: 300px;">
  <div id="container">
    <!-- Header -->
    <div id="head">
      <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">Product Management</a>
      </div>
    </div>

    <!-- Navigation bar -->
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#link">News</a></li>
        <li><a href="#link">About</a></li>

    </nav>

    <!-- Content -->
    <div id="left"></div>
    <div id="right"></div>

    <!-- Main content   -->
    <div id="content">
      <?php
      $controller = new ProductController();
      $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
      switch ($page) {
        case 'add':
          $controller->add();
          break;
        case 'delete':
          $controller->delete();
          break;
        case 'search':
          $controller->search1();
          break;
        case 'edit':
          $controller->update();
          break;
        case 'detail':
          $controller->detail();
          break;
        default:
          $controller->index();
          break;
      }
      ?>
    </div>

    <!-- Footer -->
    <div id="footer">
      <p>C0219H1@Codegym.com</p>
    </div>

  </div>
  <!-- Seachbar   -->
  <!-- <div align="center">
    <form action="view/search.php" method="get">
    <input type="text" name="search"  placeholder="Nhập từ khóa" class ="searchbar">
        <input type="submit" class="btn btn-info" id ="searchbutton" xname ="ok" value="Tìm kiếm" data-selected="true" data-label-id="0">
    </form>
</div> -->
  <!-- <div class="container">
  <div class="btn-group">
    <a href="#" class="btn btn-primary" style="left: 407px; top: -80px; transition: none 0s ease 0s; cursor: move;">Apple</a>
    <a href="#" class="btn btn-primary" style="left: 407px; top: -80px; transition: none 0s ease 0s; cursor: move;">Samsung</a>
    <a href="#" class="btn btn-primary" style="left: 407px; top: -80px; transition: none 0s ease 0s; cursor: move;">Sony</a>
    <a href="#" class="btn btn-primary" style="left: 407px; top: -80px; transition: none 0s ease 0s; cursor: move;">Apple</a>
    <a href="#" class="btn btn-primary" style="left: 407px; top: -80px; transition: none 0s ease 0s; cursor: move;">Samsung</a>
    <a href="#" class="btn btn-primary" style="left: 407px; top: -80px; transition: none 0s ease 0s; cursor: move;">Sony</a>
  </div>
</div> -->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>