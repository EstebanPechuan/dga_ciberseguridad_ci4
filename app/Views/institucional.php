<main>
    <?php
        $clase['menu_activo'] = 'institucional';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Qué es Ciberseguridad</h3>
            <p>También conocida como seguridad de las tecnologías de la información, es la rama de la informática que procura detectar vulnerabilidades que ponen en juego la integridad, disponibilidad y confidencialidad de los sistemas informáticos.
            <br><br>Desde la Dirección de Ciberseguridad creamos políticas que brindan protección informática, a través de la prevención, detención, respuesta y recupero ante incidentes de seguridad informática del Gobierno de la Provincia de San Juan.
            <br><br>Por lo general, los ciberataques apuntan a acceder, modificar o destruir la información confidencial; Extorsionar a los usuarios o los usuarios o interrumpir la continuidad del negocio.
            <br><br>Actualmente, la implementación de medidas de seguridad digital se debe a que hay más dispositivos conectados que personas, y los atacantes son cada vez más creativos.</p>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/ciber1.png') ?> " alt="Logo Gobierno San Juan">
        </div>
    </section>

    <section class="que-es-ga">
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/ciber2.png') ?> " alt="Logo Gobierno San Juan">
        </div>
        <div class="que-es-info">
            <h3>Nuestra Misión</h3>
            <p>Ofrecer soluciones para identificar, proteger, detectar y resolver incidentes de seguridad informática institucionales emergentes de nuestra Comunidad.
            <br><br>
            Bindandole al usurio, ciudadano, un entorno digital seguro. Para ello deben comprender y cumplir con los principios básicos de seguridad de datos, como elegir contraseñas seguras, ser cautelosos con los archivos adjuntos de los correos electrónicos y hacer copias de seguridad de datos.</p>
        </div>
    </section>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Nuestro Objetivo</h3>
            <p>El objetivo de esta Subsecretaria y de la administración pública del Gobierno de San Juan es concientizar a nuestra comunidad sobre los riesgos inherentes al uso de las TIC.
            <br><br>
            La tecnología es esencial para brindar a las organizaciones y los individuos las herramientas de seguridad informática necesarias para protegerse de ciberataques. Se deben proteger tres entidades importantes: los dispositivos Endpoints (como computadoras, dispositivos inteligentes y routers), las redes y la nube.</p>

            <h3>Nuestra Visión<h3>
            <p>Construir un ámbito digital seguro dentro de la administración pública protegiendo eventos o ataques que siendo exitosos pueden llevar a una disrupción o perdida de los datos críticos que administra.</p>

            <h3>Organigrama / Estructura<h3>
            <p>La Direccion de Ciberseguridad esta compuesta por dos diferentes sub direcciones.</p>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/ciber3.png') ?> " alt="Logo Gobierno San Juan">
        </div>
    </section>


    <section class="depto-servicios">
        <h3>Subdirección Ciberseguridad</h3>
        <div class="tabla-servicios">
            <div class="cada-servicio">
                <div class="serv-nombre">Área</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Servicios</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>
            
            <div class="cada-servicio">
                <div class="serv-nombre">CSIRT</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Gestión de Riesgo e Incidente</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">Concientización</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Proactiva y Reactiva</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">Cumplimiento</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Generación de Políticas y Auditoria</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">Operaciones</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>End Point Protection, Análisis de Vulnerabilidades</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>
        </div>
    </section>

    <section class="depto-servicios">
        <h3>Subdirección de Infrestuctura Tecnológica de Base</h3>
        <div class="tabla-servicios">
            <div class="cada-servicio">
                <div class="serv-nombre">Área</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Servicios</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>
            
            <div class="cada-servicio">
                <div class="serv-nombre">Operaciones</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Gestión de Hardware/Gestion de VM/Monitoreo y Control</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">Backup</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Backup y Contigencia</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">Servicios</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Correo Electrónico / Active Directory / DNS / VPN / RDS</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">Base de Datos</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Gestión de ORecle / MySQL / SQL Server / Mongo</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>
        </div>
    </section>


    <section class="organismos">
        <h2>Organismos y Secretarías</h2>
        <div class="cards-organismos">
            <div class="card-organismos">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/mujer-org.png') ?> " alt="Organismos">
                </div>
                <!-- <h4>Lorem Ipsum</p> -->
                <!-- <a href="#c">Ver más</a> -->
            </div>
        </div>
    </section>

    <section class="organismos">
        <div class="cards-organismos">
            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <!-- <h4>Lorem Ipsum</p> -->
                <!-- <a href="#c">Ver más</a> -->
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <!-- <h4>Lorem Ipsum</p> -->
                <!-- <a href="#c">Ver más</a> -->
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <!-- <h4>Lorem Ipsum</p> -->
                <!-- <a href="#c">Ver más</a> -->
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <!-- <h4>Lorem Ipsum</p> -->
                <!-- <a href="#c">Ver más</a> -->
            </div>
        </div>        
    </section>


    <?php
        echo view('includes/flyer_violencia');
    ?>    
</main>