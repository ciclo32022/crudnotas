<?php


if (!isset($_GET["id"])){
    
    header("Location: index.php");
    
}
include "model/Conexion.php";
$id=$_GET["id"];

$sentencia = $conexion->prepare( "SELECT * FROM alumno WHERE id_alumno = ?; ");
$sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona);




?>

<!DOCTYPE <!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
        <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">EDITAR ALUMNO</h2>
                    <form method="POST" action="editarProceso.php">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row justify-content-center">
                            <div class="col-md-6 mb-4">




                                <div class="form-outline text-center">

                                    <input class="form-control" id="periodo" type="text" name="txt2Paterno"
                                        value="<?php echo $persona->ap_paterno; ?>" placeholder="Apellido Paterno"
                                        autofocus required maxlength="15" size="6">
                                    <br>
                                    <input class="form-control" id="periodo" type="text" name="txt2Materno"
                                        value="<?php echo $persona->ap_materno; ?>" placeholder="Apellido Materno"
                                        autofocus required maxlength="15" size="6">
                                    <br>
                                    <input class="form-control" id="periodo" type="text" name="txt2Nombre"
                                        placeholder="Nombre" value="<?php echo $persona->nombre; ?>" autofocus required
                                        maxlength="15" size="6">
                                    <br>
                                    <input class="form-control" id="periodo" type="text" name="txt2Parcial"
                                        value="<?php echo $persona->ex_parcial; ?>" placeholder="Nota Parcial" autofocus
                                        required maxlength="15" size="6">
                                    <br>
                                    <input class="form-control" id="periodo" type="text" name="txt2Final"
                                        placeholder="Nota Final" value="<?php echo $persona->ex_final; ?>" autofocus
                                        required maxlength="15" size="6">



                                </div>

                            </div>

                        </div>


                </div>

                </label>
            </div>

            <!-- Submit button -->


            <input type="hidden" name="oculto">
            <input type="hidden" name ="id2" value="<?php echo $persona->id_alumno; ?>" >
            <button type="submit" class="btn btn-primary btn-block mb-4"> EDITAR ALUMNO </button>
            </form>
           
        </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Section: Design Block -->


</body>

</html>