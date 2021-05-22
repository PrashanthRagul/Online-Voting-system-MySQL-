<html>
<body>
<style>
head
{color: white;
}

a:link, a:visited {
  background-color: #001f3f;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
text-align:center;
}

a:hover, a:active {
  background-color: #FF4136;
}
.someclass
{border-collapse: collapse;
  width: 100%;
}
p
{ 
    font-size:40px;
    font-family: "Courier New Header";
    color: #168AE3;
    text-align:center;
}
</style>
</head>
<body>
<?php
session_start();
$link=mysqli_connect("localhost","root","","onlinevoting");
if($link==false)
{die("error cannot connect".mysqli_connect_error());
}
$p=$_SESSION['voterid'];
$search = $_REQUEST["symbolid"];
$sql="insert into addvotes values($p,$search)";
if(mysqli_query($link,$sql))
{
echo "<p>VOTED SUCCESSFULLY</p>";

}
else
{echo "COULDN'T EXECUTE ".mysqli_error($link);
}
mysqli_close($link);
?></body>
<br>
<center><a href="logout.php">LOGOUT</a></center>;
</body>
</html>