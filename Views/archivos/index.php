<?php include_once 'Views/template/header.php'; ?>
<div class="app-content">
    <?php include_once 'Views/components/menus.php'; ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <h1>Gestor de documentos</h1>
                        </div>
                        <div class="page-description-actions">
                            <a href="#" class="btn btn-primary" id="btnUpload"><i class="material-icons">add</i>Cargar nuevo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data['carpetas'] as $carpeta) { ?>
                    <div class="col-xl-4">
                        <div class="card file-manager-group">
                            <div class="card-body d-flex align-items-center">
                                <i class="material-icons" style="color: #<?php echo $carpeta['color']; ?>">folder</i>
                                <div class="file-manager-group-info flex-fill">
                                    <a href="#" id="<?php echo $carpeta['id']; ?>" class="file-manager-group-title carpetas"><?php echo $carpeta['nombre']; ?></a>
                                    <span class="file-manager-group-about"><?php echo $carpeta['fecha']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="section-description">
                <h1>Todos los archivos</h1>
            </div>
            <div class="row">
                <?php foreach ($data['archivos'] as $archivo) { ?>
                    <div class="col-md-6">
                        <div class="card file-manager-recent-item">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="material-icons-outlined text-danger align-middle m-r-sm">description</i>
                                    <a href="#" class="file-manager-recent-item-title flex-fill"><?php echo $archivo['nombre']; ?></a>
                                    <span class="p-h-sm"><?php echo $archivo['tamano']; ?> KB </span>
                                    <span class="p-h-sm text-muted"></span>
                                    <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-<?php echo $archivo['id']; ?>" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-<?php echo $archivo['id']; ?>">
                                        <li><a class="dropdown-item compartir" href="#" id="<?php echo $archivo['id']; ?>">Compartir</a></li>
                                        <li><a class="dropdown-item" href="#">Descargar</a></li>
                                        <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'views/components/modal.php';
include_once 'views/template/footer.php';
?>