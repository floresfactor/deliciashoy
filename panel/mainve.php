<?php include('head.php'); ?>
    <!-- <div align="center">-->
    <div style="width:100%; display:table-cell;">
      <div style="float:left;">
        <ul class="nav nav-pills" //style="display: table-cell;">
          <li><a href="index.php">Nueva Nota</a></li>
          <li><a href="mainvp.php">Nuevo Video Portada</a></li>
          <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          </ul>
          </li>-->
          <li class="active"><a href="mainvp.php">Nuevo Video Especial</a></li>
          <li><a href="mainne.php">Nueva Editorial</a></li>
          <li><a href="mainnc.php">Nueva Cardinales</a></li>
        </ul>
      </div>
      <div style="float:left;">&nbsp;
        <a class="btn btn-success" href="editnota.php">Editar Video Especial</a>
      </div>
    </div>
  </div>

<div align="center">
        <form id="formnota" enctype="multipart/form-data" action="procesave.php" method="post" class="form-horizontal my-form" role="form">

    <div class="form-group">
  <label class="col-sm-5 control-label">Titulo</label>
  <div class="col-sm-4">
        <input type="text" name="titulo" id="titulo" class="form-control" required>
</div>
</div>
      <div class="form-group">
  <label class="col-sm-5 control-label">Imagen 1</label>
  <div class="col-sm-1">
        <input type="file" name="imagen1" id="fileimagen1" class="btn-primary" title="Subir Archivo">
        </div>
        </div>

                <div class="form-group">
  <label class="col-sm-5 control-label">Clasificacion</label>
  <div class="col-sm-3">        
        <select name="clasificacion" id="selectclasificacion" class="form-control">
          <option>delicias</option>
          <option>estado</option>
          <option>nacional</option> 
          <option>mundo</option>
          <option>deportes</option>
          <option>gobierno</option>
          <option>instituciones</option>
          <option>economia</option>
          <option>espectaculos</option>
          <option>ciencia</option>
          <option>tecnología</option> 
          <option>editorial</option>
          <option>sorprendete</option>
        </select>
        </div>
      </div>
                <div class="form-group">
  <label class="col-sm-5 control-label">Codigo Video</label>
  <div class="col-sm-4">
        <textarea name="codigovideo" id="codigovideo" rows="10" cols="20" class="form-control"></textarea>
</div>
</div>
        <div class="form-group">
  <label class="col-sm-5 control-label"></label>
  <div class="col-sm-3">
        <input type="submit" name="enviar" class="btn-primary" value="Publicar">
</div>
</div>

      </form>

        
      
</div>



  
<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.file-input.js"> </script>
         <script type="text/javascript">
     $('input[type=file]').bootstrapFileInput();
$('.file-inputs').bootstrapFileInput();

</script>





</body>
</html>