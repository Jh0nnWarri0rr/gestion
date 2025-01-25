<?php
class CompartidosModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getArchivosCompartidos($id_usuario)
    {
        $sql = "SELECT d.correo, a.nombre AS archivo, u.nombre FROM detalle_archivos d INNER JOIN archivos a ON d.id_archivo = a.id INNER JOIN usuarios u ON d.id_usuario = u.id WHERE d.id_usuario = $id_usuario ";
        return $this->selectAll($sql);
    }
  
}
