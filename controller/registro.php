<?php
    /*TODO: Llamando a cadena de Conexion */
    require_once("../config/conexion.php");
    /*TODO: Llamando a la clase */
    require_once("../modelos/Registro.php");
    /*TODO: Inicializando Clase */
    $registro = new Registro();
    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["usu_id"])){
                $registro->registro_usuario($_POST["nombre"],$_POST["ape_paterno"],$_POST["ape_materno"],$_POST["usu_correo"], $_POST["usu_pass"], $_POST["sexo"], $_POST["telefono"]);
            }else{
                $registro->update_usuario($_POST["usu_id"],$_POST["nombre"],$_POST["ape_paterno"],$_POST["ape_materno"],$_POST["usu_correo"], $_POST["usu_pass"], $_POST["sexo"], $_POST["telefono"]);
            }
            break;
        case "mostrar":
            $datos = $registro->usuario_id($_POST["usu_id"]);
            if(is_array($datos) == true and count($datos)<>0){
                foreach($datos as $row){
                    $output["usu_id"] = $row["usu_id"];
                    $output["nombre"] = $row["nombre"];
                    $output["ape_paterno"] = $row["ape_paterno"];
                    $output["ape_materno"] = $row["ape_materno"];
                    $output["usu_correo"] = $row["usu_correo"];
                    $output["usu_pass"] = $row["usu_pass"];
                    $output["sexo"] = $row["sexo"];          
                    $output["telefono"] = $row["telefono"];
                }
                echo json_encode($output);
            }
            break;
        case "eliminar":
            $registro->delete_usuario($_POST["usu_id"]);
            break;
        case "listar":
            $datos=$registro->usuario();
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["nombre"];
                $sub_array[] = $row["ape_paterno"];
                $sub_array[] = $row["ape_materno"];
                $sub_array[] = $row["usu_correo"];
                $sub_array[] = $row["usu_pass"];
                $sub_array[] = $row["sexo"];          
                $sub_array[] = $row["telefono"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["usu_id"].');" usu_id="'.$row["usu_id"].'" class="btn btn-success">Editar</button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["usu_id"].');" usu_id="'.$row["usu_id"].'" class="btn btn-danger">Borrar</button>';
                
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;
    }
?>