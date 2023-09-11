/* Redirecting to a.php when  is 4. */
<?php

$i=1;
while ($i <= 10) {
	echo $i;
	$i++;
	if($i===4){
		header('location:a.php');
	}
	
}
?>
