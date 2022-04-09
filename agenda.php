<?php

$active = "paciente";
require_once 'header.php'; 

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">

  <main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between align-items-center">
      <div>
        <h1>Agenda</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item active">Agenda</li>
          </ol>
        </nav>
      </div>

      <!-- <button class="btn btn-primary" onclick="show_form(true)">Agregar</button> -->
    </div>

    <section class="section" id="table">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body py-3">

             
              <div id="calendario"></div>


            </div>
          </div>

        </div>
      </div>
    </section>


  </main><!-- End #main -->

<?php require_once 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.js"></script>

<script src="assets/js/calendario.js"></script>