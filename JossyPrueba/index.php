<!--============================================================================================== 
                                               CONTENIDO HEAD 
================================================== ============================================ -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <title>Remanso del Rodeo</title>
  </head>
  <body>
  		<main>
			<header>
				<!--========================================= MENU ============================================ --> 
				<nav class="navbar navbar-expand-lg navbar-dark fondo fixed-top">
					<div class="container">
						<a class="navbar-brand" href="#principal"><img src="imagenes/recortes/Remanso-05.png" alt="logo" class="logo img-fluid"></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mx-auto menu">
					      <li class="nav-item active">
					        <a class="nav-link" href="#proyecto">Proyecto <span >|</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#slider">Galería <span>|</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#subsidio">Apartamentos <span>|</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#mapa">Mapa <span>|</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#formulario">Contacto </a>
					      </li>
					    </ul>
					  </div>
					</div>
				</nav>
				<!--========================================= FIN MENU ============================================ --> 
			</header>
			<!--============================================================================================== 
                                               CONTENIDO HEAD 
        	================================================== ============================================ -->
			<!--============================================================================================== 
                                               CONTENIDO BODY 
        	================================================== ============================================ -->
        
         	<!--========================================= BANNER PRINCIPAL ============================================ -->  
			<section id="principal" class="principal">
				<div class="container-fluid">
					<div class="row">
						<div class="col-10 col-md-8 col-lg-6 bono">
							<div class="row justify-content-center no-gutters">
								<div class="col-12 col-md-6 col-lg-6">
									<figure class="img-bono text-center text-lg-right"><img src="imagenes/recortes/Remanso-07.png" class="img-fluid"></figure>
								</div>
								<div class="col-12 col-lg-6 fondo-bono d-none d-xl-block">
									<figure class="img-bono"><img src="imagenes/recortes/Remanso-08.png" class="img-fluid"></figure>
									<!--<h1 class="text-center font-bono">¡Dejanos tus datos y te <span class="font-weight-bold">mantendremos informado!</span></h1>-->
									<form class="form-bono">
									  <div class="form-group">
									    <input type="email" placeholder="Nombre*" class="form-control" id="exampleInputEmail1">
									  </div>
									  <div class="form-group">
									    <input type="email" placeholder="Correo Electronico*" class="form-control" id="exampleInputEmail1">
									  </div>
									   <div class="form-group">
									    <input type="email" placeholder="Telefono*" class="form-control" id="exampleInputEmail1">
									  </div>
									  <div class="form-group">
									    <input type="email" placeholder="Ciudad*" class="form-control" id="exampleInputEmail1">
									  </div>
									  <div class="form-group">
									    <textarea class="form-control" rows="3" style="
									    resize: none;" placeholder="Comentario"></textarea>
									  </div>
									  <p class="text-light terminos"> Al hacer clic en enviar, esta aceptando los terminos y condiciones</p>
									  <p class="text-center">
									  	<button type="submit" class="btn btn-bono ">ENVIAR</button>
									  </p>
									</form>
								</div>
								<!-- Button trigger modal -->
								<div class="col-12 d-block d-xl-none">
									<p class="text-center">
										<button type="button" class="btn btn-modal" data-toggle="modal" data-target="#exampleModal">
								  			BONO AQUÍ
										</button>
									</p>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h3 class="text-center titulo-modal">¡Dejanos tus datos y te <span class="font-weight-bold">mantendremos informado!</span></h3>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <form class="form-modal">
										  <div class="form-group">
										    <input type="email" placeholder="Nombre*" class="form-control" id="exampleInputEmail1">
										  </div>
										  <div class="form-group">
										    <input type="email" placeholder="Correo Electronico*" class="form-control" id="exampleInputEmail1">
										  </div>
										   <div class="form-group">
										    <input type="email" placeholder="Telefono*" class="form-control" id="exampleInputEmail1">
										  </div>
										  <div class="form-group">
										    <input type="email" placeholder="Ciudad*" class="form-control" id="exampleInputEmail1">
										  </div>
										  <div class="form-group">
										    <textarea class="form-control" rows="3" style="
										    resize: none;" placeholder="Comentario"></textarea>
										  </div>
										  <p class="modal-terminos"> Al hacer clic en enviar, esta aceptando los terminos y condiciones</p>
										  <p class="text-center">
										  	<button type="submit" class="btn btn-form-modal">ENVIAR</button>
										  </p>
										</form>
								      </div>
								    </div>
								  </div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</section>
			<!--========================================= FIN BANNER PRINCIPAL ============================================ --> 
			<!--========================================= PROYECTOS ============================================ --> 
			<section id="proyecto" class="proyecto">

				<div class="row no-gutters">
					<div class="col-12 col-lg-6">
						<figure class="img-principal"><img src="imagenes/recortes/Remanso-09.png" class="img-fluid"></figure>
					</div>
					<div class="col-12 col-lg-6">
						<div class="con-proyecto">
							<div class="mt-3">
								<h2 class="titulo-proyecto">PROYECTO</h2>
							</div>
							<p class="parrafo-proyecto">
								Remanso del Rodeo, un proyecto ubicado en Belén, sector Rodeo Alto, un
								lugar exclusivo con entorno campestre, excelente valorización y una vista
								inigualable sobre Rodeo Alto y gran parte de la ciudad de Medellín.
							</p>
							<p class="parrafo-proyecto2">
								Cuenta con beneficios únicos de movilidad, cercanía a lugares
								comerciales, además de tener diferentes vías de acceso.
							</p>
							<h3 class="cercano">cercano a:</h3>
							<nav class="nav flex-column lista">
								<li class="nav-item">
									<a href="" class="nav-link">Clínica las Américas</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Club Rodeo</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Carrera 80</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Guabal</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">La Mota</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Aeropuerto Olaya Herrera</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Parque Juan Pablo II</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Sector Comercial Guabal</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Exito de la Gran via</a>
								</li>
							</nav>
							
						</div>
					</div>						
					
				</div>
			</section>
			<!--========================================= FIN PROYECTOS ============================================ -->
			<!--========================================= ZONAS COMUNES ============================================ -->  
			<section id="zonas-comunes" class="zonas-comunes">
				<div class="container pb-5">
					<div class="row">
						<div class="mt-3 mt-md-5 col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
							<h2 class="text-center titulo-zonas-comunes">ZONAS COMÚNES</h2>
							<p class="text-center texto-zonas-comunes">Un lugar exclusivo para brindarte a ti y a tu familia todo lo que necesitan.</p>
						</div>
					</div>
					<div class="row justify-sm-content-center justify-content-lg-between">
                        <div class="con_servicios col-6 col-lg-2">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-10.png" class="img-fluid identidad mt-3" alt="porteria 24 horas icono"></a>
                        </div>
                         <div class="con_servicios col-6 col-lg-2">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-11.png" class="img-fluid web mt-3 " alt="salon social icono"></a>
                        </div>
                        <div class="con_servicios col-6 col-lg-2">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-12.png" class="img-fluid redes mt-3" alt="circuito cerrado icono"></a>
                        </div>
                        <div class="con_servicios col-6 col-lg-2">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-13.png" class="img-fluid redes mt-3" alt="parqueadero icono"></a>
                        </div>
                    </div>
                    <div class="row justify-sm-content-center justify-content-lg-between">
                        <div class="con_servicios col-6 col-lg-2">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-14.png" class="img-fluid identidad mt-3" alt="juegos infantiles icono"></a>
                        </div>
                         <div class="con_servicios col-6 col-lg-2">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-15.png" class="img-fluid web mt-3 " alt="gimnacio icono"></a>
                        </div>
                        <div class="con_servicios col-6 col-lg-2">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-16.png" class="img-fluid redes mt-3" alt="piscina icono"></a>
                        </div>
                        <div class="con_servicios col-6 col-lg-2">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-17.png" class="img-fluid redes mt-3" alt="cancha icono"></a>
                        </div>
                    </div>
				</div>
			</section>
			<!--========================================= FIN ZONAS COMUNES ============================================ -->
			<!--========================================= SLIDER ============================================ -->  
			<section id="slider">
				<div id="carouselExampleIndicators" class="carousel slide slider_1" data-ride="carousel">
	              <ol class="carousel-indicators d-none d-md-flex">
	                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	              </ol>
	              <div class="carousel-inner">
	                <div class="carousel-item active slider_img">
	                  <img class="d-block w-100" src="imagenes/galeria/Remanso-41.png" alt="tu mereces crecer">
	                </div>
	                <div class="carousel-item slider_img">
	                  <img class="d-block w-100" src="imagenes/galeria/Remanso-42.png" alt="la primera opción en tu mercado">
	                </div>                
	                <div class="carousel-item slider_img">
	                  <img class="d-block w-100" src="imagenes/galeria/Remanso-43.png" alt="llega a clientes nuevos">
	                </div>
	                <div class="carousel-item slider_img">
	                  <img class="d-block w-100" src="imagenes/galeria/Remanso-44.png" alt="llega a clientes nuevos">
	                </div>
	                <div class="carousel-item slider_img">
	                  <img class="d-block w-100" src="imagenes/galeria/Remanso-45.png" alt="llega a clientes nuevos">
	                </div>
	                <div class="carousel-item slider_img">
	                  <img class="d-block w-100" src="imagenes/galeria/Remanso-46.png" alt="llega a clientes nuevos">
	                </div>
	              </div>
	              <a class="carousel-control-prev" href=".slider_1" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	              </a>
	              <a class="carousel-control-next" href=".slider_1" role="button" data-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	              </a>
	            </div>
			</section>
            
            <!--========================================= FIN SLIDER ============================================ --> 
            <!--========================================= SUBSIDIO ============================================ --> 
			<section id="subsidio" class="subsidio mb-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 mb-5">
							<figure class="img-titulo-subsidio mb-3">
								<img src="imagenes/recortes/Remanso-18.png" class="img-fluid">
							</figure>
						</div>
						<div class="col-12 col-md-10 offset-md-1 mb-5">
							<figure class="img-titulo-precios">
								<img src="imagenes/recortes/Remanso-19.png" class="img-fluid d-none d-md-block d-lg-block d-xl-block">
								<img src="imagenes/recortes/Remanso-20.png" class="img-fluid d-block d-md-none d-lg-none d-xl-none">
							</figure>
						</div>
					</div>
					<div class="tz-gallery">
						<div class="row justify-content-center">
	                        <div class="con_servicios col-6 col-md-4 col-lg-3">
	                          <a class="lightbox" href="imagenes/recortes/Remanso-21.png"><img src="imagenes/recortes/Remanso-21.png" class="img-fluid" alt="porteria 24 horas icono"></a>
	                        </div>
	                         <div class="con_servicios col-6 col-md-4 col-lg-3">
	                          <a class="lightbox" href="imagenes/recortes/Remanso-22.png"><img src="imagenes/recortes/Remanso-22.png" class="img-fluid" alt="salon social icono"></a>
	                        </div>
	                        <div class="con_servicios col-6 col-md-4 col-lg-3">
	                          <a class="lightbox" href="imagenes/recortes/Remanso-23.png"><img src="imagenes/recortes/Remanso-23.png" class="img-fluid" alt="circuito cerrado icono"></a>
	                        </div>
	                    </div>
	                    <div class="row justify-content-center">
	                        <div class="con_servicios col-6 col-md-4 col-lg-3">
	                          <a class="lightbox" href="imagenes/recortes/Remanso-24.png"><img src="imagenes/recortes/Remanso-24.png" class="img-fluid" alt="porteria 24 horas icono"></a>
	                        </div>
	                         <div class="con_servicios col-6 col-md-4 col-lg-3">
	                          <a class="lightbox" href="imagenes/recortes/Remanso-25.png"><img src="imagenes/recortes/Remanso-25.png" class="img-fluid " alt="salon social icono"></a>
	                        </div>
	                        <div class="con_servicios col-6 col-md-4 col-lg-3">
	                          <a class="lightbox" href="imagenes/recortes/Remanso-26.png"><img src="imagenes/recortes/Remanso-26.png" class="img-fluid" alt="circuito cerrado icono"></a>
	                        </div>
	                    </div>
					</div>
				</div>
			</section>
            <!--========================================= FIN SUBSIDIO ============================================ --> 
            <!--========================================= FORMULARIO ============================================ --> 
			<section id="formulario" class="formulario-contacto pb-5">
				<div class="container">
					<div class="row">
						<div class="mt-3 mt-lg-5 col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
							<h2 class="text-center titulo-formulario-contacto">CONTÁCTANOS</h2>
						</div>
						<div class="mb-3 col-12 col-lg-6 offset-lg-3">
							<p class="text-center texto-formulario-contacto">Déjanos tus datos y un asesor de nuestro proyecto secomunicará para brindarte la mejor asesoria.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-8 offset-lg-2">
							<form id="f_orden" class="formulario" method="post" action="proceso.php">
								<div class="form-row mb-3">
									<div class="col">
									    <input type="text" name="nombre" id="nombre" placeholder="Nombre*" class="form-control" required>
									</div>
									<div class="col">
									    <input type="email" name="correo" id="correo" placeholder="Correo Electronico*" class="form-control" required>
									</div>
								</div>
							  	<div class="form-row mb-3">
							   		<div class="col">
							    		<input type="tel" name="telefono" id="telefono" placeholder="Telefono*" class="form-control">
							  		</div>
							  		<div class="col">
							    		<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad*" class="form-control" id="exampleInputEmail1">
							  		</div>
							  	</div>
							  <div class="form-group">
							    <textarea class="form-control" name="mensajeP" id="mensajeP" rows="3" style="
							    resize: none;" placeholder="Comentario" required></textarea>
							  </div>
							  <p class="text-right text-light terminos"> Al hacer clic en enviar, esta aceptando los terminos y condiciones <button type="submit" class="btn btn-formulario ml-5">ENVIAR</button></p>
							   <div id="respuesta" class="col-6 col-offset-3 text-center" style="display: none">
                            </div>
							</form>
						</div>
						
					</div>
				</div>
			</section>
            <!--========================================= FIN FORMULARIO ============================================ --> 
            <!--========================================= MAPA ============================================ --> 
			<section id="mapa" class="mapa pb-3">
				<div class="container">
					<div class="row justify-content-center">
						<div class="mt-3 mt-lg-5 col-8 col-md-4 col-lg-2">
							<h2 class="text-center titulo-mapa">MAPA</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="mb-3 col-12 col-lg-6 col-xl-10">
							<p class="text-center texto-mapa">Sector de Belén Rodeo Alto, cerca de la Clínica las Américas, Club el Rodeo, Parque Juan Pablo II, Mall comercial la Gran Vía y La Mota, Éxito de la Gran Vía y sector comercial de Guayabal, entre otras comodidades.</p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-sm-8 col-lg-6">
							<figure class="img-mapa">
								<img src="imagenes/recortes/Remanso-28.png" class="img-fluid">
							</figure>
						</div>
					</div>
				</div>
			</section>
            <!--========================================= FIN MAPA ============================================ --> 
            <!--========================================= GRUPO  ============================================ --> 
			<section id="grupo" class="grupo mb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="mt-5 col-12 col-md-8 col-lg-5">
							<h2 class="text-center titulo-grupo">GRUPO PROFESIONAL</h2>
						</div>
					</div>
					<div class="row justify-content-center">
                        <div class="con_servicios col-6 col-sm-3">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-29.png" class="img-fluid identidad mt-3" alt="porteria 24 horas icono"></a>
                        </div>
                         <div class="con_servicios col-6 col-sm-3">
                          <a href="#orden"><img src="imagenes/recortes/Remanso-30.png" class="img-fluid web mt-3 " alt="salon social icono"></a>
                        </div>
                    </div>
				</div>
			</section>
            <!--========================================= FIN GRUPO ============================================ --> 
			<!--============================================================================================== 
                                               CONTENIDO BODY 
        	================================================== ============================================ -->
        	<!--============================================================================================== 
                                               CONTENIDO FOOTER 
        	================================================== ============================================ -->
			<footer id="sala" class="sala">
				<div class="container">
					<div class="row">
						<div class="mt-5 col-12  col-lg-6 offset-lg-3">
							<h2 class="text-center titulo-sala">SALA DE NEGOCIOS</h2>
						</div>
					</div>
					<div class="row justify-content-center">
                        <div class="con_servicios col-6 col-sm-3 mb-5">
                          <p class="text-center"><img src="imagenes/recortes/Remanso-31.png" class="img-fluid" alt="celular icono"></p>
                          <p class="text-center info-sala font-weight-bold">Tel:</p>
                          <p class="text-center info-sala">3439241 - 3137050212</p>
                        </div>
                         <div class="con_servicios col-6 col-sm-3 mb-5">
                           <p class="text-center"><img src="imagenes/recortes/Remanso-32.png" class="img-fluid" alt="celular icono"></p>
                          <p class="text-center info-sala font-weight-bold">Dirección:</p>
                          <p class="text-center info-sala">calle 6 sur # 79 -158 Medellin</p>
                        </div>
                        <div class="con_servicios col-6 col-sm-3 mb-5">
                           <p class="text-center"><img src="imagenes/recortes/Remanso-33.png" class="img-fluid" alt="celular icono"></p>
                          <p class="text-center info-sala font-weight-bold">Hora de Atención:</p>
                          <p class="text-center info-sala">10 am - 5:30 pm</p>
                        </div>
                        <div class="con_servicios col-6 col-sm-3 mb-5">
                          <p class="text-center"><img src="imagenes/recortes/Remanso-34.png" class="img-fluid" alt="celular icono"></p>
                          <p class="text-center info-sala font-weight-bold">Correo:</p>
                          <p class="text-center info-sala">remansodelrodeo@une.net.co</p>
                        </div>
                        <p class="text-center mb-5 texto-sala">
                        	Las imágenes utilizadas son representaciones digitales del diseño y junto con las oficinas, locales y apartamentos pueden variar en la construcción final. El mobiliario, electrodomésticos,
							gasodomésticos, acabados y demás elementos que aparecen en las imágenes son una representación a fin de ilustrar la utilización de los espacios y pueden diferir de lo entregado o no ser
							entregado según lo convenido en los contratos. Las áreas privadas y construidas podrán sufrir ajustes y quedarán finalmente determinadas en los contratos suscritos por las partes.
                        </p>
                        <p class="text-center">
                        	<a href="https://www.hablacreativo.com/"><img src="imagenes/recortes/Remanso-35.png" class="img-fluid"></a>
                        </p>
                    </div>
				</div>
			</footer>
		</main>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script type="text/javascript" src="js/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/jqueryForm.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
	  baguetteBox.run('.tz-gallery');
    </script>
  </body>
</html>
<!--============================================================================================== 
                                               CONTENIDO FOOTER 
================================================== ============================================ -->