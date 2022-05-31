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
<img src="data:image/png;base64,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"
				style="width: 600px; height: 200px;">
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