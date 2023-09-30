<?php


// realizamos el llamado del archivo conexion base de datos
include "model/Conexion.php";

// realizamos la consulta a la base de datos
$sentencia=$conexion->query("SELECT * FROM alumno;");

// almacenamos el resultado de la consulta de la base de datos
$alumnos =$sentencia->fetchall(PDO::FETCH_OBJ);

//imprime todos los vlores que tenga  la variable




?>






<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>












<!--<div class="container">-->
  <!---<div class="row vh-100 justify-content-center align-items-center">--->
    <div class="col-auto bg-light p-2">
    
  
  



<section class="text-center">
  

<!-- imagen azul de arriba----->
<div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 190px;
        "></div>



<div class="card mx-4 mx-md-4 shadow-5-strong" style="
        margin-top: -150px;
        background: hsla(0, 0%, 100%, 0.7);
        backdrop-filter: blur(30px);
        ">


<div class="card-body py-3 px-md-5">



  
</div>


  



   <!--- <div class="container">---->

        <div class="container text-center">
            <h1 class=" mb-2 py-2">LISTADO DE ALUMNOS</h1>
            <br>
        </div>



        <table class="table table-bordered border-dark table-sm  ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Parcial</th>
                    <th scope="col">Final</th>
                    <th scope="col">Promedio</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>



            <?php

     foreach ($alumnos as $dato){

        ?>

            <tr>

                <td><?php echo $dato->id_alumno; ?></td>
                <td><?php echo $dato->ap_paterno; ?></td>
                <td><?php echo $dato->ap_materno; ?></td>
                <td><?php echo $dato->nombre; ?></td>
                <td><?php echo $dato->ex_parcial; ?></td>
                <td><?php echo $dato->ex_final; ?></td>
                <td><?php echo ($dato->ex_final + $dato->ex_parcial) / 2 ; ?></td>

                <td><a href="editar.php?id=<?php echo $dato->id_alumno; ?>" class="btn btn-warning " role="button" aria-pressed="true">Editar</a></td>
                <td><a href="eliminar.php" class="btn btn-primary " role="button" aria-pressed="true">Eliminar</a></td>




            </tr>
            <?php


        


     }

?>


            <!----insertar datos------>



            <form method="POST" action="insertar.php">
              
                <div class="row">
               <!------ <div class="col-md-6 mb-4">--->
              


                <table >


                <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 15px;
        "></div>

                <div class="card mx-4 mx-md-4 shadow-5-strong" style="
        margin-top: -50px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">

                    <h3 class="fw-bold mb-2 py-3">INGRESAR ALUMNOS</h3>
                    <br>


                    <div class="row d-flex justify-content-center">




                   <div class="col-lg-3 col-md-3 col-xs-12 ">
                   <div class="col-lg-12">
        
                        
                        <input class="form-control" id="periodo" type="text" name="txtPaterno"
                            placeholder="Apellido Paterno" autofocus required maxlength="15" size="6">
                        <br>
                        <input class="form-control" id="periodo" type="text" name="txtMaterno"
                            placeholder="Apellido Materno" autofocus required maxlength="15" size="6">
                        <br>
                        <input class="form-control" id="periodo" type="text" name="txtNombre" placeholder="Nombre"
                            autofocus required maxlength="15" size="6">
                        <br>
                        <input class="form-control" id="periodo" type="text" name="txtParcial"
                            placeholder="Nota Parcial" autofocus required maxlength="15" size="6">
                        <br>
                        <input class="form-control" id="periodo" type="text" name="txtFinal" placeholder="Nota Final"
                            autofocus required maxlength="15" size="6">
                        <br>




                       

                        <input type="hidden" name="oculto" value="1">

                        <button type="reset" class="btn btn-outline-primary">Restablecer</button>
                        
                        <button type="submit" class="btn btn-outline-danger">Ingrese Alumno</button>
                        <br>
                        <br>


                        


                        
                       </div>
                       </div>


                    </div>
    </>






    </table>
    </form>



    <!----insertar datos---->
















    </table>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</section>




</div>
</body>

</html>