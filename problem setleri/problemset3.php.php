<?php

$rakam=$_POST['sayi'];
 
$asal=0; $i=2;
 
do
{
	if ($rakam % $i == 0)
	{
		$asal = 1;
	}
	$i++;
}
while($i<$rakam);
 
if ($asal != 1)
{
	echo $sonuc="Sayı Asaldır";
}
else
{
	echo $sonuc="Sayı Asal Değildir";
}

?>



<html>
   
   <head>
      <title>PHP ödev</title>
   </head>
   
   <body>
 
        <h2>Asal sayı</h2>
        <form method = "post" action = "<?=$_SERVER["PHP_SELF"]?>">
            rakam <input type="text" name="sayi" id="sayı"><br>
            <input type="submit" value="Gönder">
        </form>
      
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
            echo "<h3>$rakam</h3>";
 
        }
        ?>
      
   </body>
</html> 