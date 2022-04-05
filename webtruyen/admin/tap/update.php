<?php
  $content = '<div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Update Tap</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                            <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputName1">Tap</label>
                              <input type="text" class="form-control" id="Tap" placeholder="add tập ">
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
                        <input type="button" class="btn btn-primary" onClick="UpdateTap()" value="Update"></input>
                      </div>
                    </form>
                  </div>
                  <!-- /.box -->
                </div>
              </div>';
              
              include "../master.php";
?>
<script>
    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "../api/tap/read_single.php?id=<?php echo $_GET['id']; ?>",
            dataType: 'json',
            success: function(data) {
                $('#Tap').val(data['tapphim']);
                $('#idphim').val(data['idphim']);
                $('#video').val(data['phim']);
            },
            error: function (result) {
                console.log(result);
            },
        });
    });
    function UpdateTap(){
        $.ajax(
        {
            type: "POST",
            url: '../api/tap/update.php',
            dataType: 'json',
            data: {
                id: <?php echo $_GET['id']; ?>,
                tapphim: $("#Tap").val(),
                idphim: $("#idphim").val(),        
                phim:$("#video").val(),
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Updated Tap!");
                    window.location.href = '../tap';
                }
                else {
                    alert(result['message']);
                }
            }
        });
    }
</script>