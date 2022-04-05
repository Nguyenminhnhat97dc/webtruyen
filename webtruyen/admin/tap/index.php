<?php
  $content = '<div class="row">
                <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Tap</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="Taps" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Tap</th>
                        <th>Idphim</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Tap</th>
                        <th>Idphim</th>
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
            include '../master.php';
?>
<!-- page script -->
<script>
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../api/tap/read.php",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td>"+data[user].tapphim+"</td>"+
                "<td>"+data[user].idphim+"</td>"+
                "<td><a href='update.php?id="+data[user].id+"'>Edit</a> | <a href='#' onClick=Remove('"+data[user].id+"')>Remove</a></td>"+
                "</tr>";
            }
            $(response).appendTo($("#Taps"));
        }
    });
  });
  function Remove(id){
    var result = confirm("Are you sure you want to Delete the tap Record?"); 
    if (result == true) { 
      $.ajax(
        {
            type: "POST",
            url: '../api/tap/delete.php',
            dataType: 'json',
            data: {
                id: id
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Removed tap!");
                    window.location.href = '../tap';
                }
                else {
                    alert(result['message']);
                }
            }
        });
    }
  }
</script>