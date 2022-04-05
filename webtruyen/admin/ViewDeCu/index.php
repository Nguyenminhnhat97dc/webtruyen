<?php
  $content = '<div class="row">
                <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Truyện</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="truyen" class="table table-bordered table-hover" style="width:100%">
                      <thead>
                      <tr>
                        <th>Xếp Hạng</th>
                        <th>Id Truyện</th>
                        <th>Tên Truyện</th>
                        <th>Thể Loại</th>
                        <th>Trạng Thái</th>
                        <th>GiớiThiệu</th>
                        <th>Lượt Xem</th>
                        <th>Ngày Đăng</th>
                        <th>Tác Giả</th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      
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
        url: "../api/ViewDeCu/read.php",
        dataType: 'json',
        success: function(data) {
            var response="";
            var STT=1;
            for(var user in data){
                response += "<tr>"+
                "<td>"+STT+"</td>"+
                "<td>"+data[user].IdTruyen+"</td>"+
                "<td>"+data[user].TenTruyen+"</td>"+
                "<td>"+data[user].IdLoaiTruyen+"</td>"+
                "<td>"+data[user].TrangThai+"</td>"+
                "<td>"+data[user].GioiThieu+"</td>"+
                "<td>"+data[user].LuotXem+"</td>"+
                "<td>"+data[user].NgayDang+"</td>"+
                "<td>"+data[user].TacGia+"</td>"+
                "<td><a href='update.php?id="+data[user].IdTruyen+"'>Edit</a> | <a href='#' onClick=Remove('"+data[user].IdTruyen+"')>Remove</a></td>"+
                "</tr>";
                STT=STT+1;
            }
            $(response).appendTo($("#truyen"));
        }
    });
  });

</script>