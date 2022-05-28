<!doctype html>
<html lang="en">

<head>
    <title>row de profesores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    <!-- consultamos los datos para meterlos en un objeto -->
    <?php
    $conexion = include_once "connect.php";
    $resultado = $conexion->query("SELECT acta_id, profe_id, profe_nombre, profe_apellido, profe_correo, creador, estuve FROM profesores NATURAL JOIN profesores_actas WHERE acta_id=1;");
    $profesores = $resultado->fetch_all(MYSQLI_ASSOC);
    ?>

    <div class="container my-5">
        <div class="shadow-4 rounded-3 overflow-hidden">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Status</th>
                        <th>Eliminar</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach ($profesores as $profe) { ?>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"> <?php echo $profe["profe_nombre"] . " " . $profe["profe_apellido"] ?> </p>
                                        <p class="text-muted mb-0"><?php echo $profe["profe_correo"] ?></p>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <?php
                                if ($profe["creador"] == 1) {
                                ?>
                                    <span class="badge rounded-pill bg-primary">creador</span>
                                <?php
                                } elseif ($profe["estuve"] == 1) { ?>
                                    <span class="badge rounded-pill bg-secondary">Asistio</span>
                                <?php
                                } else {
                                ?>
                                    <span class="badge rounded-pill bg-warning text-dark">No Asistio</span>
                                <?php
                                } ?>


                            </td>

                            <td>
                                <?php
                                if ($profe["creador"] != 1) {
                                ?>
                                    <button type="button" class="btn btn-outline-danger" onclick="window.location.href='CRUD/profesor_acta/profesoresDeActas_eliminar.php? ida=<?php echo $profe['acta_id'] ?>& idp=<?php echo $profe['profe_id'] ?>'">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                        Eliminar
                                    </button>
                                <?php
                                }  ?>

                            </td>
                            </td>

                            <td>
                                <?php
                                if ($profe["creador"] != 1) {
                                ?>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><button class="dropdown-item" type="button" onclick="window.location.href='CRUD/profesor_acta/profesoresActas_editar.php? idProfe=<?php echo $profe['profe_id'] ?>& idActa=<?php echo $profe['acta_id'] ?>& estuve=<?php echo 1 ?>'">Asistio</button></li>
                                            <li><button class="dropdown-item" type="button" onclick="window.location.href='CRUD/profesor_acta/profesoresActas_editar.php? idProfe=<?php echo $profe['profe_id'] ?>& idActa=<?php echo $profe['acta_id'] ?>& estuve=<?php echo 0 ?>'">No Asistio</button></li>
                                        </ul>
                                    </div>
                                <?php
                                }  ?>

                            </td>

                        </tr>


                    <?php } ?>




                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>