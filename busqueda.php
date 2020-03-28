<?php
require_once("head.php");
$buscame = $crud->buscar();
?>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Resultado de la búsqueda</title>
<style type="text/css">
    table{border:1px solid black; margin: 100px 0px 0px 160px}
    th{background-color:#0000FF; color:#fff;}
    td{background-color:#CCCCCC;}
    
</style>
</head>
<body>
<table>
    <tr>
        <th width="200px">Titulo</th>
        <th width="200px">Parrafo</th>

    </tr>
<?php
//COMPROBAMOS SI HAY REGISTROS EN LA BUSQUEDA, SI NO LOS HAY, MOSATRAMOS UN MENSAJE DICIENDO QUE NO HAY RESULTADOS, EN OTRO CASO, MOSTRAMOS LOS RESULTADOS
if(count($buscame)==0)
{
echo "<h2>No hay resultados para su búsqueda...</h2>";
}else{
for($i=0;$i<sizeof($buscame);$i++)
{
?>
    <tr>
        <td align="center">
            <?php echo $buscame[$i]["titulo"] ?>
        </td>
        <td align="center">
            <?php echo $buscame[$i]["parrafo"] ?>
        </td>
    </tr>
<?php
}
}
?>
</table>
</body>
</html>