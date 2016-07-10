<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
    <link rel="icon" href="images/2.jpg" type="image/png" />
    <link rel="shortcut icon" href="images/2.jpg" type="image/png" />
    <title>与我联系</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/prettyPhoto.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/ajax-mail.js"></script>
    <script type="text/javascript" src="js/accordion.settings.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link href="css/ie.css" type="text/css" rel="stylesheet"/>
    <![endif]-->
    
    <style type="text/css"> 
    .comments { 
              width:100%;/*自动适应父布局宽度*/ 
              overflow:auto; 
              word-break:break-all; 
              } 
    
    </style>
    
    <style type="text/css"> 
    .testfile { 
              width:100%;/*自动适应父布局宽度*/ 
              overflow:auto; 
              word-break:break-all; 
              } 
    
    </style>
    
<style>
.error {color: #FF0000;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

    

<?php
// 定义变量并设置为空值
$nameErr = $emailErr = $genderErr = $websiteErr =$commentErr= "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["suject"])) {
     $nameErr = "主题是必填的";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["tag"])) {
     $emailErr = "标签是必填的";
   } else {
     $email = test_input($_POST["email"]);
   }  

   if (empty($_POST["comment"])) {
     $commentErr="内容是必填的";
   } else {
     $comment = test_input($_POST["comment"]);
   }

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

    <!-- header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="span4 logo">
                <a href="index.html"><img src="images/5.png" alt="logo" /></a>
            </div>
        </div>
        <nav id="menu">
            <ul class="clearfix">
			    <li><a href="blog_post.php"   class="current">发表博文</a></li>	
                <li><a href="contact.html" >联系我</a></li>				
				<li><a href="blog.php">我的博文</a></li>
				<li><a href="photo.html">浏览照片</a></li>
				<li><a href="introduction.html">个人简介</a></li>
				<li><a href="index.html" >主页</a></li>
            </ul>
        </nav>
    </div>
</header>

<!--container-->
<section id="container">
    <div class="container">
           <section id="page-sidebar" class="alignrleft span8">
                <div class="title-divider">
                    <h3> Blog Post</h3>
                    <div class="divider-arrow"></div>
                </div>
               
                <div class="block-grey">
                    <div class="block-light wrapper">
                        <article>
                            <h3>用博客来展示真实的你吧</h3>
                            <p>
                                如果你还想跟我进一步的交流问题，或是想对我有进一步的了解，你可以发邮件给我。
                            </p>
                        </article>
                        
                        <hr />
                        <h3>美好的一天从这里开始</h3>
                        <form action="sql.php" method="post" enctype="multipart/form-data">
                           博文主题: <input type="text" name="subject" size="80">
                           <span class="error">* <?php echo $nameErr;?></span>
                           <br><br>
                           博文标签: <input type="text" name="tag" size="80">
                           <span class="error">* <?php echo $emailErr;?></span>
                           <br><br>
                           博文内容:<br/>
                           <textarea tyle="text" class="comments" name="message" rows="20"></textarea><br>
                           <span class="error">* <?php echo $commentErr;?></span>
                           <br><br>
                            <strong style="magin-right:10px">上传图片/视频:</strong>
                            <input type="file" name="file" id="file" size="80"/> 
                            <br><br>
                           <input type="submit" class="btn btn-info btn-lg" value="发表博文">
                        </form>
                </div>
           </div>
    
   </section>     
 </div>    
 </section>




</body>
</html>