<?php
    class Registro extends Conectar{
        public function registro_usuario($nombre, $ape_paterno, $ape_materno, $usu_correo, $usu_pass, $sexo, $telefono){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO usuarios (usu_id, nombre, ape_paterno, ape_materno, usu_correo, usu_pass, sexo, telefono, rol_id, fecha_crea, estado) VALUES (null,?,?,?,?,?,?,?,1,now(),1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(2,$ape_paterno);
            $sql->bindValue(3,$ape_materno);
            $sql->bindValue(4,$usu_correo);
            $sql->bindValue(5,$usu_pass);
            $sql->bindValue(6,$sexo);
            $sql->bindValue(7,$telefono);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        
        public function update_usuario($usu_id, $nombre, $ape_paterno, $ape_materno, $usu_correo, $usu_pass, $sexo, $telefono, $rol_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE usuarios SET nombre=?, ape_paterno=?, ape_materno=?, usu_correo=?, usu_pass=?, sexo=?, telefono=?, rol_id=? WHERE usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(2,$ape_paterno);
            $sql->bindValue(3,$ape_materno);
            $sql->bindValue(4,$usu_correo);
            $sql->bindValue(5,$usu_pass);
            $sql->bindValue(6,$sexo);
            $sql->bindValue(7,$telefono);
            $sql->bindValue(8,$rol_id);
            $sql->bindValue(9,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_usuario($usu_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE usuarios SET estado=0 WHERE usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function usuario(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM usuarios WHERE estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function usuario_id($usu_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM usuarios WHERE estado=1 AND usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>