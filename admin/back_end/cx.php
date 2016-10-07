<?php
 
$conexion=mysql_connect("localhost","root","andrea123");
if (!$conexion){
	echo "error de conexion";
   echo "<br>";
   echo mysql_error();
   echo "<br>";
   
}

   
mysql_select_db("alcaldiact");

 echo mysql_error();
?>S
