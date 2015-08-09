<html>
  <head>
    <title>Kelipatan Bilangan</title>
    



<style>


body {
 background-image: url("pinkrice.png");
 color: #C71585;
}

</style>
</head>
  <body>
    
<?php
    
for($i=1;$i<=100;$i++){
	echo 'Kelipatan '.$i.'<br/>';
for($j=1;$j<=100;$j++){
$h=$j+$i;
echo $h.' ';
}
echo '<br/>';
}

?>
  </body>
</html>
