$(document).ready(function(){
    $("button").click(function(){
        var un =$("#sreach").val();
        $.post("../Ajax/sreach",{tentruyen:un},function(data){
            window.location="master2&id="+data.substr(data.length - 1)+"";         
       });
    });
});
$(document).ready(function(){
    $("#tala1").click(function(){
        var a= $("#tala1").text();     
        var url = window.location.href;
        var b = url.substr(url.length - 1);
        $.post("../Ajax/page",{page:a,id:b},function(data){
            $("#table").html(data);     
        });
    });    
});
$(document).ready(function(){
    $("#tala2").click(function(){
        var a= $("#tala2").text();     
        var url = window.location.href;
        var b = url.substr(url.length - 1);
        $.post("../Ajax/page",{page:a,id:b},function(data){
            $("#table").html(data);     
        });
    });    
});
$(document).ready(function(){
    $("#tala3").click(function(){
        var a= $("#tala3").text();
        var url = window.location.href;
        var b = url.substr(url.length - 1);
        $.post("../Ajax/page",{page:a,id:b},function(data){
            $("#table").html(data);     
        });
    });    
});
$(document).ready(function(){
    $("#DS-Chuong").click(function(){
        var url = window.location.href;
        var b = url.substr(url.length - 1);
        $.post("http://localhost/BT/webtruyen/Ajax/DsTruyen",{id:b},function(data){
            $("#DS-Chuong-Change").html(data);     
        });
    });    
});
$(document).ready(function(){
    $("#NoiDung").click(function(){
        var url = window.location.href;
        var b = url.substr(url.length - 1);
        $.post("http://localhost/BT/webtruyen/Ajax/master2",{id:b},function(data){
            $("body").html(data);     
        });
    });    
});

