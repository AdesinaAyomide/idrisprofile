<?php
$multi=array(array("php","4.5","5"),
       array("css","4","5"),
       array("html","5","6"),);
  /*echo $multi[0][0]." old verison is ".$multi[0][1]." new version is ". $multi[0][2]."<br/>";
   echo $multi[1][0]." old verison is ".$multi[1][1]." new version is ". $multi[1][2]."<br/>";
   echo $multi[2][0]. " old versiom is ". $multi[2][1]." new version is ". $multi[2][2]."<br/>";*/

   $count= count($multi);
   for ($i=0; $i < $count; $i++)
       {echo "<ul> row no".$i;
           $m2= $multi[$i];
         $count2= count ($m2);
         for ($j=0; $j < $count2; $j++)
         {echo "<li>". $j. "</li></ul>";}
       }

