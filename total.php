<html>
<head>
<style>
.someclass
{border-collapse: collapse;
  width: 100%;
}
p{ 
    font-size:40px;
    font-family: "Courier New Header";
    color: #168AE3;
     text-align:center;
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

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #E316CF;
  color: white;
}
</style>
</head>
<body>
<p>OVER-ALL VOTE DETAILS</p>
<?php
$link=mysqli_connect("localhost","root","","onlinevoting");
if($link==false)
{die("error cannot connect".mysqli_connect_error());
}
$sql="select s.symbolid,so.symbolname,count(s.symbolid) as TOTAL_VOTES from addvotes s inner join symbol so on s.symbolid=so.symbolid group by symbolid order by TOTAL_VOTES DESC";
if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0)
{

echo '<table class="someclass">';
echo "<tr>";

echo "<th> SYMBOLID</th> ";
 echo "<th> SYMBOL</th> ";
echo "<th> TOTAL_VOTES</th> ";

echo "</tr>";
while($rows=mysqli_fetch_array($result))
{
echo "<tr>";
 
echo "<td>".$rows['symbolid']."</td>";
echo "<td>".$rows['symbolname']."</td>";
echo "<td>".$rows['TOTAL_VOTES']."</td>";

echo "</tr>";
}echo "</table>";
mysqli_free_result($result);
}else
{echo "NO RECORD";
}}
else
{echo "ERROR".mysqli_connect_error();
}
?>
</body><br>
<center><a href="votestatus.html">BACK</a></center>

</html>