<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'incidentes';
        echo view('includes/pilares', $clase);
    ?>

    <section class="departamentos">
        <div class="depto-info" style="border: none; width: 100%;">
            <h3>Gestión de Incidentes Organizacional</h3>
            <p>Con el objetivo de mantener estables los servicios de TI proporcionado por el Gobierno de San Juan es que contamos con procesos para ayudar ante los incidentes, fallos o errores en la infraestructura TI de Gobierno, poniendo énfasis en aquellos servicios tecnológicos que mejoran la calidad de vida del ciudadano.</p>

            <br>

            <p>Los incidentes en los cuales estamos enfocados a tratar dentro de los activos tecnológicos del Gobierno de San Juan, son:</p>

            <br>

            <p><strong>Disponibilidad/Performance:</strong> Ataques cuyo fin es dejar fuera de servicio los sistemas Gobierno o afectar el rendimiento de los mismos. El objetivo es dañar  la productividad y/o la imagen del Gobierno de San Juan.</p>

            <ul>
                <li>DoS / DDoS.</li>

                <li>Sabotaje.</li>
            </ul>

            <p><strong>Obtención de datos:</strong> Ataques cuyo objetivo es la de recabar información que permita realizar ataques dirigidos, a través de:</p>

            <ul>
                <li>Phishing.</li>

                <li>Ingeniería social.</li>

                <li>Identificación de vulnerabilidades.</li>

                <li>Sniffing.</li>
            </ul>

            <p><strong>Confidencialidad de la información:</strong> Incidente relacionado con  acceso indebido, fuga, modificación o borrado de información privada y/o sensible de los usuarios.</p>

            <br>
            
            <p><strong>Código Malicioso:</strong> Cualquier software corrupto, dañino, nocivo o no autorizado diseñado para infiltrarse y dañar un sistema informático</p>
            
            <ul>
                <li>Virus.</li>
                
                <li>Ransomware.</li>
                
                <li>Gusano.</li>
                
                <li>Spayware.</li>
                
                <li>Rookit.</li>
                
                <li>Troyano.</li>
            </ul>

            <p><strong>Fraude:</strong> Engaño cuya intención es la de conseguir un beneficio, y con el cual el Gobierno de San Juan puede quedar perjudicado.</p>

            <ul>
                <li>Uso ilegítimo de credenciales</li>

                <li>Violación de propiedad intelectual o industrial.</li>

                <li>Uso no autorizado de recursos.</li>

                <li>Suplantación (spoofing).</li>
            </ul>

            <p><strong>Intrusión:</strong> Asaltos en contra de las redes de infraestructura tecnológica de Gobierno cuyo objetivo es explotar vulnerabilidades e introducir de forma fraudulenta en los sistemas de Gobierno.</p>

            <ul>
                <li>Defacement.</li>

                <li>Pharming.</li>

                <li>Ataque de fuerza bruta.</li>

                <li>Cross-Site Scripting (XSS).</li>

                <li>Explotación de vulnerabilidad de software.</li>

                <li>Explotación de vulnerabilidad de hardware.</li>

                <li>Compromiso de cuenta de usuario.</li>

                <li>Inyección SQL.</li>

                <li>Spear Phishing.</li>

                <li>Cross-Site Request Forgery (CSRF / XSRF).</li>

                <li>Remote File Inclusion (RFI).</li>
            </ul>

            <p><strong>Contenido malintencionado:</strong> Ataques dirigidos a dañar la imagen del Gobierno o a utilizar sus medios electrónicos para otros usos ilícitos (tales como la publicidad, extorsión, otros).</p>

            <br>

            <p><strong>Política de Seguridad:</strong> Violaciones de las políticas de seguridad aprobadas por el Gobierno de San Juan.</p>
        </div>
    </section>


    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>