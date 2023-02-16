function afficherListe(id) {
    var tousLesUl = document.getElementsByClassName("liste_header");
    for(var i = 0; i < tousLesUl.length; i++){
        tousLesUl[i].style.display = "none";
    }
    var ul = document.getElementById(id);
    if(ul.style.display != "flex"){
        ul.style.display = "flex";
        //ecoute du prochain click
        document.addEventListener("click", function(event) {
            //si l'lement cliqué n'est pas dans une des listes, on ferme toutes les listes
        
        
                var dropdownA = document.getElementsByClassName("diplome_ecole_metier");
                unDesDropdown = false;
                for(var i = 0; i < dropdownA.length; i++){
                    if(dropdownA[i].contains(event.target)){
                        unDesDropdown = true;
                    }
                }
        
                var listeCourante = false;
                if(ul.contains(event.target)){
                    listeCourante = true;
                }
                
                if(unDesDropdown || listeCourante){//le prochain click se fait sur un dropdown ou sur la lliste 
                    /* alert("ne rien faire c'est un drop down ou une liste"); */
                }
                else{
                    ul.style.display = "none";
                }
        });
    }
    else{

    }
    /* if(ul.style.display == "flex"){
        ul.style.display = "none";
    }
    else{
        var tableau_des_liste_header = document.getElementsByClassName("liste_header");
        var taille = tableau_des_liste_header.length;
        for(var i = 0; i < taille; i++){
            tableau_des_liste_header[i].style.display = "none";
        }
        ul.style.display = "flex";
    } */
}

function gestionSvgDeSummary(id){
    div = document.getElementById(id);
    if(div.className == "ferme"){
        div.className = "ouvert";
        div.style.transform = "rotate(90deg)";
    }
    else{
        div.className = "ferme";
        div.style.transform = "rotate(0deg)";
    }
}