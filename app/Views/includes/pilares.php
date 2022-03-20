<section class="nav-pilares">
    <h2>Pilares</h2>
    <div class="cards-pilares">
        <div class="card-pilares <?php if ($pilar_activo === 'incidentes') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('pilares/incidentes') ?>">GESTIÓN DE INCIDENTES</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'concientizacion') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('pilares/concientizacion') ?>">CONCIENTIZACIÓN</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'politicas') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('pilares/politicas') ?>">POLÍTICAS</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'infraestructura') { echo 'pilar-active'; } ?> ">
            <a style="text-align: center;" href="<?= base_url('pilares/infraestructura') ?>">INFRAESTRUCTURA TECNOLÓGICA</a>
        </div>
    </div>
</section>