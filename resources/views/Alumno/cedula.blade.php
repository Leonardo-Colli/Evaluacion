@extends('Plantillas.Alumno.plantillaCedula')
@section('contenido')
	
	<div class="principal-content flex">
		<div class="p-content column justify-center">
			<div class="matricula align-center ">
				<i class="fas fa-user-circle"></i>&nbsp;<u>Matricula</u>
			</div>
			<div class="title justify-center">
				<h1 class="h1 text-center ">CÉDULA</h1>
			</div>
			<div class="justify-center">
				<div class="black-containerCedu column">
					<div class="question-container column">
						<div class="cedula-inputs-container column justify-center">
							<div class="ci row justify-center">
								<label>Nombre: </label>
								<input type="text" id="name" name="user_name">
							</div>
							<br>
							<div class="ci row justify-center">
								<label>Email: </label>
								<input type="text" id="name" name="user_email">
							</div>
							<br>
							<div class="ci row justify-center">
								<label>Teléfono: </label>
								<input type="text" id="name" name="user_numero">
							</div>
							<br>
							<div class="ci row justify-center">
								<label>Dirección: </label>
								<input type="text" id="name" name="user_address">
							</div>
						</div>
						<!--<div class="subjects-cedula column align-center justify-left">
                              <div class="let row">
                               		<label for="name">Nombre:</label>
									<input type="text" id="name" name="user_name">
                              </div>
                              <div class="let row">
                                   <label for="mail">E-mail:</label><input type="email" id="mail" name="user_email">
                              </div>
                              <div class="let row">
                                   <label for="num">Número:</label>
                                   <input type="numer" id="num" name="user_numero">
                              </div>
                              <div class="let row">
                                   <label for="dire"	>Dirección:</label>
                                   <input type="direc" id="dire" name="user_numero">
                              </div>
						</div>-->
						<div class=" Tercedula justify-center">
							<a href="/alumno/menu" style="text-decoration: none" class="btn-eval text-center"><i class="fas fa-pen"></i>&nbsp;Terminar cédula</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection