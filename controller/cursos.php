<?php
    /*TODO: Llamando a cadena de Conexion */
    require_once("../config/conexion.php");
    /*TODO: Llamando a la clase */
    require_once("../modelos/cursos.php");
    /*TODO: Inicializando Clase */
    $cursos = new cursos();

    /*TODO: Opcion de solicitud de controller */
    switch($_GET["opc"]){

        case "guardaryeditar":
            if(empty($_POST["cur_id"])){
                $cursos->insert_curso($_POST["id_categoria"],$_POST["curso"],$_POST["descripcion"],$_POST["fecha_ini"], $_POST["fecha_fin"], $_POST["profesor"]);
            }else{
                $cursos->update_curso($_POST["cur_id"],$_POST["id_categoria"],$_POST["curso"],$_POST["descripcion"],$_POST["fecha_ini"], $_POST["fecha_fin"], $_POST["profesor"]);
            }
            break;
        case "mostrar":
            $datos = $cursos->curso_id($_POST["cur_id"]);
            if(is_array($datos) == true and count($datos)<>0){
                foreach($datos as $row){
                    $output["cur_id"] = $row["cur_id"];
                    $output["id_categoria"] = $row["id_categoria"];
                    $output["curso"] = $row["curso"];
                    $output["descripcion"] = $row["descripcion"];
                    $output["fecha_ini"] = $row["fecha_ini"];
                    $output["fecha_fin"] = $row["fecha_fin"];          
                    $output["profesor"] = $row["profesor"];
                }
                echo json_encode($output);
            }
            break;
       
        case "listar":
            $datos=$cursos->cursos();
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["nombre"];
                $sub_array[] = $row["curso"];
                $sub_array[] = $row["fecha_ini"]; 
                $sub_array[] = $row["fecha_fin"]; 
                $sub_array[] = $row["nombrei"];         
                $sub_array[] = '<button type="button" onClick="editar('.$row["cur_id"].');" cur_id="'.$row["cur_id"].'" class="btn btn-success">Editar</button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["cur_id"].');" cur_id="'.$row["cur_id"].'" class="btn btn-danger">Borrar</button>';
                $sub_array[] = '<button type="button" onClick="Imagen('.$row["cur_id"].');" cur_id="'.$row["cur_id"].'" class="btn btn-info">Imagen</button>';
                
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

        case "eliminar":
            $cursos->delete_curso($_POST["cur_id"]);
            break;

        case "guardar_desde_excel":
            $cursos->insert_planilla($_POST["id_categoria"],$_POST["curso"],$_POST["descripcion"],$_POST["fecha_ini"], $_POST["fecha_fin"], $_POST["profesor"]);      
        break;

    }
?>