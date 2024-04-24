<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITYI Hotel</title>
    <!-- Inclusion de la feuille de style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
   
</head>
<body>
    <header>
    <nav>
    <ul>
        <li id="logo"><a href="http://localhost/projet/">ITYI Hotel</a></li>
        <?php if (session()->has('user')): ?>
            <li><a href="#">Bonjour, <?= session('user')['username'] ?></a></li>
            <li><a href="http://localhost/projet/logout">Se déconnecter</a></li>
        <?php else: ?>
            <li><a href="http://localhost/projet/login">Se connecter</a></li>
        <?php endif; ?>
        <li><a href="#contact">Nous contacter</a></li>
    </ul>
</nav>

        <div id="imagePrincipale">
            <h1>Reservation</h1>
            <div id="premierTrait"></div>
            <h3>Chambres d'hôtes</h3>
        </div>
    </header>
    
    <section id="presentation">
        <div id="texteIntro">
            <h2>Choisir la chambre à réserver : </h2>
        </div>
        <div id="prestations">
            <div class="imagesPrestations">
                <h4>Chambre bateau</h4>
                <a href="#reserverSection"><img src="https://www.lebaillidesuffren.com/wp-content/uploads/sites/174/2020/06/Bailli-Suffren_2019-05-19_Photo_Chambres-1-2200x1200.jpg" alt="carte" width="300" height="200"></a>
            </div>
            <div class="imagesPrestations">
                <h4>Chambre piloti</h4>
                <a href="#reserverSection"><img src="https://global-uploads.webflow.com/61b694c59f46238057609302/63a47c293e5c9a72b8204a42_4.1%20COVER%20villas%20sur%20pilotis%20Cara%C3%AFbes.jpg" alt="chambre" width="300" height="200"></a>
            </div>
            <div class="imagesPrestations">
                <h4>Chambre plage</h4>
                <a href="#reserverSection"><img src="https://www.auxandra.com/wp-content/uploads/2019/03/maison-bord-mer-floride.jpg" alt="repas" width="300" height="200"></a>
            </div>
        </div>
    </section>

    <!-- Section Réserver -->
    <section id="reserverSection">
        <h2>Réserver</h2>

        <!-- Affichage des messages d'erreur -->
        <?php if(session()->getFlashdata('error')): ?>
            <div style="color: red;"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>


        <form action="<?= site_url('reservation/traiterReservation') ?>" method="post">
            <div class="form-group">
                <label>Chambre choisie :</label>
                <div>
                    <label for="piloti">Piloti</label>
                    <input type="radio" id="piloti" name="chambre" value="Piloti" required>
                </div>
                <div>
                    <label for="plage">Plage</label>
                    <input type="radio" id="plage" name="chambre" value="Plage" required>
                </div>
                <div>
                    <label for="bateau">Bateau</label>
                    <input type="radio" id="bateau" name="chambre" value="Bateau" required>
                </div>
            </div>

            <div class="form-group">
                <label for="dateReservation">Date de réservation :</label>
                <input type="date" id="dateReservation" name="dateReservation" required>
            </div>

            <div class="form-group">
                <label for="datefinReservation">Date de fin de réservation :</label>
                <input type="date" id="datefinReservation" name="datefinReservation" required>
            </div>

            <button type="submit">Réserver</button>
        </form>
    </section>

    <footer>
        <h2 id="contact">Demandes de Réservation en cours : </h2>
        <div class="bigText">
            <table class="centeredTable">
                <tr>
                    <th>ID</th>
                    <th>Date de Demande</th>
                    <th>Date de fin de demande</th>
                    <th>Chambre</th>
                </tr>
                <?php foreach ($reservations as $row): ?>
                    <tr>
                        <td><?= $row['ID'] ?></td>
                        <td><?= $row['Date_de_Demande'] ?></td>
                        <td><?= $row['Date_de_fin'] ?></td>
                        <td><?= $row['Chambre'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </footer>
</body>
</html>
