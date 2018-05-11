$(document).ready(function () {
  showUser();

  //enable bootstrap tooltip
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })
  
  //Add new user
  $(document).on('click', '#addnew', function () {
    if ($('#firstname').val() == '' || $('#lastname').val() == '' ||
      $('#email').val() == "" || $('#spent_money').val() == '') {
      alert('Nhập đầy đủ thông tin trước');
    } else {
      $('#close-add-modal').trigger('click');
      $firstname = $('#firstname').val();
      $lastname = $('#lastname').val();
      $email = $('#email').val();
      $addr = $('#address').val();
      $money = parseFloat($('#spent_money').val());
      $.ajax({
        type: "POST",
        url: "addnew.php",
        data: {
          firstname: $firstname,
          lastname: $lastname,
          email: $email,
          addr: $addr,
          money: $money,
          add: 1,
        },
        success: function () {
          showUser();
        }
      });
    }
  });
  
  //Delete user
  $(document).on('click', '.delete', function () {
    $id = $(this).val();
    var r = confirm("Bạn có chắc muốn xóa khách hàng này?");
    if(r==true){
      $.ajax({
        type: "POST",
        url: "delete.php",
        data: {
          id: $id,
          del: 1,
        },
        success: function () {
          showUser();
        }
      });
    }
    else{
      return false;
    }
  });

  //Update user
  $(document).on('click', '.updateuser', function () {
    $uid = $(this).val();
    $('#edit' + $uid).modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
    $ufirstname = $('#ufirstname' + $uid).val();
    $ulastname = $('#ulastname' + $uid).val();
    $uemail = $('#uemail' + $uid).val();
    $umoney = $('#uspent_money' + $uid).val();
    $uaddress = $('#uaddress' + $uid).val();
    $.ajax({
      type: "POST",
      url: "update.php",
      data: {
        id: $uid,
        firstname: $ufirstname,
        lastname: $ulastname,
        email: $uemail,
        money: $umoney,
        address: $uaddress,
        edit: 1,
      },
      success: function () {
        showUser();
      }
    });
  });
});

//Showing user table
function showUser() {
  $.ajax({
    url: 'show_user.php',
    type: 'POST',
    async: false,
    data: {
      show: 1
    },
    success: function (response) {
      $('#userTable').html(response);
    }
  });
}

//sort table
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("customer-table");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc";
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
