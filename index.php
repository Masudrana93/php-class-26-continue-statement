<h1> Continue Statement </h1>


<!-- /*=====================================
         continue Statement
========================================*/ -->


<!-- // continue; continue statement ta use kora hoy moloto loop chola kalin somoy kono akta kicho/row/data k output a show na korar jonno/skip korar jonno. -->
 
<?php 

for ( $count = 1; $count <= 10; $count++ ) {

   echo "PHP<br>";

   if ($count == 6){
      continue;    
   }
   echo "is<br>";
   echo "awesome<br><br><br>";
}
 

//Note: // continue statement ta use kore moloto kono akta kicho/row k skip korar jonno.  exmaple: akhane if condition a bola hoyeche je, jokhon loop ta cholte cholte variable er value jokhon 6 '$count == 6' hoye jabe, tokhon she tar nicher likha golo k skip korbe. then 7 theke ponorai ager moto continue korbe, mane shob golo ke run/show korbe.
?>








