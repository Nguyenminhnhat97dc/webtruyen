<?php
  $content = '<div class="row">
                <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">BTV Dề Cử</h3
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="Decus" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                      <th>Id Truyện</th>
                      <th>Điểm Đề Cử</th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Id Phim</th>
                        <th>Action</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>';
            include "../master.php";
?>
<!-- page script -->
<script>
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../api/decu/read.php",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td>"+data[user].IdTruyen+"</td>"+
                "<td>"+data[user].DiemBTVDeCu+"</td>"+
                "<td><a href='update.php?id="+data[user].IdTruyen+"'>Edit</a> | <a href='#' onClick=Remove('"+data[user].IdTruyen+"')>Remove</a></td>"+
                "</tr>";
            }
            $(response).appendTo($("#Decus"));
        }
    });
  });
  function Remove(id){
    var result = confirm("Are you sure you want to Delete the Decu Record?"); 
    if (result == true) { 
        $.ajax(
        {
            type: "POST",
            url: '../api/decu/delete.php',
            dataType: 'json',
            data: {
                id: id
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Removed Decu!");
                    window.location.href = '../decu';
                }
                else {
                    alert(result['message']);
                }
            }
        });
    }
  }
</script>