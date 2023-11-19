<?php 
//include ("../config/conexion.php");   

    class Usuario extends Conectar{
        /*TODO: Funcion para login de acceso del usuario */
        public function login(){
            //parent llama las funciones 
            $Conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];
                if(empty($correo) and empty($pass)){
                    /*TODO: En caso esten vacios correo y contraseña, devolver al index con mensaje = 2 */
                    header("Location:".Conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE usu_correo=? and usu_pass=? and estado=1";
                    $stmt=$Conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["ape_paterno"]=$resultado["ape_paterno"];
                        $_SESSION["ape_materno"]=$resultado["ape_materno"];
                        $_SESSION["usu_correo"]=$resultado["usu_correo"];
                        $_SESSION["sexo"]=$resultado["sexo"];
                        $_SESSION["telefono"]=$resultado["telefono"];
                        $_SESSION["rol_id"]=$resultado["rol_id"];
                        $_SESSION["fecha_crea"]=$resultado["fecha_crea"];
                        $_SESSION["estado"]=$resultado["estado"];
                        /*TODO: Si todo esta correcto indexar en home */
                        header("Location:".Conectar::ruta()."views/inicio.php");
                        exit();
                    }else{
                        /*TODO: En caso no coincidan el usuario o la contraseña */
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
        public function cursos_x_usuarios($usu_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT
            curso_usuario.curusu_id,
            cursos.cur_id,
            cursos.curso,
            cursos.descripcion,
            cursos.fecha_ini,
            cursos.fecha_fin,
            usuarios.usu_id,
            usuarios.nombre,
            usuarios.ape_paterno,
            usuarios.ape_materno,
            instructor.inst_id,
            instructor.nombrei,
            instructor.ape_paternoi,
            instructor.ape_maternoi
            FROM curso_usuario INNER JOIN
            cursos ON curso_usuario.id_curso = cursos.cur_id INNER JOIN
            usuarios ON curso_usuario.id_usuario = usuarios.usu_id INNER JOIN
            instructor ON cursos.profesor = instructor.inst_id
            WHERE
            curso_usuario.id_usuario = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
    }

    public function usuarios_x_id($usu_id){ 
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM usuarios WHERE estado=1 AND usu_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$usu_id);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }  
    
    public function update_usuarios_perfil($usu_id,$nombre,$ape_paterno,$ape_materno,$usu_pass,$sexo,$telefono){
        $conectar=parent::conexion();
        parent::set_names();
        $sql=" UPDATE usuarios 
        SET  
        nombre=?,
        ape_paterno=?,
        ape_materno=?,
        usu_pass=?,
        sexo=?,
        telefono=?
        WHERE usu_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindvalue(1,$nombre);
        $sql->bindvalue(2,$ape_paterno);
        $sql->bindvalue(3,$ape_materno);
        $sql->bindvalue(4,$usu_pass);
        $sql->bindvalue(5,$sexo);
        $sql->bindvalue(6,$telefono);
        $sql->bindvalue(7,$usu_id);
        $sql->execute();
        return $resultado=$sql->fetchALL();
    }

    public function total_curso_x_usuario($usu_id){ 
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) As total FROM curso_usuario WHERE id_usuario=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$usu_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    
    }

    public function total_x_usuario($usu_id){ 
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) As total_usuario FROM usuarios WHERE estado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function total_x_instructor($usu_id){ 
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) As total_instructor FROM instructor WHERE estado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function estudiantesPorCurso() {
        $conectar = parent::Conexion();
        parent::set_names();
        
        $sql = "SELECT cursos.curso AS curso, COUNT(curso_usuario.id_usuario) AS cantidad_estudiantes 
                FROM cursos
                LEFT JOIN curso_usuario ON cursos.cur_id = curso_usuario.id_curso
                WHERE curso_usuario.estado = 1
                GROUP BY cursos.curso";
        
        $sql = $conectar->prepare($sql);
        $sql->execute();
        
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtener_sexo() {
        $conectar = parent::Conexion();
        parent::set_names();
    
        $sql_hombres = "SELECT COUNT(*) AS hombres FROM usuarios WHERE estado = 1 AND sexo = 'M'";
        $sql_mujeres = "SELECT COUNT(*) AS mujeres FROM usuarios WHERE estado = 1 AND sexo = 'F'";
    
        $stmt_hombres = $conectar->prepare($sql_hombres);
        $stmt_mujeres = $conectar->prepare($sql_mujeres);
    
        $stmt_hombres->execute();
        $stmt_mujeres->execute();
    
        $resultado_hombres = $stmt_hombres->fetch(PDO::FETCH_ASSOC);
        $resultado_mujeres = $stmt_mujeres->fetch(PDO::FETCH_ASSOC);
    
        $output = array(
            "hombres" => $resultado_hombres['hombres'],
            "mujeres" => $resultado_mujeres['mujeres']
        );
    
        return $output;
    }

}

    class Usuarios extends Conectar{

        public function insert_usuario($nombre, $ape_paterno, $ape_materno, $usu_correo, $sexo, $telefono){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO usuarios (usu_id, nombre, ape_paterno, ape_materno, usu_correo, usu_pass, sexo, telefono, rol_id, fecha_crea, estado) VALUES (null,?,?,?,?,'123456',?,?,1,now(),1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(2,$ape_paterno);
            $sql->bindValue(3,$ape_materno);
            $sql->bindValue(4,$usu_correo);
            $sql->bindValue(5,$sexo);
            $sql->bindValue(6,$telefono);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_usuario($usu_id, $nombre, $ape_paterno, $ape_materno, $usu_correo, $usu_pass, $sexo, $telefono){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE usuarios SET nombre=?, ape_paterno=?, ape_materno=?, usu_correo=?, usu_pass=?, sexo=?, telefono=?, rol_id=1 WHERE usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(2,$ape_paterno);
            $sql->bindValue(3,$ape_materno);
            $sql->bindValue(4,$usu_correo);
            $sql->bindValue(5,$usu_pass);
            $sql->bindValue(6,$sexo);
            $sql->bindValue(7,$telefono);
            $sql->bindValue(8,$usu_id);
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

    public function curso_x_id_detalle($curusu_id){ 
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT
         curso_usuario.curusu_id,
         cursos.cur_id,
         cursos.curso,
         cursos.descripcion,
         cursos.fecha_ini,
         cursos.fecha_fin,
         usuarios.usu_id,
         usuarios.nombre,
         usuarios.ape_paterno,
         usuarios.ape_materno,
         instructor.inst_id,
         instructor.nombrei,
         instructor.ape_paternoi,
         instructor.ape_maternoi
         FROM curso_usuario INNER JOIN
         cursos ON curso_usuario.id_curso = cursos.cur_id INNER JOIN 
         usuarios ON curso_usuario.id_usuario = usuarios.usu_id INNER JOIN 
         instructor ON cursos.profesor = instructor.inst_id
         WHERE
         curso_usuario.curusu_id = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $curusu_id); 
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function insert_plantilla($nombre,$ape_paterno,$ape_materno,$usu_correo,$sexo,$telefono){
        $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO usuarios (usu_id, nombre, ape_paterno, ape_materno, usu_correo, usu_pass, sexo, telefono, rol_id, fecha_crea, estado) 
            VALUES (null,?,?,?,?,'123456',?,?,1,now(),1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(2,$ape_paterno);
            $sql->bindValue(3,$ape_materno);
            $sql->bindValue(4,$usu_correo);
            $sql->bindValue(5,$sexo);
            $sql->bindValue(6,$telefono);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
 }
?>