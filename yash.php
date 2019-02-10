<!DOCTYPE html>
<html>
<head>
	<title>Experiment 3</title>
</head>
<body>

<form>
	<input type="number" name="numb" placeholder="Number">
	 
	<button type="submit" name="submit">Submit</button>
</form>
<?php
if(isset($_GET['submit'])){
	$a =$_GET['numb'];
	 
}
echo "$a";
echo '<br>';
if($a%2==0){
	echo "$a number is even";
}
else{
	echo "Number is odd";
}
echo '<br>';
echo "Number entered table is:";
echo '<br>';
define('a', $a);   
for($i=1; $i<=10; $i++)   
{   
  echo $i*a;   
  echo '<br>';     
}  
?>
</body>
</html>