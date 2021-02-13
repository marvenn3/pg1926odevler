<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $sayı     = $_POST["sayı"];
   for($a=1; $a<$sayı; $a++) {
      $sonuc = $sayı%$a;
      if($sonuc==0) {
         $dizi[]=$a;
      }
   }
   if(array_sum($dizi)==$sayı) {
      $sayı = "<script> alert('Olumlu')</script>";
      echo $sayı ;
      print $sayı." icin sonuc olumlu!<br>";  
   }
   else {
      print $sayı." icin sonuc olumsuz!<br>";
   }
 }

?>
<html>
   
   <head>
      <title>PHP ödev</title>
   </head>
   
   <body>
 
        <!-- HTML FORM -->
        <h2>Mükemmel sayı</h2>
        <form method = "post" action = "<?=$_SERVER["PHP_SELF"]?>">
            sayı <input type="text" name="sayı" id="sayi"><br>
            <input type="submit" value="Gönder">
        </form>
      
        <?php
        //form post edildiyse çalışacak
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
            echo "<h3>$sayı</h3>";
 
        }
        ?>
      
   </body>
</html> 
