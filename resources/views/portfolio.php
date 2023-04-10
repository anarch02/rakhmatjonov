<?php require 'parts/header.php' ?>

    


  <div class="px-4 py-5 my-5 text-center">
    <i class="bi bi-github" style="font-size: 5rem;"></i>
    <h1 class="display-5 fw-bold text-body-emphasis">My GITHUB</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="https://github.com/anarch02">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Show</button>
          
        </a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      
      <?php
        require 'app/models/Cards.php';

        foreach ($cards as $card) {
          require 'resources/views/components/card.php';
        }
      ?>

  </div>
  </div>
  
    
    <?php require 'parts/footer.php' ?>
