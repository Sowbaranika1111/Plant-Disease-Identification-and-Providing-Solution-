<?php
$navLinks = array("Plants", "Pests", "About", "Contact");
?>
<div class="container ">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-success"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end text-end pt-4 flex-column flex-md-row" id="navbarSupportedContent">

        <div class="col-8 mt-1">
          <?php foreach ($navLinks as $link) : ?>
            <a href="#" class="text-dark text-decoration-none px-3"><?= $link ?></a>
          <?php endforeach; ?>
        </div>

        <!-- <div class="row">
            <div class="col-8 mt-1">
              <a href="#" class="text-dark text-decoration-none px-3">Plants</a>
              <a href="#" class="text-dark text-decoration-none px-3">Pests</a>
              <a href="#" class="text-dark text-decoration-none px-3">About</a>
              <a href="#" class="text-dark text-decoration-none px-3">Contact</a>
            </div> -->
        <div class="col-4 mt-1 d-flex">
          <input type="text" class="form-control form-control-sm me-2" placeholder="Search">
          <button type="button" class="btn btn-secondary btn-sm">Q</button>
        </div>
        <!-- <div class="col-4 mt-3">
              <input type="text" class="form-control form-control-sm" placeholder="Search">
              <button type="button" class="btn btn-secondary btn-sm mt-2">Q</button>
            </div> -->
      </div>
    </div>
</div>
</nav>

</div>