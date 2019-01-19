
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$ukuran=4;
for($a=1; $a<=$ukuran; $a++){
	for($b=1; $b<=$ukuran; $b++){
		if(($a==1) || ($a==$ukuran)){
			echo " * ";
		} else{
			echo "<a style='color:black'>     * </a>";
		}
	}
	echo "<br/>";
}
?>
</body>
</html>