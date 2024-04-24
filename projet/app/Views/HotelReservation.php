<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITYI Hotel</title>
    <!-- Inclusion de la police Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Advent+Pro|Dancing+Script&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <header>
    <nav>
    <ul>
        <li id="logo"><a href="#">ITYI Hotel</a></li>
        <?php if (session()->has('user')): ?>
            <li><a href="#">Bonjour, <?= session('user')['username'] ?></a></li>
            <li><a href="http://localhost/projet/logout">Se déconnecter</a></li>
            <li><a href="http://localhost/projet/reservation">Réserver</a></li>
        <?php else: ?>
            <li><a href="http://localhost/projet/login">Se connecter</a></li>
        <?php endif; ?>
        <li><a href="#contact">Nous contacter</a></li>
    </ul>
</nav>

        <div id="imagePrincipale">
            <h1>ITYI Hotel</h1>
            <div id="premierTrait"></div>
            <h3>Chambres d'hôtes</h3>
        </div>
    </header>
    <section id="presentation">
      <div id="texteIntro">
        <h2>Un lieu unique, pour un séjour unique</h2>
       <p>Découvrez une expérience inoubliable alliant sophistication et confort à l'Hôtel ITYI. Niché au cœur d'un paysage enchanteur, notre établissement offre un refuge exclusif où le luxe rencontre l'hospitalité chaleureuse.

L'Hôtel ITYI vous propose des chambres élégantes, des équipements de classe mondiale et une cuisine raffinée qui ravira vos papilles. Que vous voyagiez pour affaires ou pour le plaisir, notre équipe dévouée est là pour anticiper vos besoins et rendre votre séjour aussi mémorable que possible.</p>
       
      </div>
        <div id="prestations">
            <div class="imagesPrestations">
                <h4>Accueil</h4>
                <a href="http://localhost/codeigniter1/public/reservation">
                    <img src="https://www.travellers-society.com/wp-content/uploads/Chateau-vue-drone-2-scaled.jpg" alt="carte" width="300" height="200">
                </a>
            </div>
            <div class="imagesPrestations">
                <h4>chambres</h4>
                <a href="http://localhost/codeigniter1/public/reservation">
                    <img src="https://www.yonder.fr/sites/default/files/destinations/Royal-Champagne-Hotel-Spa_Suite-Royal_Overview.jpg" alt="chambre" width="300" height="200">
                </a>
            </div>
            <div class="imagesPrestations">
                <h4>cuisine</h4>
                <a href="http://localhost/codeigniter1/public/reservation">
                    <img src="https://www.challenges.fr/drupal/files/2022-02/restaurant-3.jpg" alt="repas" width="300" height="200">
                </a>
            </div>
        </div>

    </section>
   
    <footer>
      <h2 id="contact">Contactez-nous</h2>
      <form>
        <input placeholder="Nom">
        <input placeholder="E-mail">
        <input placeholder="Votre message ici...">
        <button>Envoyer</button>
      </form>
      <div id="deuxiemeTrait"></div>
      <div id="copyrightEtIcons">
        <div id="copyright">
          
        </div>
        <div id="icons">
          <a href="http://www.twitter.fr"><i class="fa fa-twitter"></i></a>
          <a href="http://www.facebook.fr"><i class="fa fa-facebook"></i></a>
          <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>

        </div>
      </div>

    </footer>
</body>
</html>

