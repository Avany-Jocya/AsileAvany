

  <header><?php include('./inc/templates/haut.php') ?></header>

<link rel="stylesheet" href="style.css"> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="card-accueil">
 
<div class="presentation" >
    <h4 class="fst-italic fs-1 ">Bienvenue à l'Asile Avany!</h4>
    <p class="mb-0 fst-italic "> Dans un univers de riche en fou rire, en drama et en musique, je vous fait découvrir ma vie, mon monde et mon asile. </p>
</div>
<ul class="cards">
  <li>
    <a href="kpop.php" class="card">
      <img src="/public/images/kpop.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="/public/images/logo.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Kpop</h3>            
            
          </div>
        </div>
        <p class="card__description">Découvrez et découvrons, les groupes connus et inconnus.Actuellement, je suis une Armystaytinytwits.
        </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="kdrama.php" class="card">
      <img src="/public/images/kdrama.jpg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="/public/images/logo.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Kdrama</h3>
          
          </div>
        </div>
        <p class="card__description">On pourra trouver ici, les Kdramas déjà vu et nos avis sur cela.</p>
      </div>
    </a>
  </li>
  <li>
    <a href="Reaction.php" class="card">
      <img src="/public/images/reaction.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="/public/images/logo.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Réaction</h3>
            
          </div>
        </div>
        <p class="card__description">Ici se trouvera les réactions suite a des histoires en privés, ou a des compilation (tiktok youtube etc)</p>
      </div>
    </a>
  </li>
  <li>
    <a href="Photos.php" class="card">
      <img src="/public/images/photo.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="/public/images/logo.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Photos</h3>
            
          </div>          
        </div>
        <p class="card__description">Des photos des membres de l'Asile, ou image leur représentant. Des photos de nos abonné(e)s ou de nos activités.</p>
      </div>
    </a>
  </li>
  <li>
    <a href="https://www.tiktok.com/@asile.avany" class="card">
      <img src="/public/images/bigtiktok.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="/public/images/logo.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Tiktok de l'Asile</h3>
            
          </div>          
        </div>
        <p class="card__description">Rejoignez mon asile</p>
      </div>
    </a>
  </li>   
  <li>
    <a href="contact.php" class="card">
      <img src="/public/images/contact.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="/public/images/logo.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Me contacter</h3>
            
          </div>          
        </div>
        <p class="card__description">Réseaux pour me joindre</p>
      </div>
    </a>
  </li> 
</ul>
</div>


<?php include('./inc/templates/bas.php') ?>