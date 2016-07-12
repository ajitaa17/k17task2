<html>
<head> <title> view</title> 
</head>
<body bgcolor="cyan"><h1> <font face="droid serif">  <center><u><b> BLOGGER'S CORNER <b></u> </h1><hr></center>
<?php
$comment=$_POST["comment"];
$comname=$_POST["comname"];
$name=$_POST["comn"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die("connection failed");
mysql_select_db('blog');
$query_update="UPDATE info SET comment=$comment, nam=$comname where 'name'=$name";
if(empty($comname)||empty($comment))
{
echo "Check name and comment again";
}
else if(mysql_query($query_update))
{
echo "comment successfully posted";
}
else
{
echo "comment not posted :/ ";
echo "\nerror(if any)=".mysql_error($conn); 
}
?>
</body>
</html>
