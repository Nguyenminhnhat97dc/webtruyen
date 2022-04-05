<?php 
  $content = '<div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Add Theloai</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputName1">The Loai</label>
                          <input type="text" class="form-control" id="theloai" placeholder="Ten The Loai">
                        </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="button" class="btn btn-primary" onClick="AddTheLoais()" value="Submit"></input>
                      </div>
                    </form>
                  </div>
                  <!-- /.box -->
                </div>
              </div>';
  include "../master.php";
?>
<script>
  function AddTheLoais(){

        $.ajax(
        {
            type: "POST",
            url: "../api/theloai/create.php",
            dataType: 'json',
            data: {
                name: $("#theloai").val(),
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Added New TheLoai!");
                    window.location.href = '../theloai/create.php';
                }
                else {
                    alert(result['message']);
                }
            }
        });
    }
</script>