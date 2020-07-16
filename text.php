<html>
<body>
<form action="text.php" method="post">
N1: <input type="text" name="n1"><br>
N2: <input type="text" name="n2"><br>
<input type="submit" name="check" value="Prime Nos in the range N1 and N2">
</form>
</body>
</html>
<?php
$n1=$_POST["n1"];
$n2=$_POST["n2"];
for($i=$n1;$i<=$n2;$i++)
{
    if($i==2 || $i==3 || $i==5 || $i==7)
    echo"$i";
else if(($i%2)!=0 && ($i%3)!=0 && ($i%5)!=0 && ($i%7)!=0)
{
    echo "$i";
}
else
continue;
echo " is the prime number in range N1 and N2. ";
}
?>



