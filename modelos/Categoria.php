<?php
    class Categoria extends Conectar{
        public function insert_categoria($nombre){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO categoria (id,nombre,fecha_crea,estado) VALUES(NULL,?,now(),'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_categoria($id,$nombre){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE categoria SET nombre = ? WHERE id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(2,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_categoria($id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE categoria SET estado = 0 WHERE id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function categoria(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM categoria WHERE estado=1";
            $sql=$conectar->prepare($sql);
           
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function categoria_id($id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM categoria WHERE estado=1 AND id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_plantilla($nombre){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO categoria (id,nombre,fecha_crea,estado) VALUES(NULL,?,now(),'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>