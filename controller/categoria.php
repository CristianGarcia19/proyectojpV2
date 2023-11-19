<?php
    require_once("../config/conexion.php");
    require_once("../modelos/Categoria.php");

    $categoria = new Categoria();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["id"])){
                $categoria->insert_categoria($_POST["nombre"]);
            }else{
                $categoria->update_categoria($_POST["id"],$_POST["nombre"]);
            }
            break;

        case "mostrar":
            $datos = $categoria->categoria_id($_POST["id"]);
            if(is_array($datos) == true and count($datos)<>0){
                foreach($datos as $row){
                    $output["id"] = $row["id"];
                    $output["nombre"] = $row["nombre"];
                }
                echo json_encode($output);
            }
            break;

        case "eliminar":
            $categoria->delete_categoria($_POST["id"]);
            break;
            
        case "listar":
            $datos=$categoria->categoria();
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["nombre"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["id"].');" id="'.$row["id"].'" class="btn btn-success">Editar</button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["id"].');" id="'.$row["id"].'" class="btn btn-danger">Borrar</button>';
                
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
                $categoria->insert_plantilla($_POST["nombre"]);   
            break;
    }
?>