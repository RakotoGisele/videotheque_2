<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--Police-->
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <title>Projet vidéothèque</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="LOGO_VIDEO.png" alt="Logo" width="50" height="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="film.php">Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="serie.php">Série</a>
                <li class="nav-item">
                    <a class="nav-link" href="manga.php">Manga</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Recherche</button>
            </form>
            </div>
        </div>
    </nav>
    <div id="wrapper">
    <div id="filtre">
        <h2>Ajouter un film</h2> <br>
            <form method="POST">
                <input name="film" type="text"  placeholder="Titre du film">
                <input name="genre" type="text" placeholder="Genre du film">
                <input name="realisateur" type="text" placeholder="Réalisateur du film"> <br>
                <input type="submit" value="valider">  
            </form> <br>
        </div>
        <div id="une">
            <h2>À la une</h2>
            <div class="pic-ctn">
                <img src="https://zupimages.net/up/21/01/x9kv.jpg" alt="Bad Boys for life" class="pic">
                <img src="https://zupimages.net/up/21/01/enzr.jpg" alt="Enola Holmes" class="pic">
                <img src="https://zupimages.net/up/21/01/aev6.jpg" alt="Umbrella Academy" class="pic">
                <img src="https://zupimages.net/up/21/01/t93k.jpg" alt="Dead to me" class="pic">
                <img src="https://zupimages.net/up/21/01/boor.jpeg" alt="l'Attaque des titans" width="182" height="268" class="pic">
            </div>
        </div>
        <div id="contenu">
            <h1>BIENVENUE</h1>
        </div>
        <div id="film_1">
                <img src="https://zupimages.net/up/21/01/3m5i.jpg" alt="Le tire et les animaux de la fôret" width="200" height="200">
                <div class="plus">
                    <a href="#">voir plus</a>
                </div>
        </div>
        <div id="film_2">
              <img src="https://zupimages.net/up/21/01/orhb.jpeg" alt="" width="200" height="200">  
              <div class="plus">
                <a href="#">voir plus</a>
              </div>
        </div>
        <div id="film_3">
                <img src="https://zupimages.net/up/21/01/gbgt.jpg" alt="" width="200" height="200">
                <div class="plus">
                    <a href="#">voir plus</a>
                </div>
        </div>
        <div id="serie_1">
                <img src="https://zupimages.net/up/21/01/ktyg.jpeg" alt="" width="200" height="200">
                <div class="plus">
                    <a href="#">voir plus</a>
                </div>
        </div>
        <div id="serie_2">
                <img src="https://zupimages.net/up/21/01/x2z7.jpeg" alt="" width="200" height="200">
                <div class="plus">
                    <a href="#">voir plus</a>
                </div>
        </div>
        <div id="serie_3">
                <img src="https://zupimages.net/up/21/01/hhae.jpeg" alt="" width="200" height="200">
                <div class="plus">
                    <a href="#">voir plus</a>
                </div>
        </div>
        <div id="manga_1">
                <img src="https://zupimages.net/up/21/01/boor.jpeg" alt="" width="200" height="200">
                <div class="plus">
                    <a href="#">voir plus</a>
                </div>
        </div>
        <div id="manga_2">
                <img src="https://zupimages.net/up/21/01/lsd2.jpg" alt="" width="200" height="200">
                <div class="plus">
                    <a href="#">voir plus</a>
                </div>
        </div>
        <div id="manga_3">
                <img src="https://zupimages.net/up/21/01/rd25.jpg" alt="" width="200" height="200">
                <div class="plus">
                    <a href="#">voir plus</a>
                </div>
        </div>
    </div>
</body>
</html>
<?php 
                $bdd = new PDO('mysql:host=127.0.0.1;dbname=videotheque;charset=utf8', 'admin', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $reponse = $bdd->query('SELECT * FROM videotheque');
                if (isset($_POST['film']) && isset($_POST['genre']) && isset($_POST['realisateur'])) {
                $requete = 'INSERT INTO videotheque VALUES(NULL,"'. $_POST['film'] . '","' . $_POST['genre'] . '","' . $_POST['realisateur'] . '")';
                $resultat = $bdd->query($requete);
            }

            ?>