<?php
$link=mysqli_connect("localhost","root","","onlinevoting");
if($link==false)
{die("error cannot connect".mysqli_connect_error());
}
$sql="insert into addvotes(voterid,symbolid) values('$_POST[voterid]','$_POST[symbolid]')";
if(mysqli_query($link,$sql))
{
echo "VOTED SUCCESSFULLY";
}
else
{echo "COULDN'T EXECUTE ".mysqli_error($link);
}
mysqli_close($link);
?>