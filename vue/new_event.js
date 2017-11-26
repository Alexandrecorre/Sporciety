function commande(nom, argument,target){
    if (typeof argument === 'undefined') {
        argument = '';
    }

    document.execCommand(nom, false, argument);

    if (document.queryCommandValue(nom)=="true") {
      document.getElementById(target).style.backgroundColor="grey";
    }
    else {
      document.getElementById(target).style.backgroundColor="";
    }


}


function resultat(){

	document.getElementById("resultat_description").value = document.getElementById("editeur_description").innerHTML;
  document.getElementById("resultat_adresse").value = document.getElementById("editeur_adresse").innerHTML;
  document.getElementById("resultat_nom_event").value = document.getElementById("nom_event").value;
  document.getElementById("resultat_date").value = document.getElementById("editeur_date").value;
  document.form.submit();
}
function resultat_post(){
  document.getElementById("resultat").value = document.getElementById("editeur_description").innerHTML;
}


function enleve(nom,contenu){
  if (document.getElementById(nom).textContent==contenu) {
    document.getElementById(nom).textContent="";
  }
}
