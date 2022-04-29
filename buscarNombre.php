<!-- PAGINA PRINCIPAL PARA EL FORMULARIO DE PARAMEDICO -->
<!-- UNICAMENTE REGISTRA SU NOMBRE Y FECHA DE NACIMIENTO PARA BUSCARLO EN LA BD -->



<?php
    include('header.php');
?>


<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <div class='py-4'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Datos PRE-HOSPITALARIO</h4>
                        </div>
                        <div class="card-body">
                            <form action="antecedentes.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label"><b>Nombre del Paciente</b></label>
                                    <input type="text" class="form-control" name="lugar" maxlength="10">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Fecha de Nacimiento</b></label>
                                    <input type="date" class="form-control">
                                </div>
                                <!-- aqui va la consulta sql para recuperar el id del paciente mediante su nombre y fecha de nacimiento -->
                                <!-- si existe en la bd, para antecentes -->

                                <!-- si no existe, pasa directo al formulario pre-hospitalario -->

                                
                                <div class="input-group  mb-3 justify-content-center">
                                    <button class="btn btn-primary" type="submit" name="register">Continuar</button>
                                </div>  
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include('auxiliar/emergenteTriage.php');
    include('footer.php');
?>