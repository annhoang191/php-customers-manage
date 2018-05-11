<?php
  include("connect_db.php");
  if(isset($_GET["submit"])) {
    $name = $_GET["name-search"];
    $search = "select * from customers where firstname like '%$name%' or lastname like '%$name%'";
    $search = mysqli_query($conn, $search);
    if(mysqli_num_rows($search)) {
?>
    <!DOCTYPE HTML>
    <html>
        <head>
          <title>Quản lý khách hàng</title>
          <meta http-equiv="content-type" content="text/html; charset=utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
          <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
          <link rel="stylesheet" type="text/css" href="css/style.css">
          <link rel="stylesheet" type="text/css" href="css/custom.css">
        </head>

        <body>
          <?php include("header.php"); ?>
          <?php include("sidebar.php"); ?>
          <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="panel panel-default">
              <div class="panel-heading">Kết quả tìm được:
                <?php
                  echo "", mysqli_num_rows($search);
                ?>
                 kết quả
              </div>
              <div class="panel-body">
                <table class = "table table-bordered table-hover">
                  <thead>
                    <th>ID</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Đã chi</th>
                  </thead>
                  <tbody>
                    <?php
                      foreach($search as $row){
                    ?>
                    <tr>
                      <td><?php echo $row["id"] ?></td>
                      <td><?php echo $row["firstname"] ?></td>
                      <td><?php echo $row["lastname"] ?></td>
                      <td><?php echo $row["email"] ?></td>
                      <td><?php echo $row["spent_money"] ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <script type="text/javascript" src="js/script.js"></script>
        </body>
    </html>
<?php
  }else {
    echo 'Khong tim thay ket qua phu hop';
  }
}
?>
