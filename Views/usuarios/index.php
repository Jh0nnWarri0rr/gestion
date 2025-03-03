<?php include_once 'views/template/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1><?php echo $data['title']; ?></h1>
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-outline-primary mb-3" type="button" id="btnNuevo">Nuevo usuario</button>
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-hover display nowrap" style="width:100%" id="tblUsuarios">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Dpto. | Puesto</th>
                                    <th>Telefono</th>
                                    <th>Fecha registro</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalRegistro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Title</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="formulario" autocomplete="off">
                <input type="hidden" id="id_usuario" name="id_usuario">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombre">Ingresa el nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        list
                                    </i></span>
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre." required>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="apellido">Ingresa los apellidos:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        list
                                    </i></span>
                                <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellidos." required>
                            </div>
                        </div>


                        <div class="col-md-7">
                            <label for="correo">Ingresa un correo:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        email
                                    </i></span>
                                <input class="form-control" type="email" id="correo" name="correo" placeholder="Ejemplo@trareysa.com" required>
                            </div>
                        </div>


                        <div class="col-md-5">
                            <label for="telefono">Ingresa telefono:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        call
                                    </i></span>
                                <input class="form-control" type="number" id="telefono" name="telefono" placeholder="89*********" required>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <label for="dpto">Departamento y puesto:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        place
                                    </i></span>
                                <input class="form-control" type="text" id="dpto" name="dpto" placeholder="Ej: Sistemas, jefe de sistemas" required>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="clave">Ingresa una contraseña:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        lock
                                    </i></span>
                                <input class="form-control" type="password" id="clave" name="clave" placeholder="**********" required>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="rol">Rol de usuario:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        admin_panel_settings
                                    </i></span>
                                <select name="rol" id="rol" class="form-control">
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuario</option>
                                    <option value="3">Operador</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-primary" type="submit"><i class="material-icons"> save </i> Guardar </button>
                    <button class="btn btn-outline-danger" type="button" data-bs-dismiss="modal"><i class="material-icons"> cancel </i> Cancelar </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once 'views/template/footer.php'; ?>