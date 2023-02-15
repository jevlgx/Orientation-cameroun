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
            <div id = "bloc_image_container">
                <div id = "image_filiere_container">
                    <img id = "image_filiere" src = "img/filiere/nom_filiere_dans_la_bd.jpg" alt = "remplacer par le nom de la filiere">
                </div>
                <div id = "couleur_arriere_de_image_filiere"></div>
            </div>
            <div id = "barre_d_arrondi"></div>
            <div id = "bloc_nom_filiere">
                <div class = "arrondir_nom_filiere arrondir_nom_filiere1"></div>
                <h1 id = "nom_filiere">Mettre le nom de la filière ex : mathematiques et sciences physiques</h1>
                <div class = "arrondir_nom_filiere arrondir_nom_filiere2"></div>
            </div>
        </div>
    </section>
    <div id ="info_filiere_et_asside_container">
        <main id = "main_filiere">
            <details>
                <summary class = "summary_filiere" id="descriptio_summary" onclick = "gestionSvgDeSummary('svg_desciption_filiere')">
                    <div class = "ferme" id = "svg_desciption_filiere"><!-- son classe peut prendre les valeurs ouvert ou ferme en fonction de l'etat de click -->
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                    <h2>Description</h2>
                </summary>
                <div class = "contenu_info_filiere">
                    <p>
                        mettre ici la description de la filiere
                    </p>
                </div>
            </details>
            <details>
                <summary class = "summary_filiere" id="descriptio_summary" onclick = "gestionSvgDeSummary('svg_debouche_filiere')">
                    <div class = "ferme" id = "svg_debouche_filiere"><!-- son classe peut prendre les valeurs ouvert ou ferme en fonction de l'etat de click -->
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                    <h2>Debouchés</h2>
                </summary>
                <div class = "contenu_info_filiere">
                    mettre ici les débouchés de la filiere
                </div>
            </details>
            <details>
                <summary class = "summary_filiere" id="descriptio_summary" onclick = "gestionSvgDeSummary('svg_etablissement_filiere')">
                    <div class = "ferme" id = "svg_etablissement_filiere"><!-- son classe peut prendre les valeurs ouvert ou ferme en fonction de l'etat de click -->
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                    <h2>Etablissemments</h2>
                </summary>
                <div class = "contenu_info_filiere">
                    mettre ici les établissements qui forment pour cette filiere
                </div>
            </details>
        </main>
        <asside id = "asside_filiere">
            <h2>Trouvez votre voie en quelques clicks</h2>
            <div id = "bloc_button_trouver_ma_voie">
                <div id = "button_trouver_ma_voie">Trouver ma voie</div>
            </div>
        </asside>
    </div>
    <?php require "footer.php";?>
</body>
</html>