<html>
    
<head>  
</head>
    
<body>   
<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
mysql_select_db("app_wenshao0711", $con);
}

$result = mysql_query("SELECT * FROM myblog");

while($row = mysql_fetch_array($result))
{   
    

                    echo  "<article class='blog-post span8'>";
                    echo   "<div class='block-grey'>";
                    echo       "<div class='block-light'>";
                    echo            "<div class='wrapper'>";
                                    echo "<img src='".$row['url']."'><br>";
                                    echo  "<h2><font color=#33CC33>".$row['subjiect']."</font></h2>";
                                    echo   "<p style='text-indent:2em'>".$row['content']."</p>";
                                    echo "<br></br>";
                                    echo  "<p>Tags:<font color=#33CC33>".$row['tag']."</font></p>";
                                    echo  "<input type='button' id='".$row['id']."'name='".$row['id']."'class='btn btn-info btn-lg' style='float:right' value='删除该博文' onclick='test(this)'>";
                    echo      "</div>";
                    echo        "</div>";
                    echo          "</div>";
                    echo    "</article>";
    
   
}

mysql_close($con);
?>
 
<script type="text/javascript">
function test(obj)
{

    var postdata=obj.id;
    //document.getElementById('num').value=parseInt(document.getElementById('num').value)+1;
    //parseInt(a,b)将a解析成b进制数
    $.ajax({ 
       url:'blog_delete.php ',
       type:'post',         //数据发送方式  
       data:'a='+postdata,         //要传递的数据 
       success:function(msg){    
   
    }  
     }); 
    window.location.href="blog.php";
}
</script>
    
    </body>
</html>
    
