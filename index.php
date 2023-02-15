<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Version finale</title>
    <link rel = "stylesheet" href = "css/style.css">
    <script src = "js/main.js"></script>
</head>
<body>
    <?php require "header.php";?>
    <main>
        <div id = "caroussel">
            <img src = "img/main_image.jpg" id = "main_image" alt ="etudiants heureux">
            <div id = "masque_image"></div>
            <div id = "main_description_container">
                <div id = "main_description">
                    <h5 class = "main_description_item" id = "main_description_titre_secondaire">SUIVEZ VOS RÊVES ...</h5>
                    <h1 class = "main_description_item" id = "main_description_titre_principal">NOUS SOMMES FIERS DE VOUS AIDER A TROUVER VOTRE VOIE</h1>
                    <div id = "button_faire_un_don_container">
                        <button id = "main_description_button">En savoir plus</button>
                        <button id = "button_faire_un_don_petit_ecran">Faire un don</button>
                    </div>
                </div>
            </div>
        </div>
        <section id = "statistiques">
            <div class = "statistiques_bloc">
                <div class = "statistiques_cercle">
                    <svg class = "statistique_svg" id = "statistique_svg_1" viewBox="0 0 16 16">
                        <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z"/>
                        <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z"/>
                    </svg>                    <!--ici ajouter un svg-->
                </div>
                <div class = "statistiques_cercle_bloc_droit">
                    <p class = "statistiques_chiffre">460 +</p>
                    <p class = "statistiques_chiffre_description">Etablissements recencés</p>
                </div>
            </div>
            <div class = "statistiques_bloc">
                <div class = "statistiques_cercle">
                    <svg class = "statistique_svg" id = "statistique_svg_2" viewBox="0 0 44 44" id = "chapeau">
                        <path d="m23.95 42-14.5-7.95v-12L2 18 23.95 6 46 18v15.85h-3v-14.1l-4.55 2.3v12Zm0-15.4L39.7 18 23.95 9.55 8.3 18Zm0 12 11.5-6.35v-8.4L23.95 30l-11.5-6.25v8.5Zm.05-12Zm-.05 3.7Zm0 0Z"/>
                    </svg>
                    <!--ici ajouter un svg-->
                </div>
                <div class = "statistiques_cercle_bloc_droit">
                    <p class = "statistiques_chiffre">460 +</p>
                    <p class = "statistiques_chiffre_description">Diplomes recencés</p>
                </div>
            </div>
            <div class = "statistiques_bloc">
                <div class = "statistiques_cercle">
                    <svg class = "statistique_svg" id = "statistique_svg_3" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                    </svg>                    <!--ici ajouter un svg-->
                </div>
                <div class = "statistiques_cercle_bloc_droit">
                    <p class = "statistiques_chiffre">1500 +</p>
                    <p class = "statistiques_chiffre_description">Filières disponibles</p>
                </div>
            </div>
            <div class = "statistiques_bloc">
                <div class = "statistiques_cercle">
                    <svg class = "statistique_svg" id = "statistique_svg_4" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>                    <!--ici ajouter un svg-->
                </div>
                <div class = "statistiques_cercle_bloc_droit">
                    <p class = "statistiques_chiffre">10</p>
                    <p class = "statistiques_chiffre_description">Regions</p>
                </div>
            </div>
        </section>
        <section id = "decouvrez">
            <p id = "decouvrez_texte">Découvrez :</p>
            <div id = "decouvrez_description">
                <h2>Les plus grandes écoldes du cameroun</h2>
                <p>Retrouves plus d'informations sur les critères d'admissibilité pour les écoles les plus prestigieuses du cameroun</p>
                <button id = "description_bouton">En savoir plus</button>
            </div>
            <div id = "ensemble_grandes_ecoles">
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/polytechnique-yaounde.png" alt = "mettre le nom de l'école">
                </div>
                <!--reprende l'exemple de la video pour transformer la grille flexible de tous les cotés et ainsi acceuillir la fmsb-->
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/fmsb.png" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/ens.png" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/polytechnique-douala.png" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/iric.png" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/travaux.png" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/suptic.png" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/polytechnique-bamenda.png" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/enam.jpg" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/fasa.png" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/egem.jpg" alt = "mettre le nom de l'école">
                </div>
                <div class = "grande_ecole">
                    <img class = "image_grande_ecole" src = "img/ensai.jpg" alt = "mettre le nom de l'école">
                </div>
            </div>
        </section>
        <section id = "section_reussir_en_3_etapes">
            <h2 id = "reussir_en_3_etapes_texte">Que faire apès mon diplome ?</h2>
            <div id ="reussir_en_3_etapes">
                <div class = "bloc_reussir_en_3_etapes">
                    <img class = "image_reussir_en_3_etapes" src = "img/test2-etapes.jpg">
                    <div class = "numero_reussir_en_3_etapes">1</div>
                    <div class = "bloc_texte_reussir_en_3_etapes">
                        <p>Trouvez la filière qui vous convient</p>
                    </div>
                </div>
                <div class = "bloc_reussir_en_3_etapes">
                    <img class = "image_reussir_en_3_etapes" src = "img/test1-etapes.jpg">
                    <div class = "numero_reussir_en_3_etapes">2</div>
                    <div class = "bloc_texte_reussir_en_3_etapes">
                        <p>Vérifiez les critères d'admissibilité</p>
                    </div>
                </div>
                <div class = "bloc_reussir_en_3_etapes">
                    <img class = "image_reussir_en_3_etapes" src = "img/test3-etapes.jpg">
                    <div class = "numero_reussir_en_3_etapes">3</div>
                    <div class = "bloc_texte_reussir_en_3_etapes">
                        <p>Donnez tout pour être sélectionné</p>
                    </div>
                </div>
            </div>
        </section>
        <section id = "formation">
            <div class = "categorie_container">
                <h3 class = "categorie" id = "arts_et_industries_culturelles">Arts et industries culturelles</h3>
                <div class = "sous_categories_container">
                    <a class = "sous_categorie" href = "filiere.php"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                </div>
                <div class = "cacheur_de_scroll_bar"></div>
            </div>
            <div class = "categorie_container">
                <h3 class = "categorie" id = "lettes_et_sciences_du_language">Lettes et sciences du language</h3>
                <div class = "sous_categories_container">
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                </div>
                <div class = "cacheur_de_scroll_bar"></div>
            </div>
            <div class = "categorie_container">
                <h3 class = "categorie" id = "sciences_humaines_et_scociales">Sciences humaines et scociales</h3>
                <div class = "sous_categories_container">
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                </div>
                <div class = "cacheur_de_scroll_bar"></div>
            </div>
            <div class = "categorie_container">
                <h3 class = "categorie" id = "science_de_lEducation">Science de l'éducation</h3>
                <div class = "sous_categories_container">
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                </div>
                <div class = "cacheur_de_scroll_bar"></div>
            </div>
            <div class = "categorie_container">
                <h3 class = "categorie" id = "sciences_economiques_et_de_gestion">Sciences économiques et de gestion</h3>
                <div class = "sous_categories_container">
                    <a class = "sous_categorie"><p>filièr sdij ds dfsdiojfs dofsod f qksdqsd qskd qsd qsd qsdqsdqsdqs dqsdsd fse</p></a>
                    <a class = "sous_categorie"><p>filièr sdij ds dfsdiojfs dofsod f qksdqsd qskd qsd qsd qsdqsdqsdqs dqsdsd fse</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                </div>
<!--                 <div class = "cacheur_de_scroll_bar"></div>
 -->            </div>
            <div class = "categorie_container">
                <h3 class = "categorie" id = "sciences_juridiques_et_politiques">Sciences juridiques et politiques</h3>
                <div class = "sous_categories_container">
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                </div>
                <div class = "cacheur_de_scroll_bar"></div>
            </div>
            <div class = "categorie_container">
                <h3 class = "categorie" id = "science_de_la_sante">Science de la santé</h3>
                <div class = "sous_categories_container">
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                </div>
                <div class = "cacheur_de_scroll_bar"></div>
            </div>
            <div class = "categorie_container">
                <h3 class = "categorie" id = "sciences_technologies_ingénieries_et_mathematiques">Sciences, technologies, ingénieries et mathématiques</h3>
                <div class = "sous_categories_container">
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                    <a class = "sous_categorie"><p>filière</p></a>
                </div>
                <div class = "cacheur_de_scroll_bar"></div>
            </div>
            <!--continuer avec les categories et sous categories-->
            <!--ajouter les petits boutons pour passer aux sous categories suivantes en overflow-->
        </section>
    </main>
    <?php require "footer.php";?>
</body>
</html>