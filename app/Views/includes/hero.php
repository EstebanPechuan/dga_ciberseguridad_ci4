<section class="hero" style=" <?php if($hero == true) { echo 'display: block;';} else {echo 'display: none;';} ?>" >
    <div class="">
        <h2>Bienvenid@ a la</h2>
        <h1>Dirección de Ciberseguridad</h1>
    </div>

    <!-- <form action="./index.html" method="POST">
        <input type="text">
        <div class="home-hero-submit">
            <input type="submit" value="">
            <div class="">
                <p>Buscar</p>
                <i class='bx bx-search'></i>
            </div>
        </div>
    </form> -->
</section>

<div class="nav-secundario">
    <ul>
        <li><a href="<?= base_url('/') ?>" class=" <?php if ($menu_activo === 'home') { echo 'li-active'; } ?> ">INICIO</a></li>
        |
        <li><a href="<?= base_url('institucional') ?>" class=" <?php if ($menu_activo === 'institucional') { echo 'li-active'; } ?> ">INSTITUCIONAL</a></li>
        |

        <li><a href="<?= base_url('servicios') ?>" class=" <?php if ($menu_activo === 'servicios') { echo 'li-active'; } ?> ">SERVICIOS</a></li>
        |
        <li><a href="<?= base_url('contacto') ?>" class=" <?php if ($menu_activo === 'contacto') { echo 'li-active'; } ?> ">CONTACTO</a></li>
    </ul>
</div>

<script>
    var auxi = document.querySelector('#nav-sec');
    auxi.focus();
    
</script>