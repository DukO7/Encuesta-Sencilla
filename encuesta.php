<font face="Tahoma, Trebuchet MS, Verdana" size="2" color="#000000">
<?


$archivo1 = "op_a.txt";           // agrega los archivos aqui si quieres mas opciones
$archivo2 = "op_b.txt";



$abre1 = fopen($archivo1, "r");    // aqui abres los archivos  (modo de lectura)
$abre2 = fopen($archivo2, "r");    // (recuerda agregar otras opciones si las pusiste)




$total1 = fread($abre1, filesize($archivo1));   // aqui lees los archivos
$total2 = fread($abre2, filesize($archivo2));   // (recuerda agregar otras opciones si las pusiste)




fclose($abre1);     // aqui cierras los archivos   
fclose($abre2);     // (recuerda agregar otras opciones si las pusiste)



if($op=="a")                            // aqui vemos la opcion del usuario 
{
  $abre1 = fopen($archivo1, "w");       // abrimos el archivo (modo de escritura)  
  $total1=$total1+1;                    // sumamos 1 
  $grabar1 = fwrite($abre1, $total1);   // escribimos el nuevo valor    

  fclose($abre1);                       // cerramos el archivo 
}   


else if($op=="b")                       // lo mismo de arriba, para las dem�s opciones
{

  $abre2 = fopen($archivo2, "w");       // tu sabes de php, no te ser� dificil agregar
  $total2=$total2+1;                    // mas opciones
  $grabar2 = fwrite($abre2, $total2);
 
  fclose($abre2); 
}





       
$votos=$total1+$total2;   //  si tienes mas opciones debes sumarlas aqu�


$por1=$total1*100/$votos;   // los porcentajes (RECUERDA LOS DATOS AGREGADOS)
$por1=intval ( $por1 ,10);

$por2=$total2*100/$votos;
$por2=intval ( $por2 ,10);

<html>

<B><U>RESULTADOS ENCUESTA</B></U>;
<br><br>;

<IMG HEIGHT=15 WIDTH=$por1 SRC=barra.jpg>;  // MUESTRA OPCION 1 CON BARRA DE IMAGEN
<br>;
A: <b>$total1</b> votos - <b>$por1 %</b>;   // OPCION 1 CON NRO DE VOTOS Y PORCENTAJE
<br><br>; 

<IMG HEIGHT=15 WIDTH=$por2 SRC=barra.jpg>;  // MUESTRA OPCION 2 CON BARRA DE IMAGEN
<br>;
B: <b>$total2</b> votos - <b>$por2 %</b>;   // OPCION 2 CON NRO DE VOTOS Y PORCENTAJE

<br><br><br>;
Total Votos: <b>$votos</b>;
<br><br>;
<a href=javascript:history.back(-1);>Volver</a>;
</html>
?>
</font>
