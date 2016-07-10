<html>
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

$result = mysql_query("SELECT * FROM user");
while($row = mysql_fetch_array($result))
  {
    if(($_POST[form_username]===$row['username'])&&($_POST[form_password]===$row['password'])){
        echo "<script type='text/javascript'> ";
        echo " window.location.href='blog_wenshao/myblog_master/index.html'";
        echo "</script>";
        break;
    }else{
        echo "alert('wrong username and password')";
    }
  }

mysql_close($con);
?>
    </body>
</html>