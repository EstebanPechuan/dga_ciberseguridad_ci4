<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'concientizacion';
        echo view('includes/pilares', $clase);
    ?>

    <section class="departamentos">
        <div class="depto-info" style="border: none; width: 100%;">
            <h3>Concientización </h3>
            <p>Desde la Sub Dirección de Ciberseguridad apostamos a concientizar no solo a los ciudadanos, sino tambien a cada uno de los trabajadores del Gobierno de la Provincia de San juan.
            <br>
            A traves de la concientizacion, capasitamos a las personas para que no sean el eslabón más débil de la cadena que representa su seguridad, deben estar adecuadamente al tanto de las amenazas existentes, como reconocerlas y cómo actuar ante ellas.</p>
        </div>
    </section>

    <section class="concien-videos">
        <div class="card-videos">
            <h4>Lorem ipsum</h4>
            <div class="video">
                <video src="" poster=" <?php echo base_url('public/img/poster-video.png') ?> "></video>
            </div>
        </div>

        <div class="card-videos">
            <h4>Lorem ipsum</h4>
            <div class="video">
                <video src="" poster=" <?php echo base_url('public/img/poster-video.png') ?> "></video>
            </div>
        </div>

        <div class="card-videos">
            <h4>Lorem ipsum</h4>
            <div class="video">
                <video src="" poster=" <?php echo base_url('public/img/poster-video.png') ?> "></video>
            </div>
        </div>

        <div class="card-videos">
            <h4>Lorem ipsum</h4>
            <div class="video">
                <video src="" poster=" <?php echo base_url('public/img/poster-video.png') ?> "></video>
            </div>
        </div>

        <div class="card-videos">
            <h4>Lorem ipsum</h4>
            <div class="video">
                <video src="" poster=" <?php echo base_url('public/img/poster-video.png') ?> "></video>
            </div>
        </div>

        <div class="card-videos">
            <h4>Lorem ipsum</h4>
            <div class="video">
                <video src="" poster=" <?php echo base_url('public/img/poster-video.png') ?> "></video>
            </div>
        </div>
    </section>

    <section class="links-utiles-servicios">
        <h3>Links Útiles (VIDEOS DE YOUTUBE)</h3>

        <div class="link">
            <a href="#c">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
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