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
                <div class="text-center">
                    <img src="img/UIU.png" class="rounded" alt="uiu logo">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Datos PRE-HOSPITALARIO</h4>
                    </div>
                    <div class="card-body">
                        <form action="buscarNombre.php" method="post">
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
                                        <td><input type="text" class="form-control" name="saida" value=""></td>
                                        <td style="padding-left:10px;"><input type="text" name="llegada" class="form-control"></td>
                                    </tr>
                                </table>
                                <div class="mb-3">
                                    <label class="form-label" <th style="padding-top:10px;"><b>Ordeno</b></label>
                                    <input type="text" class="form-control" name="ordeno">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Ubicaci&oacute;n</b></label>
                                    <input type="text" class="form-control" name="ubicacion">
                                </div>
                            </section>
                            <hr>
                            <!-- MOTIVO DE ATENCION-->
                            <section>
                                <div class="card-header">
                                    <h4 class="text-center">Motivo de la atenci&oacute;n</h4>
                                </div>
                                <select class="form-select" aria-label="Default select example" name="motivo">
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
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioLocal" value="Local" />
                                                    <label class="form-check-label" for="inlineRadio1Local">Local</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioForaneo" value="Foraneo" />
                                                    <label class="form-check-label" for="inlineRadioForena">Foraneo</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="mb-3">
                                        <label class="form-label"><b>Lugar</b></label>
                                        <input type="text" class="form-control" name="lugar">
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
                                    <input type="text" class="form-control" name="operador">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>T.M.U</b></label>
                                    <input type="text" class="form-control"  name="tmu">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>DR.</b></label>
                                    <input type="text" class="form-control" name="dr" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Camillero</b></label>
                                    <input type="text" class="form-control" name= "camillero" >
                                </div>
                            </section>
                            <br>
                            <div class="input-group  mb-3 justify-content-center">
                                <input class="btn btn-primary" type="submit" name="register" value="Continuar">
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
