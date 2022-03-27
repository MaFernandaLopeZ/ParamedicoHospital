<?php
    include("header.php");
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class='py-4'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                <form action="buscarNombre.php" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Datos PRE-HOSPITALARIO</h4>
                        </div>
                        <div class="card-body">
                            <!-- section principal-->
                                <section>
                                    <table>
                                        <tr>
                                            <th>Fecha</th>
                                            <th style="padding-left:10px;">Folio</th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" value=" <?php echo date("d/m/Y"); ?>" disabled></td>
                                            <td style="padding-left:10px;"><input type="text" class="form-control"></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <th style="padding-top:7px;">Salida</th>
                                            <th style="padding-left:10px;">Llegada</th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" value=""></td>
                                            <td style="padding-left:10px;"><input type="text" class="form-control"></td>
                                        </tr>
                                    </table>
                                    <div class="mb-3">
                                        <label class="form-label" <th style="padding-top:10px;"><b>Ordeno</b></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><b>Ubicaci&oacute;n</b></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </section>
                        </div>
                    </div>
                    <br>
                    <!-- MOTIVO DE LA ATENCION -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Motivo de la atenci&oacute;n</h4>
                        </div>
                        <div class="card-body">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="Traumatismo">Traumatismo</option>
                                <option value="Enfermedad">Enfermedad</option>
                                <option value="Gineco-Obstetrico">Gineco-Obstetrico</option>
                            </select>
                            <br>
                            <div class="mb-3">
                                <table>
                                        <tr>
                                            <th>Translado</th>
                                        </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioLocal" value="Local"/>
                                                <label class="form-check-label" for="inlineRadio1Local">Local</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioForaneo" value="Foraneo"/>
                                                <label class="form-check-label" for="inlineRadioForena">Foraneo</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="mb-3">
                                    <label class="form-label"><b>Lugar</b></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Ambulancia No.</b></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Operador</b></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>T.M.U</b></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>DR.</b></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Camillero</b></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>    
                    <!-- DATOS DEL PACIENTE -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Datos del Paciente</h4>
                        </div>
                        <div class="card-body">
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
                        </div>
                    </div>
                    <br>
                    <div class="input-group  mb-3 justify-content-center">
                        <button class="btn btn-primary" type="submit" name="register">Guardar</button> <button type="button" class="btn btn-danger" type="submit" name="register">Finalizar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include('auxiliar/emergenteTriage.php');
    include("footer.php");
?>    