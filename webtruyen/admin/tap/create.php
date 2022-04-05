<?php 
  $content = '<div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Add Tap</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputName1">Tap</label>
                          <input type="text" class="form-control" id="tap" placeholder="add tập ">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Id Phim</label>
                          <input type="text" class="form-control" id="idphim" placeholder="Id Phim Cần Thêm Tập">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Video</label>
                          <input type="text" class="form-control" id="video" placeholder="URL youtube">
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="button" class="btn btn-primary" onClick="AddTap()" value="Submit"></input>
                      </div>
                    </form>
                  </div>
                  <!-- /.box -->
                </div>
              </div>';
  include "../master.php";
?>
<script>
  function AddTap(){

        $.ajax(
        {
            type: "POST",
            url: "../api/tap/create.php",
            dataType: 'json',
            data: {
                tapphim: $("#tap").val(),
                idphim: $("#idphim").val(),        
                phim:$("#video").val(),
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Added New Tap!");
                    window.location.href = '../tap/create.php';
                }
                else {
                    alert(result['message']);
                }
            }
        });
    }
</script>