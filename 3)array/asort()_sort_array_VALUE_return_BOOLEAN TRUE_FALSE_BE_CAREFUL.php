<?php

$array = array("a1"=>'x',"a2"=>'e',"a3"=>'z');

asort( $array ); // IF YOU ECHO/PRINT ==> RETURN 1 //SẮP XẾP VALUE

foreach ( $array as $keys => $values )
{
print "$keys = $values"; //a2 = e a1 = x a3 = z 
}



// asort()
