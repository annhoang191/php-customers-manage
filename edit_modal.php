<div class="modal fade" id="edit<?php echo $urow['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($conn,"select * from `customers` where id='".$urow['id']."'");
		$nrow=mysqli_fetch_array($n);
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class = "modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h3 class = "text-success modal-title">Cập nhật thông tin</h3></center>
      </div>
		  <form>
        <div class="modal-body">
          Họ:
          <input type="text" value="<?php echo $nrow['firstname']; ?>" id="ufirstname<?php echo $urow['id']; ?>" class="form-control">
          Tên:
          <input type="text" value="<?php echo $nrow['lastname']; ?>" id="ulastname<?php echo $urow['id']; ?>" class="form-control">
          Email:
          <input type="text" value="<?php echo $nrow['email']; ?>" id="uemail<?php echo $urow['id']; ?>" class="form-control">
          Số tiền đã chi
            <input type="number" value="<?php echo $nrow['spent_money']; ?>" id="uspent_money<?php echo $urow['id']; ?>" class="form-control">
          Nơi sinh sống
            <input type="text" value="<?php echo $nrow['address']; ?>" id="uaddress<?php echo $urow['id']; ?>" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            <span class = "glyphicon glyphicon-remove"></span> Cancel
          </button>
          <button type="button" class="updateuser btn btn-success" value="<?php echo $urow['id']; ?>">
            <span class = "glyphicon glyphicon-floppy-disk"></span> Save
          </button>
        </div>
		  </form>
    </div>
  </div>
</div>
