<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];
if($m==""||$n==""||$o==""||$p=="")
{
	echo "Plz fill all fields";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("nett");
	$query="SELECT * FROM student WHERE name='$m' AND email='$n'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		$query1="INSERT INTO student VALUES ('$m','$n','$o','$p',0)";
		$query2="INSERT INTO admin values('$m','$o')";
		mysql_query($query2);
		mysql_query($query1);
		echo " Hogaya  ";
	}
	else
	{
		echo "User Already Exists";
		$result1=mysql_query("SELECT confirmation FROM student WHERE name='$m' AND email='$n'");
		$row1=mysql_fetch_array($result1);
		if($row1[0]==1)
		{
			echo " (Confirmed !!!!)";
		}
		else
		{
			echo " (You are not Confirmed)";
		}
	}
}
echo "<a href='login.php'>Click Here To Login";
?>
