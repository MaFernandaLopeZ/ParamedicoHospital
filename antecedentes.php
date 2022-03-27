<?php
    include('header.php');
    // variable que recibe el id del paciente de la pagina principal
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <section>
        <div class='py-4'>
            <div class="container">
                <div class="row justify-content-center">
                    <!--poner opcion para desplegar los antecedentes-->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <img src="img/angle-down (1).png" width="30px" height="30px" id="imgb1" style="float:right;" name="b1">
                                <h4 class="text-center">Antecedentes</h4>
                            </div>
                            <div class="card-body cuadro1">
                                <details>
                                    <summary><b>Patologicos</b></summary>    
                                    <p><b>Sarampión:</b>(no recuerda edad), sin complicaciones</p>
                                    <p><b>Varicela:</b> a los 11 años, sin complicaciones.</p>
                                </details>
                                <hr>
                                <details>
                                    <summary><b>Enfermedades clinicas</b></summary>    
                                    <p>Toma anticonceptivos orales desde hace 4 años</p>
                                </details>
                                <hr>
                                <details>
                                    <summary><b>Alergias</b></summary>    
                                    <p>Refiere alergia a la dipirona. Tuvo dos episodios de erupción cutánea en la infancia. Niega atopías y alergias alimentarias</p>
                                </details>
                                <hr>
                                <details>
                                    <summary><b>Quirurgicos/Traumaticos</b></summary>    
                                    <p>Fractura de la primera falange de la mano derecha (durante una práctica deportiva) a los 9 años</p>
                                    <p>Toma anticonceptivos orales desde hace 4 años</p>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="checkbox" id="c1" name="cuadros" value="a1" hidden="true"><br>
    </section>
   
    <div class='py-4'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Datos del Paciente</h4>
                        </div>
                        <div class="card-body">
                            <form action="historial.php" method="post">
                                <!-- fecha que se ponga en automatico -->
                                <div class="mb-3">
                                    <label class="form-label"><b>Nombre</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Fecha de Nacimiento</b></label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <table>
                                        <tr>
                                            <th>Edad</th>
                                            <th style="padding-left:30px;">Sexo</th>
                                        </tr>
                                        <tr>
                                            <td  width="100px"><input type="text" class="form-control" name="lugar"></td>
                                            <td style="padding-left:30px;">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioF" value="F"/>
                                                    <label class="form-check-label" for="inlineRadio1F" value="F">F</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioM" value="M"/>
                                                    <label class="form-check-label" for="inlineRadio1F" value="M">M</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Telefono</b></label>
                                    <input type="text" class="form-control" name="lugar" maxlength="10">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Direcci&oacute;n</b></label>
                                    <textarea style="heigth:150px;resize: none;" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Dependencia</b></label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="input-group  mb-3 justify-content-center">
                                    <button class="btn btn-primary" type="submit" name="register">Guardar</button>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
<?php
    include('auxiliar/emergenteTriage.php');
    include('footer.php');
?>