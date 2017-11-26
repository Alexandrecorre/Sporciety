function commande(nom, argument,target){
    if (typeof argument === 'undefined') {
        argument = '';
    }

    document.execCommand(nom, false, argument);

    if (document.queryCommandValue(nom)=="true") {
      document.getElementById(target).style.backgroundColor="#cecece";
    }
    else {
      document.getElementById(target).style.backgroundColor="";
    }


}


function resultat(){

	document.getElementById("resultat").value = document.getElementById("editeur").innerHTML;
  document.form.submit();

}
