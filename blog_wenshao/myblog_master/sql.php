<html>
    <body>
<?php
use sinacloud\sae\Storage as Storage;
$s = new Storage();
if ((($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
     // 方法一：在SAE运行环境中时可以不传认证信息，默认会从应用的环境变量中取

      // $s = new Storage("$AppName:$AccessKey", $SecretKey);
      
     
      
     $s->putObjectFile($_FILES['file']['tmp_name'], "test", $_FILES["file"]["name"]);
     $url_name= $s->getUrl( "test", $_FILES["file"]["name"] );
      
    }
  }
else
  {
  echo "Invalid file";
}


$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
mysql_select_db("app_wenshao0711", $con);
}

$sql="INSERT INTO myblog (subjiect, content, tag ,url)
VALUES
('$_POST[subject]','$_POST[message]','$_POST[tag]','$url_name')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
    
mysql_close($con);   
include 'blog.php';
?>
<script type="text/javascript">
       window.location.href="blog.php";
</script>
    </body>
</html>