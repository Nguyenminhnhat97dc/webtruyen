<?php
  $content = '<div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Update Xephangs</h3>
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
                        <input type="button" class="btn btn-primary" onClick="UpdateXephangs()" value="Update"></input>
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
            url: "../api/theloai/read_single.php?id=<?php echo $_GET['id']; ?>",
            dataType: 'json',
            success: function(data) {
                $('#theloai').val(data['name']);
            },
            error: function (result) {
                console.log(result);
            },
        });
    });
    function UpdateXephangs(){
        $.ajax(
        {
            type: "POST",
            url: '../api/theloai/update.php',
            dataType: 'json',
            data: {
                id: <?php echo $_GET['id']; ?>,
                name: $("#theloai").val(),
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Updated theloai!");
                    window.location.href = '../theloai';
                }
                else {
                    alert(result['message']);
                }
            }
        });
    }
</script>