
<html>
    <head>
        <title>evidencia2_CamiloBonilla</title>
        <meta http-equiv="Content-Type" 
              content ="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php 
             $Colores = array (
              "Amarillo" => "Riqueza y Alegria",
              "Verde" => "Naturaleza",
             );
          $Directorio = array (
            array("Nombre","Dirección","Teléfono","Fecha de Cumpleaños","Color Favorito","Significado"),
            array("Juan Perez","Cra 45 #45-56","3456789","23/12/1997","Amarillo"),
            array("Pablo Manrique","Cra 23 #12-19 Sur","3214567","12/10/1980","Verde",""),
            array("Nancy Peña","Av. 34 #16-12","2135423","07/06/2000","Rojo","cafe"),// Camilo Andre Bonilla - Desarrollo web con PHP - Uso de arreglos
           );
 
         for($i=1;$i<4;$i++){
            $color=$Directorio[$i][4];
              if(empty($Colores[$color])){
                  $Directorio[$i][5]='No se encuentra el significado';// este for llena les espacios vacios
            }
 else {
            $Directorio[$i][5]=$Colores[$color];//si no esta vacio deja el valor por defecto
              }
               }
          ?>
<html>
         <table border="2" width="50%" cellspacing="2">
            <?php
             foreach ($Directorio as $fila){
                echo "<tr>";
                   foreach ($fila as $celda){
                   echo "<td> $celda </td>";
                }//me apoye en varias paginas para el desarrollo de la tabla y este fue el mas corto mas no el mas sencillo que encontre
        echo "</tr>";
        }
?>
        </table>
</html>
    </body>
</html>