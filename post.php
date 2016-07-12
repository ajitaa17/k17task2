<html>
<head> <title> view</title> 
</head>
<body bgcolor="cyan"><h1> <font face="droid serif">  <center><u><b> BLOGGER'S CORNER <b></u> </h1><hr></center>
<?php
$nam=$_POST["name"];
$tit=$_POST["title"];
$app=$_POST["app"];
$post=$_POST["blog"];
$id=$nam.$tit;
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die("connection failed");
mysql_select_db('blog');
$query_insert="INSERT INTO info(name, title, post, pref, id) VALUES ('$nam', '$tit', '$post', '$app', '$id')";
if(empty($post))
{
echo "You've not entered anything to post";
}
else if(!preg_match("/[a-zA-Z'-]/",$post)) { die ("invalid blog contains only numbers");}
else if(mysql_query($query_insert))
echo "You're blog is posted successfully!";
else
{
echo "Oops! Post not successful";
echo "\nerror(if any)=".mysql_error($conn);
}
?> 
   <form name="home" method="POST" action="homepage.php">  
<center><input type="submit" name="home" value="click togo home">        
</body>
</html>
