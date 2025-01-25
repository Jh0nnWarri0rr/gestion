<div id="modalFile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Subir nuevo</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="div-grid">
                    <button type="button" id="btnNuevaCarpeta" class="btn btn-outline-primary m-r-xs"><i class="material-icons">folder</i>Nueva carpeta</button>
                    <hr>

                    <input type="file" id="file" class="d-none" name="file">
                    <button type="button" id="btnSubirArchivo" class="btn btn-outline-success m-r-xs"><i class="material-icons">folder_zip</i>Nuevo archivo</button>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalCarpeta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-carpeta">Crear carpeta</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="frmCarpeta" autocomplete="off">
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-text"><i class="material-icons">folder</i></span>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit"> Crear </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modalCompartir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-compartir">Opciones:</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_carpeta">
                <div class="div-grid">
                    <hr>
                    <button type="button" id="btnDescarga" class="btn btn-outline-danger m-r-xs"><i class="material-icons">file_open</i>Nueva descarga</button>
                    <hr>

                    <button type="button" id="btnCaliter" class="btn btn-outline-secondary m-r-xs"><i class="material-icons">file_open</i> Mantenimiento </button>

                    <hr>
                    <button type="button" id="btnSubir" class="btn btn-outline-primary m-r-xs"><i class="material-icons">folder_zip</i>Nuevo archivo</button>
                    <hr>

                    <a href="#" id="btnVer" class="btn btn-outline-warning m-r-xs"><i class="material-icons">visibility</i>Ver</a>

                    <hr>
                    <button type="button" id="btnCompartir" class="btn btn-outline-success m-r-xs"><i class="material-icons">share</i>Compartir</button>
                    <hr>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="modalDescarga" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="modalDescargaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDescargaLabel">Acta de Balance de la Descarga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="formDescarga">
                    <hr>
                    <b> DATOS DEL OPERADOR:</b>
                    <hr>
                    <div class="mb-3">
                        <label for="hora_llegada" class="form-label">Hora de Llegada: </label>
                        <input autofocus type="time" class="form-control" id="hora_llegada">
                    </div>

                    <div class="mb-3">
                        <label for="carta_porte" class="form-label">Carta Porte: </label>
                        <input maxlength="13" type="text" class="form-control" class="documentField" id="carta_porte" required>
                        <p></p>
                        <button class="btn btn-primary" type="button" onclick="buscarGuia()">Buscar</button>
                    </div>

                    <div class="mb-3">
                        <label for="nombre_operador" class="form-label">Nombre del Operador: </label>
                        <input type="text" class="form-control" id="nombre_operador" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="no_unidad" class="form-label">No. Unidad / Nombre del tracto: </label>
                        <input type="text" class="form-control" class="documentField" id="no_unidad" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="placas" class="form-label">Placas del tracto: </label>
                        <input type="text" class="form-control" class="documentField" id="placas" readonly>
                    </div>
                    <hr>
                    <b> DATOS DE LA ESTACIÓN:</b>
                    <hr>
                    <div class="mb-3">
                        <label for="foto_evidencia1" class="form-label">Por favor, tomar foto a la identificación de quien recibe: </label>
                        <input required type="file" class="form-control" id="foto_evidencia1" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="cliente_nombre" class="form-label">Nombre del cliente: </label>
                        <input type="text" class="form-control" class="documentField" id="cliente_nombre" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="razon_social" class="form-label">Razón Social: </label>
                        <input type="text" class="form-control" class="documentField" id="razon_social" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">Ubicación: </label>
                        <input type="text" class="form-control" class="documentField" id="ubicacion" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="codigoPostal" class="form-label">Codigo postal: </label>
                        <input type="text" class="form-control" class="documentField" id="codigoPostal" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="colonia" class="form-label">Colonia: </label>
                        <input type="text" class="form-control" class="documentField" id="colonia" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="ciudad" class="form-label">Ciudad: </label>
                        <input type="text" class="form-control" class="documentField" id="ciudad" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="municipio" class="form-label">Municipio: </label>
                        <input type="text" class="form-control" class="documentField" id="municipio" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="no_factura" class="form-label">No. Factura: </label readonly>
                        <input type="text" class="form-control" class="documentField" id="no_factura" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="no_estacion" class="form-label">No. Estación: </label>
                        <input type="text" class="form-control" class="documentField" id="no_estacion" required>
                    </div>

                    <hr>
                    <b> DATOS DEL PRODUCTO:</b>
                    <hr>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Selecciona el producto a descargar:</label>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="producto_descargar" class="form-check-input" id="producto_descargar-premium" value="2">
                                    <label for="producto_descargar-premium" class="form-check-label">Premium</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="producto_descargar" class="form-check-input" id="producto_descargar-regular" value="3">
                                    <label for="producto_descargar-regular" class="form-check-label">Regular</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="producto_descargar" class="form-check-input" id="producto_descargar-diesel" value="4">
                                    <label for="producto_descargar-diesel" class="form-check-label">Diesel</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="producto_descargar" class="form-check-input" id="producto_descargar-otro" value="5">
                                    <label for="producto_descargar-otro" class="form-check-label">Otro</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="" class="form-label">¿Hubo venta durante la descarga?</label>
                        <div>
                            <label>
                                <input type="radio" name="suspende" value="1" id="suspende_si"> Sí
                            </label>
                            <label>
                                <input type="radio" name="suspende" value="0" id="suspende_no" checked> No
                            </label>
                        </div>
                    </div>
                    <div id="campos_descarga" class="mb-3" style="display: none;">
                        <label for="venta_durante_descarga" class="form-label">¿Cuantos litros se descargaron?:</label>
                        <input type="number" class="form-control" id="venta_durante_descarga">
                    </div>

                    <div class="mb-3">
                        <label for="hora_inicio" class="form-label">Hora de inicio:</label>
                        <input required type="time" class="form-control" id="hora_inicio">
                    </div>

                    <div class="mb-3">
                        <label for="hora_termino" class="form-label">Hora de termino:</label>
                        <input required type="time" class="form-control" id="hora_termino">
                    </div>


                    <div class="mb-3">
                        <label for="tiempo_de_descarga" class="form-label">Tiempo total de descarga:</label>
                        <input required type="text" class="form-control" id="tiempo_de_descarga">
                    </div>
                    <hr>
                    <b>MEDICIÓN DEL TANQUE / CALCULO DE BALANCE INICIAL:</b>
                    <hr>
                    <div class="mb-3">
                        <label for="foto_evidencia2" class="form-label">Favor de tomarle foto a la tirilla inicial (anexar)</label>
                        <input required type="file" class="form-control" id="foto_evidencia2" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label for="volumen_inicial" class="form-label">Volumen inicial en la tirilla Lts:</label>
                        <input required type="number" class="form-control" id="volumen_inicial">
                    </div>

                    <div class="mb-3">
                        <label for="temperatura_inicial" class="form-label">Temperatura inicial en la tirilla °C:</label>
                        <input required type="number" class="form-control" id="temperatura_inicial">
                    </div>

                    <hr>
                    <b>MEDICIÓN DEL TANQUE / CALCULO DE BALANCE FINAL:</b>
                    <hr>

                    <div class="mb-3">
                        <label for="foto_evidencia3" class="form-label">Favor de tomarle foto a la tirilla final (anexar)</label>
                        <input required type="file" class="form-control" id="foto_evidencia3" accept="image/*">
                    </div>


                    <div class="mb-3">
                        <label for="volumen_final" class="form-label">Volumen final en la tirilla Lts:</label>
                        <input required type="number" class="form-control" id="volumen_final">
                    </div>

                    <div class="mb-3">
                        <label for="temperatura_final" class="form-label">Temperatura final de la tirilla °C:</label>
                        <input required type="number" class="form-control" id="temperatura_final">
                    </div>

                    <div class="mb-3">
                        <label for="densidad" class="form-label">Densidad:</label>
                        <input required type="number" class="form-control" id="densidad">
                    </div>

                    <div class="mb-3" hidden>
                        <label for="exponencial_tabla" class="form-label">Exponencial De Tabla de PEMEX:</label>
                        <input type="number" class="form-control" id="exponencial_tabla" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="volumen_descargado_lts" class="form-label">Volumen bruto descargado Lts ( final - inicial ):</label>
                        <input required type="number" class="form-control" id="volumen_descargado_lts" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="volumen_factura_lts" class="form-label">Volumen a 20° de la factura:</label>
                        <input required type="number" class="form-control" id="volumen_factura_lts">
                    </div>

                    <div class="mb-3" hidden>
                        <label for="temperatura_real" class="form-label">Temperatura real (PEMEX):</label>
                        <input type="number" class="form-control" id="temperatura_real" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="Descargado_Corregido" class="form-label"> Volumen desacargado corregido a 20 C:</label>
                        <input required type="number" class="form-control" id="Descargado_Corregido" readonly>

                    </div>

                    <div class="mb-3">
                        <label for="sobrantes_faltantes" class="form-label"> + Sobrantes / - faltantes (Lts) con volumen corregido a 20° :</label>
                        <input required type="number" class="form-control" id="sobrantes_faltantes" readonly>
                        <p></p>
                        <button class="btn btn-primary" type="button" onclick="Corregir()">Calcular faltantes</button>
                    </div>

                    <hr>
                    <h4>Llenar el siguiente apartado en caso de NO conformidad. </h4>
                    <p> </p>
                    <h6>Describe los motivos de la no conformidad en la descarga en caso de no aplicar, escribe N/A:</h6>
                    <hr>
                    <br>

                    <div class="mb-3">
                        <label for="no_conformidad_cliente" class="form-label">Cliente:</label>
                        <input required type="text" class="form-control" id="no_conformidad_cliente">
                    </div>

                    <div class="mb-3">
                        <label for="no_conformidad_operador" class="form-label">Operador:</label>
                        <input required type="text" class="form-control" id="no_conformidad_operador">
                    </div>

                    <div class="mb-3">
                        <label for="foto_evidencia4" class="form-label">Carta porte SELLADA</label>
                        <input required type="file" class="form-control" id="foto_evidencia4" accept="image/*" placeholder="ingresa tu inconformidad o N/A en caso de no aplicar">
                    </div>
                    <hr>
                    <hr>

