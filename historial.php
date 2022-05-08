<?php
    include("header.php");
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <div class='py-4'>
            <div class="container">
                <div class="row justify-content-center">
                    <!--poner opcion para desplegar los antecedentes-->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Historial de Datos-Prehospitalarios</h4>
                            </div>
                            <div class="card-body cuadro1">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <td>Dolores Huerta Cruz</td>
                                            <td>
                                                <form action="modificarForm.php" method="post">
                                                    <button type="submit" class="btn"><i class="fas fa-edit"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dolores Huerta Cruz</td>
                                            <td>
                                                <form action="modificarForm.php" method="post">
                                                    <button type="submit" class="btn"><i class="fas fa-edit"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dolores Huerta Cruz</td>
                                            <td>
                                                <form action="modificarForm.php" method="post">
                                                    <button type="submit" class="btn"><i class="fas fa-edit"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="input-group  mb-3 justify-content-center">
                                    <button type="button" class="btn btn-link" ><a href="index.php">Llenar nuevo formato</a></button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    include('auxiliar/emergenteTriage.php');
    include("footer.php");
?>