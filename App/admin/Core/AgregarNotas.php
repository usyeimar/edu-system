<?php

        if (isset($_POST['btnIngresar'])) {
            $idNota = $_POST['idNota'];
            $TitleNota = $_POST['TitleNota'];
            $DescripcionNota = $_POST['DescripcionNota'];
            $PrioridadNota = $_POST['listaprioridad'];
            $conexion->query("INSERT INTO tbnotas (id, nombre, descripcion, estado) VALUES('$idNota','$TitleNota','$DescripcionNota','$prioridadNota')");
        }

        ?>