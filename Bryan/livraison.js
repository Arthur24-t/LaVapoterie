function factu(){

    if (document.getElementById("same").checked == false)
	{

        var labelleAdresse = document.createElement("p");
        labelleAdresse.textContent="Adresse de Facturation";
        document.getElementById("facturation").appendChild(labelleAdresse);

		var inputAdresse = document.createElement("input");
        inputAdresse.type= "text";
        inputAdresse.id= "adresseFac";
        inputAdresse.name= "adresseFac";
        inputAdresse.placeholder= "veuillez entrer votre adresse";
        inputAdresse.required;
        document.getElementById("facturation").appendChild(inputAdresse);

        var labelleCpostal = document.createElement("p");
        labelleCpostal.textContent="Code Postal de Facturation";
        document.getElementById("facturation").appendChild(labelleCpostal);

		var inputCPostal = document.createElement("input");
        inputCPostal.type= "text";
        inputCPostal.id= "CpostalFac";
        inputCPostal.name= "CpostalFac";
        inputCPostal.placeholder= "veuillez entrez votre code postal";
        inputCPostal.required;
        document.getElementById("facturation").appendChild(inputCPostal)

        var labelleVille = document.createElement("p");
        labelleVille.textContent="Ville de Facturation";
        document.getElementById("facturation").appendChild(labelleVille);

		var inputVille = document.createElement("input");
        inputVille.type= "text";
        inputVille.id= "villeFac";
        inputVille.name= "villeFac";
        inputVille.placeholder= "veuillez votre adresse de facturation";
        inputVille.required;
        document.getElementById("facturation").appendChild(inputVille)
	}




    if (document.getElementById("same").checked == true)
	{
        r1 = getElementById("facturation");
        r1.remove

    }

}