<?php
  include('connect_db.php');
	if(isset($_POST['show'])){
?>
<table id="customer-table" class="table table-bordered table-striped">
	<thead>
		<th>ID</th>
		<th><i class="fa fa-fw fa-sort" onclick="sortTable(1)"></i>Họ</th>
		<th><i class="fa fa-fw fa-sort" onclick="sortTable(2)"></i>Tên</th>
		<th><i class="fa fa-fw fa-sort" onclick="sortTable(2)"></i>Email</th>
		<th><i class="fa fa-fw fa-sort" onclick="sortTable(4)"></i>Địa chỉ</th>
		<th><i class="fa fa-fw fa-sort" onclick="sortTable(5)"></i>Đã chi</th>
		<th>Hành động</th>
	</thead>
	<tbody>
		<?php
			$quser=mysqli_query($conn,"select * from `customers`");
			while($urow=mysqli_fetch_array($quser)){
		?>
		<tr>
			<td class="counterCell"></td>
			<td><?php echo $urow['firstname']; ?></td>
			<td><?php echo $urow['lastname']; ?></td>
			<td><?php echo $urow['email']; ?></td>
			<td><?php echo $urow['address']; ?></td>
			<td><?php echo $urow['spent_money']; ?></td>
			<td>
			<span title="Chỉnh sửa thông tin" data-toggle="tooltip" data-placement="top">
				<button class="btn btn-success"
					data-toggle="modal" data-target="#edit<?php echo $urow['id']; ?>">
					<span class = "glyphicon glyphicon-pencil"></span>
				</button>
			</span>
      <button class="btn btn-danger delete"
				title="Xóa khách hàng" data-toggle="tooltip" data-placement="top"
				value="<?php echo $urow['id']; ?>">
				<span class = "glyphicon glyphicon-trash"></span>
			</button>
			<?php include('edit_modal.php'); ?>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<?php
}
?>
