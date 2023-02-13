<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filière</title><!-- doner le nom de la filière en php -->
    <link rel = "stylesheet" href = "css/style.css">
    <script src = "js/main.js"></script>
</head>
<body>
    <?php require "header.php";?>
    <section id = "section_presentation_filiere">
        <div id = "bloc_presentation_filiere">
            <div id = "image_filière_container">
                <img id = "image_filiere" src = "img/filiere/nom_filiere_dans_la_bd.jpg" alt = "remplacer par le nom de la filiere">
            </div>
            <div id = "barre_d_arrondi"></div>
            <div id = "bloc_nom_filiere">
                <div class = "arrondir_nom_filiere arrondir_nom_filiere1"></div>
                <h1 id = "nom_filiere">Mettre le nom de la filière ici</h1>
                <div class = "arrondir_nom_filiere arrondir_nom_filiere2"></div>
            </div>
        </div>
    </section>
    <main>

    </main>
    <?php require "footer.php";?>
</body>
</html>