<span class="d-block pb-2">Firma digital de quien recibe:</span>
<div class="signature mb-2" style="width: 100%; height: 200px;">
    <canvas id="signature-canvas"
        style="border: 1px dashed red; width: 100%; height: 200px;"></canvas>
</div>
<br>
<button class="btn btn-danger mb-4" type="button" id="clearCanvasButton">Limpiar firma</button>
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

                    <button class="btn btn-primary" type="button" onclick="GenerarPDF()">Guardar</button>
                </div>

            </div>
        </div>

    </div>
</div>

<div id="modalCaliter" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="modalCaliterLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCaliterLabel">Acta de Balance de la Descarga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="formCaliter">
                    <hr>
                    <b> DATOS DEL OPERADOR:</b>
                    <hr>
                    <div class="mb-3">
                        <label for="hora_llegada" class="form-label">Hora de Llegada: </label>
                        <input autofocus type="time" class="form-control" id="hora_llegada">
                    </div>

                    <div class="mb-3">
                        <label for="carta_porte" class="form-label">Carta Porte: </label>
                        <input maxlength="13" type="text" class="form-control" class="documentField" id="carta_porte" required>
                        <p></p>
                        <button class="btn btn-primary" type="button" onclick="buscarGuia()">Buscar</button>
                    </div>

                    <div class="mb-3">
                        <label for="nombre_operador" class="form-label">Nombre del Operador: </label>
                        <input type="text" class="form-control" id="nombre_operador" readonly>
                    </div>
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

                    <button class="btn btn-primary" type="button" onclick="GenerarPDF()">Guardar</button>
                </div>

            </div>
        </div>

    </div>
</div>

<div id="modalUsuarios" class="modal fade" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-usuarios">Compartir con:</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="frmCompartir">
                <div class="modal-body">
                    <input type="hidden" id="id_archivo" name="id_archivo">
                    <select class="js-states form-control" id="usuarios" name="usuarios[]" tabindex="-1" style="display: none; width: 100%" multiple="multiple">
                    </select>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-dismiss="modal" type="button"> Cancelar </button>
                    <button class="btn btn-primary" type="submit"> Compartir </button>
                </div>
            </form>


        </div>
    </div>
</div>