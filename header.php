<?php
  require("connect_db.php");
  session_start();
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span>Quản lý</span> Khách Hàng</a>
      <ul class="user-menu">
        <?php
          if (isset($_SESSION["login_user"]) && $_SESSION["login_user"] == true) {
        ?>
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Người dùng <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Đăng xuất</a></li>
            </ul>
          </li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>
