@extends('Plantillas.Alumno.plantillaPregunta')
@section('contenido')
	
	<div class="principal-content flex">
		<div class="p-content column justify-center">
			<div class="title justify-center">
				<h1 class="h1 text-center ">MATEMÁTICAS</h1>
			</div>
			<div class="justify-center">
				<div class="black-containerQ column">	
						<div class="math-question align-center justify-center">
							<div class="math-card column align-center">
								<div class="math-questionname column">
									<div>
										<h2 class="text-left">Pregunta 1</h2>
									</div>
									<br>
									<div class="q-box column">
										<div>
											<h3>¿Qué pregunta se hará?</h3>
										</div>
										<br>
										<div class="answers column justify-center">
											<div class="row">
												<input type="checkbox" name="">&nbsp; Respuesta
											</div>
											<br>
											<div class="row">
												<input type="checkbox" name="">&nbsp; Respuesta
											</div>
											<br>
											<div class="row">
												<input type="checkbox" name="">&nbsp; Respuesta
											</div>
											<br>
											<div class="row">
												<input type="checkbox" name="">&nbsp; Respuesta
											</div>
										</div>
									</div>
									<div class="justify-end">
										<style type="text/css"> 
                                    a {color:black;} 
                                    
                                </style>
										<a  href="menu.html" style="text-decoration: none" class="btn-question text-center" >Finalizar</a>
									</div>
								</div>	
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>

@endsection