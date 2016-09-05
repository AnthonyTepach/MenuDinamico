
<?php require_once('inc/conexion.php'); ?> 

<nav class="navbar navbar-default" role="navigation">
<!-- Menú para moviles-->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
    </button>
     <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="200px"></a>
  </div>
 
  <!-- Menú completo-->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
     	 <li role="presentation"><a href="#"><i class="fa fa-compass fa-2x" aria-hidden="true"></i> Ubicación</a></li>
         <li role="presentation"><a href="#"><i class="fa fa-inbox fa-2x" aria-hidden="true"></i> Contacto</a></li>
         <li role="presentation"><a href="#"><i class="fa fa-question-circle fa-2x" aria-hidden="true"></i> FAQ</a></li>
      
    </ul>
 
       <ul class="nav navbar-nav navbar-right">
    	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-filter fa-2x" aria-hidden="true"></i>
	  Opciones <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <?php
         		$sql='SELECT nom_opc FROM opcion';
         		foreach ($con -> query($sql) as $rs) {
         			//var_dump($rs);
         			echo "<li>";
         			echo "<a href='".$rs['nom_opc'].".php"."'>";
                    echo "<i class='fa fa-long-arrow-right' aria-hidden='true'></i> ";
         			echo $rs['nom_opc'];
         			echo "</a></li>";
         		}
         	?>
        </ul>
      </li>
      <li><a href="#">
 		Iniciar sesi&oacute;n <i class="fa fa-sign-in fa-2x" aria-hidden="true" ></i></a></li>
    </ul>
  </div>
</nav>

