<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'infraestructura';
        echo view('includes/pilares', $clase);
    ?>

    <section class="departamentos">
        <div class="depto-info" style="border: none; width: 100%;">
            <h3>Gestión de Insidentes</h3>
            <p>Este pilar busca generar un alojamiento en el cual residirán las aplicaciones e información referente al Gobierno de San Juan y los cuales proveen un servicio esencial a los Ciudadanos. A su vez cuenta con servicios propios dirigidos en su mayoría al empleado público y los cuales aportan un gran valor para la resolución periódica de las tareas.</p>

            <br>

            <p><strong>Servicios de Alojamiento:</strong></p>

            <ul>
                <li>Infraestructura hibrida mediante tecnología hyperconvergente en sitio y servicios de alojamiento en nubes tecnológicas.</li>
                <li>Contingencia y backup, entre nubes y centros de datos propios.</li>
                <li>Monitoreo y control de los recursos tecnológicos.</li>
                <li>Gestión de cluster de Base de Datos</li>
            </ul>

            <p><strong>Servicios destinados al Empelado Publico y sus colaboradores</strong></p>

            <ul>
                <li>Gestión centralizada del correo institucional</li>
                <li>Relevamiento tecnológico del equipamiento del usuario final</li>
                <li>Aprovisionamiento de escritorio remoto y acceso privado para el trabajo a distancia.</li>
                <li>Gestión centralizada de usuario de dominio.</li>
            </ul>
        </div>
    </section>


    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>