<h1 class="nombre-pagina">Crear Nueva Cita</h1>

<p class="descripcion-pagina">Elige Tus Servicios y coloca tus datos</p>

<?php include_once __DIR__ . '/../templates/barra.php' ?>

<div id="app">

    <nav class="tabs">

        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Informacion Cita</button>
        <button type="button" data-paso="3">Resumen</button>

    </nav>

    <div id="paso1" class="seccion">

        <h2>Servicios</h2>
        
        <p class="text-center">Elige Tus Servicios a Continuacion</p>

        <!--Vacio para rellenar con JS mediante consumo de Api-->
        <div id="servicios" class="listado-servicios"></div>

    </div>

    <div id="paso2" class="seccion">

        <h2>Tus Datos y Cita</h2>

        <p class="text-center">Coloca Tus Datos y Fecha de Tu Cita</p>
        
        <form class="formulario">

            <div class="campo">

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu Nombre" value="<?php echo $nombre; ?>" disabled>

            </div>

            <div class="campo">

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" min="<?php echo date('Y-m-d', strtotime('+2 day')); ?>">

            </div>

            <div class="campo">

                <label for="hora">Hora</label>
                <input type="time" id="hora">

            </div>

            <!--Id del usuario que inicio sesion-->
            <input type="hidden" id="id" value="<?php echo $id; ?>">

        </form>

    </div>

    <div id="paso3" class="seccion contenido-resumen">

        <h2>Resumen</h2>

        <p class="text-center">Verifica que la informacion sea correcta</p>

    </div>

    <div class="paginacion">

        <button id="anterior" class="boton">

            &laquo; Anterior

        </button>

        <button id="siguiente" class="boton">

            Siguiente &raquo;

        </button>

    </div>
    

</div>

<?php $script = "
<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script src='build/js/app.js'></script>
"; ?>