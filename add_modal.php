<div aria-hidden="true" class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="modalAdd">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		  <div class = "modal-header">
		  	<button id="close-add-modal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  	<center><h3 class = "text-success modal-title">Thêm</h3></center>
		  </div>
      <form>
        <div class="modal-body">
          Họ khách hàng
            <input type ="text" id="firstname" class="form-control" placeholder="Nhập họ khách hàng">
          Tên khách hàng
            <input type ="text" id="lastname" class="form-control" placeholder="Nhập tên khách hàng">
          Địa chỉ email
            <input type="email" id="email" class="form-control" placeholder="Email">
          Số tiền đã chi
            <input type="number" id="spent_money" class="form-control" placeholder="Số tiền đã chi">
          Nơi sinh sống
            <input type="text" id="address" class="form-control" placeholder="Địa chỉ">
        </div>
        <div class="modal-footer">
          <button type="button" id="addnew" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus"></span> Lưu
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
