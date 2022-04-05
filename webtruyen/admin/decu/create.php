<?php 
  $content = '<div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Add Decus</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputName1">Id Phim</label>
                        <input type="text" class="form-control" id="idphim" placeholder="Id Phim">
                      </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="button" class="btn btn-primary" onClick="AddDecus()" value="Submit"></input>
                      </div>
                    </form>
                  </div>
                  <!-- /.box -->
                </div>
              </div>';
  include "../master.php";
?>
<script>
  function AddDecus(){

        $.ajax(
        {
            type: "POST",
            url: "../api/decu/create.php",
            dataType: 'json',
            data: {
                idphim: $("#idphim").val(),
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Added New Decus!");
                    window.location.href = '../decu/create.php';
                }
                else {
                    alert(result['message']);
                }
            }
        });
    }
</script>