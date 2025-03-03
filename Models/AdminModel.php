<?php
class AdminModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }


    public function getCarpetas($id_usuario)
    {
        $sql = "SELECT * FROM carpetas WHERE id_usuario = $id_usuario AND estado = 1 ORDER BY id DESC LIMIT 3";
        return $this->selectAll($sql);
    }

    public function getVerificar($item, $nombre, $id_usuario, $id)
    {
        if ($id > 0) {
            $sql = "SELECT id FROM carpetas WHERE $item = '$nombre' AND id_usuario = $id_usuario AND id != $id AND estado = 1";
        } else {
            $sql = "SELECT id FROM carpetas WHERE $item = '$nombre' AND id_usuario = $id_usuario AND estado = 1";
        }
        return $this->select($sql);
    }
    
    public function crearcarpeta($nombre, $id_usuario)
    {

     $sql = "INSERT INTO carpetas (nombre, id_usuario) VALUES (?, ?)";
     $datos = array($nombre, $id_usuario);
     return $this->insertar($sql, $datos);
    }

    public function delete($id)
    {
        $sql = "UPDATE carpetas SET estado = ?  WHERE id = ?";
        $datos = array(0, $id);
        return $this->save($sql, $datos);
    }

    public function getUsuario($id)
    {
        $sql = "SELECT id, nombre, apellido, correo, telefono, dpto, perfil, clave, fecha, rol FROM usuarios WHERE id = $id";
        return $this->select($sql);
    }

    public function modificar($nombre, $apellido, $correo, $telefono, $dpto, $rol, $id)
    {

     $sql = "UPDATE usuarios SET nombre=?, apellido=?, correo=?, telefono=?, dpto=?, roL=? WHERE id=?";
     $datos = array($nombre, $apellido, $correo, $telefono, $dpto, $rol, $id);
     return $this->save($sql, $datos);
    }

    ////Subir archivo 

    public function subirArchivo($name, $tipo, $tamanoMB, $id_carpeta )
    {

     $sql = "INSERT INTO archivos (nombre, tipo, tamano, id_carpeta) VALUES (?, ?, ?, ?)";
     $datos = array($name, $tipo, $tamanoMB, $id_carpeta);
     return $this->insertar($sql, $datos);
    }


    public function getArchivosRecientes($id_usuario)
    {
        $sql = "SELECT a.* FROM archivos a INNER JOIN carpetas c ON a.id_carpeta = c.id WHERE c.id_usuario = $id_usuario ORDER BY a.id DESC LIMIT 5";

        return $this->selectAll($sql);
    }
    public function getArchivos($id_carpeta, $id_usuario)
    {
        $sql = "SELECT a.* FROM archivos a INNER JOIN carpetas c ON a.id_carpeta = c.id WHERE a.id_carpeta = $id_carpeta AND c.id_usuario = $id_usuario ORDER BY a.id DESC";
        return $this->selectAll($sql);
    }
  
}
