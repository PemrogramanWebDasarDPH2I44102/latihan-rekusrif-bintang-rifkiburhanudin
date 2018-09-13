<?php
$bts = 5; 
function rekursif($i=1){
	global $bts;
	echo "*";
	$i++;
	if ($i<=$bts){
		rekursif ($i);
	}
	else{
		echo "<br>";
		$bts--;
		if ($bts !=0){
			rekursif();
		}
	}
}
	rekursif();
/////////////////////////////////////////////

echo "<br>";
function rekursif2($a = 1){
	global $bts2;
	echo "$a";
	$a++;
	if ($a<=$bts2) {
	rekursif2($a);
	}
	else{
		echo "<br>";
		$bts2++;
		if ($bts2 <= 5) {
			rekursif2();
		}
	}
}
rekursif2();
?>

