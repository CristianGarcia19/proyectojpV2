<?php 

class cursos extends Conectar{

    var $objetos;

    public function insert_curso($id_categoria, $curso, $descripcion, $fecha_ini, $fecha_fin, $profesor){

        $conectar=parent::Conexion();
        parent::set_names();
        $sql="INSERT INTO cursos (cur_id,id_categoria,curso,descripcion,fecha_ini,fecha_fin,profesor,fecha_crea,estado) 
        VALUES (null,?,?,?,?,?,?,now(),1)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id_categoria);
        $sql->bindValue(2,$curso);
        $sql->bindValue(3,$descripcion);
        $sql->bindValue(4,$fecha_ini);
        $sql->bindValue(5,$fecha_fin);
        $sql->bindValue(6,$profesor);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    } 

    public function update_curso($cur_id, $id_categoria, $curso, $descripcion, $fecha_ini, $fecha_fin, $profesor){

        $conectar=parent::Conexion();
        parent::set_names();
        $sql="UPDATE cursos SET id_categoria=?,curso=?,descripcion=?,fecha_ini=?,fecha_fin=?,profesor=? WHERE cur_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id_categoria);
        $sql->bindValue(2,$curso);
        $sql->bindValue(3,$descripcion);
        $sql->bindValue(4,$fecha_ini);
        $sql->bindValue(5,$fecha_fin);
        $sql->bindValue(6,$profesor);
        $sql->bindValue(7,$cur_id);
        
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    } 

    public function delete_curso($cur_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE cursos SET estado = 0 WHERE cur_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $cur_id);
        $stmt->execute();
        return $stmt->rowCount(); // Devuelve el número de filas afectadas
    }
    

    public function cursos(){

        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT
        cursos.cur_id,
        cursos.curso,
        cursos.fecha_ini,
        cursos.fecha_fin,
        categoria.nombre,
        instructor.nombrei,
        instructor.ape_paternoi
        FROM cursos INNER JOIN 
        categoria ON cursos.id_categoria = categoria.id INNER JOIN
            instructor ON cursos.profesor = instructor.inst_id
            WHERE cursos.estado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    } 

    public function curso_id($cur_id){

        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM cursos WHERE estado=1 AND cur_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cur_id);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }

    public function insert_planilla($id_categoria, $curso, $descripcion, $fecha_ini, $fecha_fin, $profesor){

        $conectar=parent::Conexion();
        parent::set_names();
        $sql="INSERT INTO cursos (cur_id,id_categoria,curso,descripcion,fecha_ini,fecha_fin,profesor,fecha_crea,estado) 
        VALUES (null,?,?,?,?,?,?,now(),1)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id_categoria);
        $sql->bindValue(2,$curso);
        $sql->bindValue(3,$descripcion);
        $sql->bindValue(4,$fecha_ini);
        $sql->bindValue(5,$fecha_fin);
        $sql->bindValue(6,$profesor);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    } 
}
?>