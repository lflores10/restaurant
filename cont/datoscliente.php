<?
include('../main/config.php');
$cli=mysqli_fetch_array(mysqli_query($mysqli_link,"select * from clientes where codigo like '$c'"));
?>
<h2 style="color:#069">Datos del cliente <em style="color:#39F"><?=$cli["nombre"]?></em></h2>
<hr />
<div style="width:100%; height:250px; overflow:auto;">
   <table width="100%" border="0" cellpadding="10" cellspacing="0">
      <tr>
         <td><strong>Nombre:</strong></td>
         <td><input name="nombre" type="text" value="<?=$cli[nombre]?>" class="form-control"></td>
      </tr>
      <tr>
         <td><strong>RIF / Cedula:</strong></td>
         <td><input name="rif" type="text" value="<?=$cli[rif]?>" class="form-control"></td>
      </tr>
      <tr>
         <td><strong>Direci&oacute;n:</strong></td>
         <td><input name="direccion" type="text" value="<?=$cli[direccion]?>" class="form-control"></td>
      </tr>
      <tr>
         <td><strong>Correo:</strong></td>
         <td><input name="direccion" type="text" value="<?=$cli[email]?>" class="form-control"></td>
      </tr>
      <tr>
         <td><strong>Tel&eacute;fonos:</strong></td>
         <td><input name="direccion" type="text" value="<?=$cli[telefono]?>" class="form-control"></td>
      </tr>
      <?
      $data = json_decode($cli[data]);
      if(strlen($data)>0){
         foreach($data as $r){
            ?>
            <tr>
               <td><strong><?
                  echo $r->k;
                  ?></strong></td>
                  <td><?=$r->v?></td>
               </tr> 
               <?   
            }     
         }
         ?>
      </table>
</div><? $x=@mysqli_close($mysqli_link);?>