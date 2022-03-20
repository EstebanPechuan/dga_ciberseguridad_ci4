<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'politicas';
        echo view('includes/pilares', $clase);
    ?>

    <section class="departamentos">
        <div class="depto-info" style="border: none; width: 100%;">
            <h3>Politicas de la Subsectretaria de Ciberseguridad</h3>
            <p>Para estas políticas nos basamos en la ISO 27001 y la Ley de Protección de Datos Personales (Ley 25.326) con su resolución para el tratamiento del dato (Resolución 47/2018).</p>

            <br>

            <p><strong>ISO/IEC 27001</strong> es un reconocido marco internacional de las mejores prácticas para un sistema de gestión de seguridad de la información. Le ayuda a identificar los riesgos para su información importante y pone en su lugar los controles apropiados para ayudarle a reducir el riesgo.</p>

            <br>

            <p><strong>Beneficios de la Gestión de Seguridad de la Información ISO/IEC 27001</strong></p>

            <ul>
                <li>Identifique los riesgos y coloque controles en el sitio para gestionarlos o eliminarlos</li>

                <li>Flexibilidad para adaptar controles a todas las áreas o áreas seleccionadas de su organización</li>

                <li>Gane la confianza de los interesados y de los clientes de que sus datos están protegidos </li>

                <li>Demuestre cumplimiento y gane estatus como proveedor preferido</li>

                <li>Satisfaga más expectativas de licitaciones al demostrar cumplimiento</li>
            </ul>

            <div style="display: flex; justify-content: end;">
                <a href="#c" class="btn-fill-red">Más información</a>
            </div>

            <p><strong>Ley de Protección de Datos Personales (Ley 25.326)</strong>

            <br>
            
            La ley reconoce tu derecho a: Que tus datos personales no sean utilizados ni registrados sin tu consentimiento. Pedir y que te den la información sobre qué datos personales tuyos están registrados en bancos de datos públicos o privados. Pedir que tus datos sean corregidos o actualizados.</p>

            <div style="display: flex; justify-content: end;">
                <a href="#c" class="btn-fill-red">Más información</a>
            </div>
        </div>
    </section>


    <section class="politicas-select">
        <div class="selects">
            <p>Politicas</p>

            <select name="politicas" id="">
                <option value="seleccionar">Seleccionar</option>
            </select>
        </div>
        <div class="selects select-red">
            <p>Tipo</p>

            <select name="tipo" id="">
                <option value="seleccionar">Seleccionar</option>
            </select>
        </div>

        <div class="btn-filtrar">
            <a href="#c" class="btn-fill-red disable">Filtrar
            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" fill="#fff"/></svg>
            </a>
        </div>
    </section>
    

    <div class="alert-blue">
        <p>Selecciona Proceso de Negocio o Tipo para ver el catálogo de aplicaciones y servicios</p>
    </div>


    <section class="tabla-politicas">
        <h3>Lista de Políticas</h3>

        <div class="tabla">
            <div class="tabla-row">
                <div class="columna-1">Políticas</div>
                <div class="columna-2">Descargar</div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Política de Wifi</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Política de Contraseñas</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Política de Protección de Datos Personales</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Políticas de Control de Cambios</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Política de Respuesta de Incidientes</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Política de Acceso a Infrestructura  TI</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Gestión de Archivos</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Política de Acceso  al Data Center</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>

            <div class="tabla-row">
                <div class="columna-1">Política de Uso de Internet y correo Electrónico</div>
                <div class="columna-2">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/iconos/descarga.png') ?> " alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>