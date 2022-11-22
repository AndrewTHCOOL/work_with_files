<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
     </head>
  <body>
<?php 
/*
$f = fopen("lentele.html", "w");



fwrite($f, "<table border=\"1\">".PHP_EOL);
for ($i = 1; $i <= 9; $i++){
    if ($i % 3 == 1){
        fwrite($f, "<tr>".PHP_EOL);
    }
    fwrite($f , "<td>".PHP_EOL);
    for ($j = 1; $j <= 9; $j++){
      //  echo "$i x $j = ".($i*$j);
      fwrite($f, "$i x $j = ".($i*$j));
       // echo "<br>";
       fwrite($f, "<br>".PHP_EOL);
    }
 //   echo "<br>";
 fwrite($f , "</td>".PHP_EOL);
 if ($i % 3 == 0){
     fwrite($f,"</tr>".PHP_EOL );
 }
}
 fwrite($f,"</table>".PHP_EOL);
fclose($f);
*/
?>  

<?php
//echo "<h1>Uzduotis 2</h1>";
/* $puslapis = file_get_contents("https://autoplius.lt/");
echo "puslapis nuskaitytas";
//echo "$puslapis"

file_put_contents("puslapis.html", $puslapis);

$sablonas = '/<a.*href="(.*)".*>(.*)<\/a>/Uis';

preg_match_all($sablonas, $puslapis, $surasta);
//$f = fopen("nuorodos.txt", "w");
$nuorodos = "";
$sablonas2 = '/\s+/s';

for ($i = 0; $i < count($surasta[1]); $i++){
$nuoroda = $surasta [1][$i];
$tekstas = $surasta [2][$i];

if (strpos($nuoroda, "http") === 0){
$tekstas = trim((strip_tags($tekstas)));
$tekstas = preg_replace($sablonas2, " ", $tekstas);
$tekstas = html_entity_decode($tekstas);




if ($tekstas != ""){
echo $tekstas . "; " . $nuoroda . ";";
//fwrite($f, $tekstas ."; " . $nuoroda . ";".PHP_EOL);
$nuorodos .= $tekstas . "; " . $nuoroda . "; ".PHP_EOL;
}


}

}
file_put_contents("nuorodos.txt", $nuorodos);
//fclose($f);

//echo "<pre>";
//print_r($surasta[1]);
//print_r($surasta[2]);
//echo "</pre>";

*/
?>
<?php
// echo " <h1>Uzduotis 3 (NOT FINISHED) </h1>";
/*$nuotraukos = file_get_contents("https://autoplius.lt/");
file_put_contents("nuotraukos.html", $nuotraukos);
$f = fopen("nuotraukos.html", "w");
preg_match_all ('/<a.*href="(.*)".*>(.*)<\/a>/Uis');


fclose($f);

*/

?>

  
  
  
  
  
  
  
  </body>
     </html>