<?php
    require_once("../config/conexion.php");
    require_once("../modelos/instructor.php");

    $instructor = new instructor();

    switch($_GET["opc"]){

        case "guardaryeditar":
            if(empty($_POST["inst_id"])){
                $instructor->insert_instructor($_POST["nombrei"],$_POST["ape_paternoi"],$_POST["ape_maternoi"],$_POST["correo"], $_POST["sexo"], $_POST["telefono"]);
            }else{
                $instructor->update_instructor($_POST["inst_id"],$_POST["nombrei"],$_POST["ape_paternoi"],$_POST["ape_maternoi"],$_POST["correo"], $_POST["sexo"], $_POST["telefono"]);
            }
            break;

        case "mostrar":
            $datos = $instructor->instructor_id($_POST["inst_id"]);
            if(is_array($datos) == true and count($datos)<>0){
                foreach($datos as $row){
                    $output["inst_id"] = $row["inst_id"];
                    $output["nombrei"] = $row["nombrei"];
                    $output["ape_paternoi"] = $row["ape_paternoi"];
                    $output["ape_maternoi"] = $row["ape_maternoi"];
                    $output["correo"] = $row["correo"];
                    $output["sexo"] = $row["sexo"];          
                    $output["telefono"] = $row["telefono"];
                }
                echo json_encode($output);
            }
            break;

        case "eliminar":
            $instructor->delete_instructor($_POST["inst_id"]);
            break;
            
        case "listar":
            $datos=$instructor->instructor();
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["nombrei"];
                $sub_array[] = $row["ape_paternoi"];
                $sub_array[] = $row["ape_maternoi"];
                $sub_array[] = $row["correo"];
                $sub_array[] = $row["sexo"];          
                $sub_array[] = $row["telefono"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["inst_id"].');" inst_id="'.$row["inst_id"].'" class="btn btn-success">Editar</button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["inst_id"].');" inst_id="'.$row["inst_id"].'" class="btn btn-danger">Borrar</button>';
                
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

            case "guardar_desde_excel":
                $instructor->insert_plantilla($_POST["nombrei"],$_POST["ape_paternoi"],$_POST["ape_maternoi"],$_POST["correo"], $_POST["sexo"], $_POST["telefono"]);
                
        break;
    }
?>