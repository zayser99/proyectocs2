<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Actas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div id="imp">
        <?php

        $acta_id = $_GET['id'];

        $mysqli = include_once "../../connect.php";
        $resultado2 = $mysqli->query("SELECT * FROM actas WHERE acta_id = " . $acta_id);
        $actas2 = $resultado2->fetch_all(MYSQLI_ASSOC);

        foreach ($actas2 as $acta) {

            $titulo = $acta["acta_titulo"];
            $lugar = $acta["acta_lugar"];
            $fecha = $acta["acta_fecha"];
        }
        ?>

        <center>

            <h1>
                <font color="black"> <?php echo $titulo ?> </font>
            </h1>
            <h3>
                <font color="black">Lugar: <?php echo $lugar ?></font>
            </h3>

            <h3>
                <font color="black">Fecha de minuta: <?php echo $fecha ?></font>
            </h3>
            <br><br>
            <h3>
                <font color="black">PARTICIPANTES</font>
            </h3>
        </center>
        <?php
        $resultado3 = $mysqli->query("SELECT profe_id, profe_nombre, profe_apellido, profe_correo, creador, estuve FROM profesores NATURAL JOIN profesores_actas WHERE acta_id=" . $acta_id);
        $profes = $resultado3->fetch_all(MYSQLI_ASSOC);
        ?>
        <div class="container my-5">
            <div class="shadow-4 rounded-3 overflow-hidden">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Status</th>
                            <th>Firma</th>

                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        foreach ($profes as $profe) { ?>

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
                                </td>
                            </tr>


                        <?php } ?>




                    </tbody>
                </table>
            </div>
        </div>
        <center>
            <h3>
                <font color="black">ASUNTOS</font>
            </h3>
        </center>
        <?php
        $resultado = $mysqli->query("SELECT asunto_id, asunto_detalle FROM asuntos WHERE acta_id=" . $acta_id);
        $asuntos = $resultado->fetch_all(MYSQLI_ASSOC);
        ?>

        <div class="container my-5">
            <div class="shadow-4 rounded-3 overflow-hidden">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Detalles</th>

                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        foreach ($asuntos as $asunto) { ?>

                            <tr>

                                <td>
                                    <p class="text-muted mb-0"><?php echo $asunto["asunto_detalle"] ?></p>
                                </td>

                            </tr>


                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <center>
            <h3>
                <font color="black">ACUERDOS</font>
            </h3>
        </center>
        <?php

        $resultado = $mysqli->query("SELECT acuerdo_id, acuerdo_detalle FROM acuerdos WHERE acta_id=" . $acta_id);
        $acuerdos = $resultado->fetch_all(MYSQLI_ASSOC);
        ?>

        <div class="container my-5">
            <div class="shadow-4 rounded-3 overflow-hidden">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        foreach ($acuerdos as $acuerdo) { ?>

                            <tr>

                                <td>
                                    <p class="text-muted mb-0"><?php echo $acuerdo["acuerdo_detalle"] ?></p>
                                </td>

                            </tr>


                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <center>
        <div class="boton">
            <input onclick="javascript:imprim(imp)" class="btn btn-warning" type="submit" value="IMPRIMIR" />
        </div>
    </center>
    <br>
    <center>
        <div class="boton">
            <form action="../../row_actas.php" class="linea">
                <input class="btn btn-success" type="submit" value="REGRESAR" />
            </form>
        </div>
    </center><br><br>




    <script>
        function imprim(imp) {
            var printContents = document.getElementById('imp').innerHTML;
            w = window.open();
            w.document.write(printContents);
            w.document.close(); // necessary for IE >= 10
            w.focus(); // necessary for IE >= 10
            w.print();
            w.close();
            return true;
        }
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>