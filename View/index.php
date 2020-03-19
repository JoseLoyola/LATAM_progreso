<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LATAM Alumnos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="img/logo.png" alt="">
        </header><hr><br>
        <div class="main">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Ingrese un dato para buscar">
                </div>
                <div class="col-md-4 offset-4">                    
                    <a href="registrarse.php"><input type="button" class="btn btn-success" value="Registrarse"></a>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registrarseModal">
                        Registrarse
                    </button>
                </div>
            </div><br>
            
            <!--Start Modal Registrarse-->
                <div class="modal fade" id="registrarseModal" tabindex="-1" role="dialog" aria-labelledby="Registrarse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            Nombre: <input type="text" class="form-control">
                                        </div><br>
                                        <div class="col-md-12">
                                            Apellido: <input type="text" class="form-control">
                                        </div><br>
                                        <div class="col-md-12">
                                            Escuela:
                                            <select name="" id="" class="form-control">
                                                <option value="LATAM">LATAM</option>
                                                <option value="LATAM">LATAM</option>
                                                <option value="LATAM">LATAM</option>
                                            </select>
                                        </div><br>
                                        <div class="col-md-12">
                                            <input type="checkbox"> No está mi escuela, deseo registrarla
                                        </div><br>
                                        <div class="col-md-12">
                                            Nombre de tu escuela: <input type="text" class="form-control">
                                        </div><br>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ck1">
                                                <label class="form-check-label" for="ck1">
                                                    Pensamiento
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ck1">
                                                <label class="form-check-label" for="ck1">
                                                    Líder
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ck1">
                                                <label class="form-check-label" for="ck1">
                                                    Finanzas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ck1">
                                                <label class="form-check-label" for="ck1">
                                                    Coaching
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ck1">
                                                <label class="form-check-label" for="ck1">
                                                    Liderazgo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ck1">
                                                <label class="form-check-label" for="ck1">
                                                    Innovación
                                                </label>
                                            </div>
                                        </div><br>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!--End Modal Registrarse-->
            
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Escuela</th>
                                <th>Pensamiento</th>
                                <th>Líder</th>
                                <th>Finanzas</th>
                                <th>Coaching</th>
                                <th>Liderazgo</th>
                                <th>Innovación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>LCN_001</td>
                                <td>José Manuel</td>
                                <td>Loyola Loyola</td>
                                <td>LATAM</td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td> 
                            </tr>
                            <tr>
                                <td>LCN_001</td>
                                <td>José Manuel</td>
                                <td>Loyola Loyola</td>
                                <td>LATAM</td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>LCN_001</td>
                                <td>José Manuel</td>
                                <td>Loyola Loyola</td>
                                <td>LATAM</td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                            </tr>
                            <tr>
                                <td>LCN_001</td>
                                <td>José Manuel</td>
                                <td>Loyola Loyola</td>
                                <td>LATAM</td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>
                                <td class="text-center"><i class="fa fa-check-circle text"></i></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer>
            
        </footer>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
