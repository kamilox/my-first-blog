<div class="row head">
	<div class="col-lg-2 col-md-2 col-xs-2 logo_">
		<img src="images/header/medical_1.png" class="logo">
	</div>
		<h1 class="nombre">Clinica Lorem Ipsum</h1>
		<div class="col-lg-10 col-md-10 col-xs-10 redes">
		<img src="images/header/facebook.png" class="red1">
		<img src="images/header/instagram.png" class="red">
		<img src="images/header/twitter.png" class="red">
	</div>
	<div class="col-lg-10 col-md-10 col-xs-10 login">
		<button type="button" class="btn btn-default"><a href="html/login.php">Entrar</a></button>
		<button type="button" class="btn btn-default"><a href="html/resgistro.php">Registrarse</a></button>
	</div>
	<div class="col-lg-10 col-md-10 col-xs-10 menu"> <!-- menu -->
		<div class="btn-group" role="group" aria-label="...">
		 	<button type="button" class="btn btn-default"><a href="index.php">Inicio</a></button>
		  	<button type="button" class="btn btn-default"><a href="index.php">Quienes Somos</a></button>
		  	<!-- Boton descendente -->
		  		<div class="btn-group" role="group">
		    		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			     		<a>Servicios</a>
			      		<span class="caret"></span>
		    		</button>
		    			<ul class="dropdown-menu">
		      				<li><a href="#">Médicos</a></li>
		      				<li><a href="#">Laboratorio</a></li>
		      				<li role="separator" class="divider"></li>
		      				<li><a href="#">Comerciales</a></li>
		      				<li><a href="#">Gubernamentales</a></li>
		      				<li role="separator" class="divider"></li>
		      				<li><a href="#">Usuarios</a></li>

		    			</ul>
		  		</div>
		  	<button type="button" class="btn btn-default"><a href="#">Directorio</a></button>
		  	<button type="button" class="btn btn-default"><a href="#">Admisión</a></button>
		  	<button type="button" class="btn btn-default"><a href="#">Noticias</a></button>
		  	<button type="button" class="btn btn-default"><a href="#">Empleo</a></button>
		  	<button type="button" class="btn btn-default contacto"><a href="#">Contactenos</a></button>
		</div>
	</div>
</div><!--  cierre de menu -->
<!-- Css -->
<style type="text/css">
	.nombre {
	    font-size: 36px;
	    margin-bottom: -10%;
	    text-align: center;
	    padding-right: 12%;
	    color: #0000a3;
	}
	.row{
		margin-right: 0px;
    	margin-left: 0px;
	}
	.head{
		/*height: 50px;*/
	}
	.head, .dropdown-menu, ul, li{
		background: #fff;
	}
	.logo_{
		/*margin-top: 9%;
	    margin-bottom: -13%;
	    z-index: 2;*/
	}
	.logo{
		width: 100%;
	}
	.login{
		text-align: right;
		margin: 1% 0% 0% 0%;
	}
	.login>button{
		margin: 0% 1% 0% 0%;
	}
	.redes{
		/*margin: 1% 0% 1% 0%;*/
	}
	.red, .red1{
		float: right;
		height: 50px;
	}
	.red1{
		margin-right: 1.5%;
	}
	/* Menu */
	.menu {
    	margin-top: 1%;
    	padding-right: 2%;
	}
	.btn-group{
		float: right;
		padding-right: 0%;
		background: #fff;
		opacity: 1;
	}
	.btn-default {
    	text-shadow: none;
    	box-shadow: none;
    }
	.btn{
		background: transparent !important;
		border-radius: 0px !important;
		border:none !important;
	}
	 .btn:hover, .btn-default:hover{
		background: #f0f0f0 !important;
		opacity: .8 !important;
		border-radius: 4px !important;
		color: #ffffff !important;
	}
	
	.caret{
		color: #000;
	}
	a{
		color: #000 !important;
		font-size: 16px;
	}
	ul{
		float: left;
	}

@media screen and (max-width: 1080px) {
	.nombre {
	    font-size: 36px;
	    margin-bottom: -10%;
	    text-align: center;
	    padding-right: 22%;
	}
	.red, .red1{
		height: 40px;
	}
		/* Menu */
	.menu {
		padding-right: 1%;
	}
	a{
		font-size: 14px;
	}
	
}
@media screen and (max-width: 800px) {
	a, p{
		font-size: 11px;
	}
	h3{
		font-size: 18px;
	}
}

</style>
