
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
<?php
	$pr_id=$_POST["Id"];
	$pr_name=$_POST["Name"];
	$pr_price=$_POST["Price"];
	$pr_des=$_POST["Description"];
    $conn=new mysqli('localhost','root','','info');
	$sql="create table 'product details'(roll INT(20),bname VARCHAR(20)";
	mysqli_query($conn,$sql);
	mysqli_close($conn);
//insert into productdetails(productid,productname,productprice,productdes) values($p_id,$p_name,$p_price,$p_des)	?>




