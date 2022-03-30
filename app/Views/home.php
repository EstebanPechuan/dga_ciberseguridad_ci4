<main>
    <?php
        $clase['menu_activo'] = 'home';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Qué es Ciberseguridad</h3>
            <p>También conocida como seguridad de las tecnologías de la información, es la rama de la informática que procura detectar vulnerabilidades que ponen en juego la integridad, disponibilidad y confidencialidad de los sistemas informáticos.
            <br><br>
            Desde la Dirección de Ciberseguridad diseñando políticas que brindan protección informática, a través de la prevención, detención, respuesta y recupero ante incidentes de seguridad informática del Gobierno de la Provincia de San Juan.</p>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/gob-san-juan.png') ?> " alt="Logo Gobierno San Juan">
        </div>
    </section>


    <section class="noticias-home">
        <div class="cards-noticias">
            <div class="card-noticias">
                <div class="card-noti bg-gris">
                    <img src=" <?php echo base_url('public/img/iconos-direcciones/que-hacemos.svg') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Qué hacemos</h4>
                <p>Ofrecemos soluciones para identificar, proteger, detectar y resolver incidentes de seguridad informática.</p>
            </div>

            <div class="card-noticias">
                <div class="card-noti bg-gris">
                    <img src=" <?php echo base_url('public/img/iconos-direcciones/servicios-compu.svg') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Servicios</h4>
                <p>Catálogo de Servicios provistos para realizar integraciones de sistemas e intercambio de información en  diferentes reparticiones.</p>
            </div>

            <div class="card-noticias">
                <div class="card-noti bg-gris">
                    <img src=" <?php echo base_url('public/img/iconos-direcciones/vision-compu.svg') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Visión</h4>
                <p>Construir un ámbito digital seguro dentro de la administración pública protegiendo los datos críticos que administra.</p>
            </div>
    </section>

    <section class="noticias-home">
        <h2>Noticias</h2>
        <div class="cards-noticias">
            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/noticias/noticia1.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Paso que tiene que dar ante una filtración de datos</h4>
                <p>Las filtración de datos es uno de los peores problemas a los que se puede enfrentar una empresa. En primer lugar, porque supone q..</p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/noticias/noticia2.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Ciberataque detiene la producción de troyota</h4>
                <p>La fragilidad en la cadena de suministros y la producción de vehículos ha vivido uno de sus mayores ejemplos: todas las fábricas ...</p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/noticias/noticia3.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Chat internos del ransomware Conti se filtran en línea después de declarar su apoyo a la invación Rusa</h4>
                <p>Los registros del chat pertenecientes al grupo de ransomware Conti se filtró en línea gracias a una aparente fuente interna, q.. </p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/noticias/noticia4.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Ciberguerra Ucrania-Rusia: Los Frentes Digitales</h4>
                <p>Por David Salces Guillem La incursión del ejército ruso en territorio ucraniano, a finales de la semana pasada, marcó e...</p>
                <a href="#c">Ver más</a>
            </div>
        </div>
    </section>

    <section class="cards-home-tramites">
        <div class="card-home-tramite">
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/folder.png') ?> " alt="Icono Carpeta">
            </div>
            <div class="card-home-titulo">
                <h3>Consultas de Expedientes</h3>
            </div>
        </div>

        <div class="card-home-tramite">
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/hands.png') ?> " alt="Icono Manos">
            </div>
            <div class="card-home-titulo">
                <h3>Trámites</h3>
            </div>
        </div>

        <div class="card-home-tramite">
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/chats.png') ?> " alt="Icono Conversación">
            </div>
            <div class="card-home-titulo">
                <h3>Consultas y solicitudes</h3>
            </div>
        </div>

        <div class="card-home-tramite">
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/document-mouse.png') ?> " alt="Icono Documento">
            </div>
            <div class="card-home-titulo">
                <h3>Contrataciones</h3>
            </div>
        </div>
    </section>

    <section class="links-utiles">
        <div class="link">
            <h4>Ministerio de Hacienda y Finanzas</h4>
            <a href="https://hacienda.sanjuan.gob.ar/">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Dirección Provincial de Informática</h4>
            <a href="https://dpi.sanjuan.gob.ar/">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Dirección de Gobierno Abierto</h4>
            <a href="https://gobiernoabierto.sanjuan.gob.ar/">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4> Test para identificar phishing</h4>
            <a href="https://phishingquiz.withgoogle.com/">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>
        
        <div class="link">
            <h4>Digesto Administrativo</h4>
            <a href="https://digesto.sanjuan.gob.ar/digesto/inicio3.php">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Consulta de  Comprobantes de Pago y Rentenciones</h4>
            <a href="https://rentas.dgrsj.gob.ar/contribuyentes/index.asp">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>
    </section>


    <section class="publi-cidi-celu">
        <div class="publi-img-celu">
            <img src=" <?php echo base_url('public/img/mockup-celu.png') ?> " alt="MockUp Celulares">
        </div>
        <div class="publi-info-celu">
            <div class="publi-texto-celu">
                <h3>Descarga nuestra app y accede a tus servicios de una forma Rápida, Fácil y Segura</h3>
                <p>Podrás realizar distintos trámites y servicios digitales</p>
            </div>
            <div class="publi-buttons-celu">
                <a href="#c">
                    <img src=" <?php echo base_url('public/img/google-play.png') ?> " alt="Botón Google Play">
                </a>
                <a href="#c">
                    <img src=" <?php echo base_url('public/img/app-store.png') ?> " alt="Botón App Store">
                </a>
            </div>
        </div>
    </section>

    <?php
        echo view('includes/flyer_violencia');
    ?>    
</main>