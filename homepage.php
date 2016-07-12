<html>
<head> <title> 	HOMEPAGE </title> </head>
<body background="ab.jpg">
<h1> <font face="droid serif">  <center><u><b> BLOGGER'S CORNER <b></u> </h1><hr></center>
<form name="form" method="POST" action="post.php">
<center><br>
Name       :
<input type="text" name="name" value="" required><br>
Blog Title :<input type="text" name="title" value="" required>
<textarea cols="150" rows="25" name="blog" value=""></textarea><center>
Do you want your name to appear? <input type="radio" name="app" value="yes">Yes<input type="radio" name="app" value="no">No<br><br><br><input type="submit" name="post" value="Submit post" style="width: 280px; height: 70px;"></center>
</form>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die("connection failed");
mysql_select_db('blog');
$query_select="select * from info";
$result=mysql_query("select * from info");
$i=1;
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{ ?><b><h1>
<?php echo $i;
$i++;
?><br><?php echo $row['title']; ?></h1><hr></b><hr><form name="text" method="POST" action="homepage.php"><center><textarea cols="150" rows="25" name="blog" value=""><?php echo $row['post']; ?></textarea><center></form>
<?php
if($row['pref']=='yes')
{
?><i>~<?php echo $row['name']; }?>
<form name="post" action="comm.php" method="POST">
name:<input type="text" name="comname" value="">
<center><textarea cols="10" rows="5" name="comment" value=""></textarea><br>

<input type="text" name="comn" value="<?php echo $row['name']; ?>" hidden>
<input type="submit" name="comment" value="Comment"></center></form>
<?php } ?>
</body>
</html>


