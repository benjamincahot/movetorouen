<?php

include("inc/header.php");



?>

<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <div class="card-two">
        <header>
          <div class="avatar">
            <img src="" alt="le sang dla veine" />
          </div>
        </header>
        <h3>Evènements</h3>
      </div>
    </div>
  </div>
</div>


<!-- Tab panes -->
<div class="container-fluid">
  <!-- Start Page Content -->
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-title">
          <h4>Ajouter un evènement</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form>
              <div class="form-group">
                <p class="text-muted m-b-15 f-s-12">gloubiloubalouba tabadawaba toutifoufifé trobilubilobola</p>
                <input type="text" class="form-control input-default " placeholder="Renseignez le nom du restaurant">
              </div>
              <div class="form-group">
                <p class="text-muted m-b-15 f-s-12">gloubiloubalouba tabadawaba toutifoufifé trobilubilobola</p>
                <input type="text" class="form-control input-default" placeholder="Renseigner l'adresse du restaurant">
              </div>
              <div class="form-group">
                <p class="text-muted m-b-15 f-s-12">gloubiloubalouba tabadawaba toutifoufifé trobilubilobola</p>
                <input type="text" class="form-control input-default" placeholder="Renseignez la description du restaurant">
              </div>
              <div class="form-group">
                <p class="text-muted m-b-15 f-s-12">gloubiloubalouba tabadawaba toutifoufifé trobilubilobola</p>
                <input type="text" class="form-control input-default" placeholder="Renseignez le thème du restaurant">
              </div>
              <!-- Ajout de la note -->
              <input type="submit" name="submit" id="submit" class="btn btn-info m-b-10 m-l-5"></input>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /# column -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body p-b-0">
          <h4 class="card-title">Liste des evènements</h4>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#japonais" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Japonais</span></a></li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#indien" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Indien</span></a></li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#italien" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Italien</span></a></li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#texmex" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Texmex</span></a></li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vegan" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Végan</span></a></li>

          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="japonais" role="tabpanel">
              <div class="p-20">
                <h5>Fujiya Sushi</h5>
                <h6>14 Rue Sainte-Croix-des-Pelletiers, 76000 Rouen</h6>
                <p>Par ce qu'il est essentiel à la qualité que Fujiya Sushi est irrémediablement scrupuleux dans la sélection des produits. La qualité fait aujourd'hui la réussite de Fujiya Sushi dans l'agglomération Rouennaise.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include("inc/footer.php");

?>
