<?php
  $content = '<div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Update Decus</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputName1">Id Truyện</label>
                          <input type="text" class="form-control" id="IdTruyen" placeholder="Id Truyện">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputName1">Điểm BTV Đề Cử</label>
                        <input type="text" class="form-control" id="DiemBTVDeCu" placeholder="Điểm BTV Đề Cử">
                      </div>
                        </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="button" class="btn btn-primary" onClick="UpdateDecus()" value="Update"></input>
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
            url: "../api/decu/read_single.php?id=<?php echo $_GET['id']; ?>",
            dataType: 'json',
            success: function(data) {
                $('#IdTruyen').val(data['IdTruyen']);
                $('#DiemBTVDeCu').val(data['DiemBTVDeCu']);
            },
            error: function (result) {
                console.log(result);
                alert(123);
            },
        });
    });
    function UpdateDecus(){
        $.ajax(
        {
            type: "POST",
            url: '../api/decu/update.php',
            dataType: 'json',
            data: {
                id: <?php echo $_GET['id']; ?>,
                IdTruyen: $("#IdTruyen").val(),
                DiemBTVDeCu: $("#DiemBTVDeCu").val(),
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Updated Decus!");
                    window.location.href = '../decu';
                }
                else {
                    alert(result['message']);
                }
            }
        });
    }
</script>