<html>
  <head>
    <title>PHPMongoTweet - MongoDB + tweets</title>
    
  <body>
     <?php

for($i=1;$i<=20;$i++){
if($i % 2 == 0) {
   echo $i.' Bilangan Genap<br/>';
}else {
   echo $i.' Bilangan Ganjil<br/>';
}
}
?>
<table border="1">
<tr>
<td width="200px">Bilangan Genap</td>
<td width="200px">Bilangan Ganjil</td>
</tr>
<tr>
<td style="text-align:center">
<?php
for(int i=1;i<=100;i++){
        if(i%2==0){
        echo(i+"<br/>");}
}
?>
</td>
<td style="text-align:center">
<?php
for(int i=1;i<=100;i++){
        if(i%2==1){
        echo(i+"<br/>");}
}
}
?>
</td>
<td style="text-align:center">
<%
for(int i=1;i<=100;i++){
        if(i%2==1){
        echo(i+"<br/>");}
}
%>
</td>
</tr>
</table>


  </body>
</html>
