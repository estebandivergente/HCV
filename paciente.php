<?php

$active = "paciente";
require_once 'header.php'; 

?>

  <main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between align-items-center">
      <div>
        <h1>Paciente</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item active">Paciente</li>
          </ol>
        </nav>
      </div>

      <button class="btn btn-primary" onclick="show_form(true)">Agregar</button>
    </div>

    <section class="section" id="table">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table datatable dataTable-table">
                <thead>
                  <tr><th scope="col" data-sortable="" style="width: 5.6696%;"><a href="#" class="dataTable-sorter">#</a></th><th scope="col" data-sortable="" style="width: 28.0547%;"><a href="#" class="dataTable-sorter">Name</a></th><th scope="col" data-sortable="" style="width: 37.7322%;"><a href="#" class="dataTable-sorter">Position</a></th><th scope="col" data-sortable="" style="width: 9.28641%;"><a href="#" class="dataTable-sorter">Age</a></th><th scope="col" data-sortable="" style="width: 19.2571%;"><a href="#" class="dataTable-sorter">Start Date</a></th></tr>
                </thead>
                <tbody><tr><th scope="row">1</th><td>Brandon Jacob</td><td>Designer</td><td>28</td><td>2016-05-25</td></tr><tr><th scope="row">2</th><td>Bridie Kessler</td><td>Developer</td><td>35</td><td>2014-12-05</td></tr><tr><th scope="row">3</th><td>Ashleigh Langosh</td><td>Finance</td><td>45</td><td>2011-08-12</td></tr><tr><th scope="row">4</th><td>Angus Grady</td><td>HR</td><td>34</td><td>2012-06-11</td></tr><tr><th scope="row">5</th><td>Raheem Lehner</td><td>Dynamic Division Officer</td><td>47</td><td>2011-04-19</td></tr></tbody>
              </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 5 of 5 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"></ul></nav></div></div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="section" id="form">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Propietario</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Paciente</button>
                </li>
              </ul>

              <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                  

                <form class="row g-3">
                  <div class="col-6">
                    <label for="inputEmail4" class="form-label">Cédula</label>
                    <input type="number" class="form-control" id="inputEmail4" placeholder="Ingrese la cédula">
                  </div>
                  <div class="col-6">
                    <label for="inputNanme4" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNanme4" placeholder="Ingrese el nombre">
                  </div>
                  <div class="col-6">
                    <label for="inputPassword4" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Ingrese el celular">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese la dirección">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Correo</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese el correo">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Clínica remitente</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese la clínica">
                  </div>
                  <div class="w-100 d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" onclick="show_form(false)">Cancelar</button>
                  </div>
                </form>

                </div>
                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">

                <form class="row g-3">
                  <div class="col-6">
                    <label for="inputNanme4" class="form-label">Nombre del paciente</label>
                    <input type="text" class="form-control" id="inputNanme4" placeholder="Ingrese el nombre">
                  </div>
                  <div class="col-6">
                    <label for="inputEmail4" class="form-label">Especie</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Ingrese la especie">
                  </div>
                  <div class="col-6">
                    <label for="inputPassword4" class="form-label">Raza</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Ingrese la raza">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Sexo</label>
                    <select class="form-select">
                      <option>Hembra</option>
                      <option>Macho</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="inputAddress">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="int_edad" disabled="disabled">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Color</label>
                    <input type="text" class="form-control" id="var_color" placeholder="Ingrese el color">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Vacunación</label>
                    <input type="text" class="form-control" id="var_vacunacion" placeholder="Ingrese la vacunación">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Desparasitación</label>
                    <input type="text" class="form-control" id="int_edad" placeholder="Ingrese la desparasitación">
                  </div>
                  <div class="w-100 d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" onclick="show_form(false)">Cancelar</button>
                  </div>
                </form>




                </div>
                <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">
                  Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                </div>
              </div>


            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php require_once 'footer.php'; ?>

<script src="assets/js/paciente.js"></script>