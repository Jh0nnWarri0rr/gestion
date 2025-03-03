<?php include_once 'Views/template/header.php'; ?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="mailbox-container">

                        <div class="modal fade" id="composeModal" tabindex="-1" aria-labelledby="composeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="composeModalLabel">Compose Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <label for="composeEmailTo" class="form-label">Email address</label>
                                            <input type="email" class="form-control m-b-sm" id="composeEmailTo" aria-describedby="emailHelp">
                                            <label for="composeTitle" class="form-label">Subject</label>
                                            <input type="text" class="form-control m-b-lg" id="composeTitle" aria-describedby="title">
                                            <div id="compose-editor"></div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-burger mailbox-compose-btn" data-bs-toggle="modal" data-bs-target="#composeModal"><i class="material-icons-outlined">create</i></button>
                        <div class="card">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mailbox-list col-xl-3">
                                        <ul class="list-unstyled">
                                            <?php foreach ($data['archivos'] as $archivo) { ?>
                                                <li class="mailbox-list-item">
                                                    <a href="#" id="<?php echo $archivo['id'] ?>">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                        </div>
                                                        <img src="<?php echo BASE_URL . 'Assets/images/avatars/avatar.png'; ?>" alt="">
                                                        <div class="mailbox-list-item-content">
                                                            <span class="mailbox-list-item-title">
                                                            <?php echo $archivo['nombre'] ?>
                                                            </span>
                                                            <p class="mailbox-list-item-text">
                                                            <?php echo $archivo['archivo'] ?></p>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="mailbox-open-content col-xl-9">
                                        <span class="mailbox-open-date">Jul 9, 2021, 9:07 AM</span>
                                        <h5 class="mailbox-open-title">
                                            Work together with better collaboration tools
                                        </h5>
                                        <div class="mailbox-open-author">
                                            <img src="<?php echo BASE_URL . 'Assets/images/avatars/avatar.png'; ?>" alt="">
                                            <div class="mailbox-open-author-info">
                                                <span class="mailbox-open-author-info-email d-block">dianna@gmail.com</span>
                                                <span class="mailbox-open-author-info-to">To <span class="badge badge-info align-self-center">devs</span></span>
                                            </div>
                                            <div class="mailbox-open-actions">
                                                <a href="#" class="btn btn-primary">Forward</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                        <div class="mailbox-open-content-email">
                                            <p>Vestibulum vitae maximus nisi. Cras vitae ligula metus. Nulla quis tortor at felis volutpat tempus ac vel quam. Sed eget nibh tortor. Phasellus sit amet pharetra justo, fringilla pellentesque nibh. Donec euismod metus nec neque hendrerit, sit amet ornare libero ultrices. Vestibulum non massa a massa ultrices consectetur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam gravida rhoncus enim, non eleifend purus malesuada eget. Nunc vitae pretium augue. Duis non nisi quis enim accumsan consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae bibendum turpis, eu feugiat enim. Aliquam quis mauris eget ipsum faucibus mollis ut tincidunt libero.
                                                <br><br>sed nulla tristique, imperdiet lorem eget, blandit ante. Nam nec rutrum elit, sit amet congue purus. Aliquam tempor mauris sed mi efficitur iaculis. Nulla in mauris tristique, sollicitudin nulla eget, tincidunt leo. Vestibulum facilisis malesuada orci, ac convallis dolor dictum sit amet. Vivamus efficitur lobortis nulla, sit amet laoreet massa condimentum suscipit. Donec lacinia vel est id luctus. Morbi ultrices fringilla facilisis. Donec congue erat lacinia purus maximus luctus. Etiam egestas mi sit amet turpis semper, nec feugiat urna auctor. Curabitur eu lacus non est porttitor lacinia. Suspendisse sit amet eros ut lacus viverra semper quis et ligula. Integer luctus massa quis consectetur rutrum. Donec vel lorem lacinia, posuere ligula non, lobortis nisl.
                                            </p>
                                            <div class="mailbox-open-content-email-attachments">
                                                <ul class="attachments-files-list list-unstyled">
                                                    <li class="attachments-files-list-item">
                                                        <span class="attachments-files-list-item-icon">
                                                            <i class="material-icons-outlined">insert_drive_file</i>
                                                        </span>
                                                        <span class="attachments-files-list-item-content">
                                                            <span class="attachments-files-list-item-title">Invoice.pdf</span>
                                                            <span class="attachments-files-list-item-size">14 MB</span>
                                                        </span>
                                                        <a href="#" class="attachments-files-list-item-download-btn">
                                                            <i class="material-icons-outlined">
                                                                download
                                                            </i>
                                                        </a>
                                                    </li>
                                                    <li class="attachments-files-list-item">
                                                        <span class="attachments-files-list-item-icon">
                                                            <i class="material-icons-outlined">lock</i>
                                                        </span>
                                                        <span class="attachments-files-list-item-content">
                                                            <span class="attachments-files-list-item-title">connect_download.zip</span>
                                                            <span class="attachments-files-list-item-size">95.4 MB</span>
                                                        </span>
                                                        <a href="#" class="attachments-files-list-item-download-btn">
                                                            <i class="material-icons-outlined">
                                                                download
                                                            </i>
                                                        </a>
                                                    </li>
                                                    <li class="attachments-files-list-item">
                                                        <span class="attachments-files-list-item-icon">
                                                            <i class="material-icons-outlined">image</i>
                                                        </span>
                                                        <span class="attachments-files-list-item-content">
                                                            <span class="attachments-files-list-item-title">welcome.jpeg</span>
                                                            <span class="attachments-files-list-item-size">46 MB</span>
                                                        </span>
                                                        <a href="#" class="attachments-files-list-item-download-btn">
                                                            <i class="material-icons-outlined">
                                                                download
                                                            </i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mailbox-open-content-reply">
                                            <div id="reply-editor"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'views/template/footer.php'; ?>