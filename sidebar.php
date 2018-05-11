<?php ?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <div class="profile-sidebar">
    <div class="profile-userpic">
      <img src="image/profile.jpg" class="img-responsive" alt="">
    </div>
    <div class="profile-usertitle">
      <div class="profile-usertitle-name">Quỳnh Anh</div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="divider"></div>
    <form action="search_submit.php" method="GET" class="form-inline">
      <div class="input-group">
        <input type="text" name="name-search" class="form-control" placeholder="search">
        <span class="input-group-addon">
          <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
  <ul class="nav menu">
    <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Danh sách khách hàng</a></li>
    <li class="parent ">
      <a data-toggle="collapse" href="#sub-item-1">
      <em class="fa fa-navicon">&nbsp;</em> Quản lý <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
      </a>
      <ul class="children collapse" id="sub-item-1">
        <li><a class="" href="#">
          <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
          </a>
        </li>
        <li><a class="" href="#">
          <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
          </a>
        </li>
      </ul>
    </li>
    <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
  </ul>
</div>
