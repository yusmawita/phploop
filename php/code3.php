<html>
  <head>
    <title>Bilangan Ganjil Dan Genap</title>
<style>


body {
 background-image: url("symphony.png");
 color: #C71585;
}

</style>



 </head>


   
  <body>
     
<table border="1">
<tr>
<td width="200px">Bilangan Genap</td>
<td width="200px">Bilangan Ganjil</td>
</tr>
<tr>
<td style="text-align:center">

<?php
for($i=1;$i<=100;$i++){
        if($i % 2 == 0)  {
        echo 'Bilangan Genap '.$i.'<br>';
}
}
?>
</td>


<td style="text-align:center">
<?php
for($i=1;$i<=100;$i++){
        if($i % 2 == 1){
        echo 'Bilangan Ganjil '.$i.'<br>';
}
}
?>
</td>
</tr>
</table>






  </body>
</html>
