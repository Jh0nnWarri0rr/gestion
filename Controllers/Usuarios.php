<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->checkAuth(); // Verifica autenticación en cada acción
    }

    private function checkAuth()
    {
        if (!isset($_SESSION['id'])) {
            // Si no está autenticado, redirige al login
            header("Location: /gestion/index.php");
            exit();
        }
    }

    

    public function index()
    {
        $data['title'] = 'Gestión de usuarios';
        $data['script'] = 'usuarios.js';
        $this->views->getView('usuarios', 'index', $data);
    }
    public function listar()
    {

        $data = $this->model->getUsuarios();
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['id'] == 1) {
                $data[$i]['acciones'] = 'SuperAdmin';
            } else {
                $data[$i]['acciones'] = '<div>
                <a href="#" class="btn btn-primary btn-sm" onclick="editar(' . $data[$i]['id'] . ')">
                <span class="material-icons">edit</span>
                </a>
                <a href="#" class="btn btn-danger btn-sm" onclick="eliminar(' . $data[$i]['id'] . ')">
                <span class="material-icons">delete</span>
                </a>
                </div>';
            }

            $data[$i]['nombres'] = $data[$i]['nombre'] . ' ' . $data[$i]['apellido'];
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function guardar()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $dpto = $_POST['dpto'];
        $clave = $_POST['clave'];
        $rol = $_POST['rol'];
        $id_usuario = $_POST['id_usuario'];
        if (empty($nombre) || empty($apellido) || empty($correo) || empty($telefono) || empty($dpto) || empty($dpto) || empty($clave) || empty($rol)) {
            $res = array('tipo' => 'warning', 'mensaje' => 'Todos los campos son necesarios; SERVIDOR');
        } else {

            if ($id_usuario == '') {
                //////COMPROBAR QUE NO SE REPITAN DATOS//////////
                $verificarCorreo = $this->model->getVerificar('correo', $correo, 0);
                if (empty($verificarCorreo)) {
                    ////////////////////////////
                    $verificarTel = $this->model->getVerificar('telefono', $telefono, 0);
                    if (empty($verificarTel)) {
                        $hash = password_hash($clave, PASSWORD_DEFAULT);
                        $data = $this->model->registrar($nombre, $apellido, $correo, $telefono, $dpto, $hash, $rol);
                        if ($data > 0) {
                            $res = array('tipo' => 'success', 'mensaje' => 'Correctamente registrado');
                        } else {
                            $res = array('tipo' => 'warning', 'mensaje' => 'Problema al registrar, intenta de nuevo');
                        }
                    } else {
                        $res = array('tipo' => 'warning', 'mensaje' => 'El número ya existe.');
                    }
                } else {
                    $res = array('tipo' => 'warning', 'mensaje' => 'El correo ya existe.');
                }
            } else {
                //////COMPROBAR QUE NO SE REPITAN DATOS//////////
                $verificarCorreo = $this->model->getVerificar('correo', $correo, $id_usuario);
                if (empty($verificarCorreo)) {
                    ////////////////////////////
                    $verificarTel = $this->model->getVerificar('telefono', $telefono, $id_usuario);
                    if (empty($verificarTel)) {
                        $hash = password_hash($clave, PASSWORD_DEFAULT);
                        $data = $this->model->modificar($nombre, $apellido, $correo, $telefono, $dpto, $rol, $id_usuario);
                        if ($data == 1) {
                            $res = array('tipo' => 'success', 'mensaje' => 'Usuario modificado correctamente');
                        } else {
                            $res = array('tipo' => 'warning', 'mensaje' => 'Problema al modificar, intenta de nuevo');
                        }
                    } else {
                        $res = array('tipo' => 'warning', 'mensaje' => 'El número ya existe.');
                    }
                } else {
                    $res = array('tipo' => 'warning', 'mensaje' => 'El telefono ya existe.');
                }
            }
        }
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function delete($id)
    {

        $data = $this->model->delete($id);
        if ($data == 1) {
            $res = array('tipo' => 'success', 'mensaje' => 'Usuario dado de baja correctamente.');
        } else {
            $res = array('tipo' => 'warning', 'mensaje' => 'Ocurrió un error al eliminar.');
        }
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar($id)
    {
        $data = $this->model->getUsuario($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
}
