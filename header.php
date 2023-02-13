<header>
        <div id = "barre_header">
            <svg onclick="afficher_nav()" id="hamburger" fill="#000" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path></svg>
            <div id = "logo">
                <a>
                    <p>Orientation Cameroun</p>
                </a>
            </div>
            <div id = "nav_bar">
                <a id = "acceuil">Acceuil</a>
                <div class="header_deroulant_container">
                    <div  id = "_metiers_header">
                        <div class = "diplome_ecole_metier" onclick="afficherListe('liste_metiers_header')">
                            <span id = "test">Domaine</span>
                            <svg viewBox="0 0 16 16" class = "signe_deployable">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </div>
                    </div>
                    <ul class="liste_header" id = "liste_metiers_header">
                        <li><a href = "#arts_et_industries_culturelles">Arts et industries culturelles</a></li>
                        <li><a href = "#lettes_et_sciences_du_language">Lettes et sciences du language</a></li>
                        <li><a href = "#sciences_humaines_et_scociales">Sciences humaines et scociales</a></li>
                        <li><a href = "#science_de_lEducation">Science de l'éducation</a></li>
                        <li><a href = "#sciences_economiques_et_de_gestion">Sciences économiques et de gestion</a></li>
                        <li><a href = "#sciences_juridiques_et_politiques">Sciences juridiques et politiques</a></li>
                        <li><a href = "#science_de_la_sante">Science de la santé</a></li>
                        <li><a href = "#sciences_technologies_ingénieries_et_mathematiques">Sciences, technologies, ingénieries et mathématiques</a></li>
                    </ul>
                </div>
                <div class="header_deroulant_container">
                    <div class = "diplome_ecole_metier" onclick="afficherListe('liste_Ecoles_header')">
                        <span>Ecole</span>
                        <svg viewBox="0 0 16 16" class = "signe_deployable">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </div>
                    <ul class="liste_header" id = "liste_Ecoles_header">
                        <li><a>Polytechnique yaounde</a></li>
                        <li><a>metier 1</a></li>
                        <li><a>metier 1</a></li>
                        <li><a>metier 1</a></li>
                        <li><a>metier 1</a></li>
                    </ul>
                </div>
                <div class="header_deroulant_container">
                    <div class = "diplome_ecole_metier" onclick="afficherListe('liste_Diplomes_header')">
                        <span>Diplome</span>
                        <svg viewBox="0 0 16 16" class = "signe_deployable">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </div>
                    <ul class="liste_header" id = "liste_Diplomes_header">
                        <li><a>cep</a></li>
                        <li><a>bepc</a></li>
                        <li><a>Probatoire</a></li>
                        <li><a>bac</a></li>
                        <li><a>DCI advanced leve jnsdc sqdci sdcl</a></li>
                        <li><a>licence</a></li>
                        <li><a>Master 1</a></li>
                        <li><a>Master 2</a></li>
                        <li><a>Doctorat</a></li>
                    </ul>
                </div>
            </div>
            <div id = "faire_un_don">
                <button id = "button_faire_un_don">Faire un don</button>
            </div>
        </div>
    </header>