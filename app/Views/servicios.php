<main>
    <?php
        $clase['menu_activo'] = 'servicios';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>


    <section class="links-utiles-servicios">
        <h3>Trámites / Servicios</h3>

        <div class="link">
            <a href="#c">
                <h4>Validación de cambios</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <!-- <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5> -->
            </a>
        </div>

        <div class="link">
            <a href=" <?= base_url('servicios/sistemas') ?> ">
                <h4>Auditoría y desbloqueo de usuarios</h4>
                <!-- <p>Requerimiento de nuevo desarrollo. (link a formulario de requerimiento en elaboración)</p> -->
                <!-- <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5> -->
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Auditoría de incidentes</h4>
                <!-- <p>Requerimiento de nuevo desarrollo. (link a formulario de requerimiento en elaboración)</p> -->
                <!-- <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5> -->
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Análisis de vulnerabilidades</h4>
                <!-- <p>Iniciar ticket de Soporte</p> -->
                <!-- <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5> -->
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Validación de excepciones de seguridad sobre activos tecnológicos</h4>
                <!-- <p>Decreto 1254</p> -->
                <!-- <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5> -->
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>EPP</h4>
                <!-- <p>Decreto 1254</p> -->
                <!-- <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5> -->
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Gestión de información y eventos de seguridad</h4>
                <!-- <p>Decreto 1254</p> -->
                <!-- <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5> -->
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Definición y cumplimiento de políticas de ciberseguridad</h4>
                <!-- <p>Decreto 1254</p> -->
                <!-- <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5> -->
            </a>
        </div>
    </section>

    
    <section class="links-utiles-servicios">
        <h3>Soporte</h3>

        <div class="link">
            <a href="#c">
                <h4>Catálogo de Aplicaciones y Servicios</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>
    </section>

    

    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>