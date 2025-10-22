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


/* Iteration : 

Iteration অর্থ হলো পুনরাবৃত্তি বা একটি কাজ বারবার করা, যতক্ষণ না কোনো নির্দিষ্ট শর্ত পূরণ হয়। 

প্রোগ্রামিং-এ, iteration মানে হলো — কোনো নির্দিষ্ট কোড ব্লক বা স্টেটমেন্টকে বারবার চালানো, সাধারণত loop (যেমন for, while, do...while) ব্যবহার করে।

এখানে:

প্রতিবার লুপ চলার সময় $count এর মান ১ করে বাড়ছে।

এই পুরো প্রক্রিয়াটাকেই বলে iteration।

লুপটি মোট 10 বার iterate করবে।

*/
?>








