<?php
  require("connect_db.php");
  session_start();
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Khách hàng</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Khách hàng</h1>
    </div>
  </div>

  <div class="panel panel-container">
    <div class="row">
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-teal panel-widget border-right">
          <div class="row no-padding">
            <em class="fa fa-xl fa-users color-blue"></em>
            <div class="large">
              <?php
                $sql="SELECT * FROM customers";
                if ($result=mysqli_query($conn,$sql))
                {
                // Return the number of rows in result set
                $rowcount=mysqli_num_rows($result);
                echo "",$rowcount;
                // Free result set
                mysqli_free_result($result);
                }
              ?>
            </div>
            <div class="text-muted">Khách hàng</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-blue panel-widget border-right">
          <div class="row no-padding">
            <em class="fa fa-xl fa-comments color-orange"></em>
            <div class="large">52</div>
            <div class="text-muted">Comments</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-orange panel-widget border-right">
          <div class="row no-padding">
            <em class="fa fa-xl fa-users color-teal"></em>
            <div class="large">24</div>
            <div class="text-muted">New Users</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-red panel-widget ">
          <div class="row no-padding">
            <em class="fa fa-xl fa-search color-red"></em>
            <div class="large">25.2k</div>
            <div class="text-muted">Page Views</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>Danh sách khách hàng</strong>
          <button type="button" id="add_button" data-toggle="modal"
            data-target="#userModal" class="btn btn-info pull-right">
            <i class="fa fa-plus" aria-hidden="true"></i> Thêm khách hàng
          </button>
        </div>
          <?php include('add_modal.php'); ?>
          <div class="panel-body">
            <div id="userTable"></div>
          </div>
        </div>
     </div>
  </div>
</div>
