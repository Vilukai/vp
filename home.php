<?php
$username = "Kai Vilu";
$fulltimenow = date("d.m.Y H:i:s");
$hournow = date("H");
$partofday = "lihtsalt aeg"; 
if($hournow < 7){
$partofday = "uneaeg";	
}
if($hournow >= 8 and $hournow < 18){
	$partofday= "akadeemilise aktiivsuse aeg";
}

//vaatame semestri kulgu
$semesterstart = new DateTime("2020-8-31");
$semesterend = new DateTime ("2020-12-13");
//selgitame välja nende vahe ehk erinevuse
$semesterduration = $semesterstart->diff($semesterend);
//leiame päevade arvuna
$semesterdurationondays = $semesterduration->format("%r%a");
//tänane päeva
$today = new DateTime("now");

// if($fromsemesterstartdays<0){semester pole peale alanud}

?>


<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?>Veebiprogrammeerimise kursus KV</title>

</head>
<body>
  <h1>Kursus KV</h1>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
<p>sisu kirja panemiseks.Õppetöö toimub <a href="http://www.tlu.ee">Tallinna Ülikoolis</a>.</p>
<p> Siia vahele peaks tulema nüüd mõistusega tekst, et lisada muutujatega teksti jne... </p>
<p> Lehe avamise hetkel oli: <?php echo $fulltimenow; ?>.</p>
<p><?php echo "Parajasti on " .$partofday ."."; ?></p>


</body>
</html>
<p>ilge aja raiskamine!</p>