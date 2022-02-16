function factu(){

    if (document.getElementById("same").checked == false)
	{

        let labelleAdresse = document.createElement("p");
        labelleAdresse.textContent="Adresse de Facturation";
        document.getElementById("facturation").appendChild(labelleAdresse);

		let inputAdresse = document.createElement("input");
        inputAdresse.type= "text";
        inputAdresse.id= "adresseFac";
        inputAdresse.name= "adresseFac";
        inputAdresse.placeholder= "veuillez entrer votre adresse";
        inputAdresse.required;
        document.getElementById("facturation").appendChild(inputAdresse);


        let labelleCAdresse = document.createElement("p");
        labelleCAdresse.textContent="Adresse de Facturation";
        document.getElementById("facturation").appendChild(labelleCAdresse);

		let inputCAdresse = document.createElement("input");
        inputCAdresse.type= "text";
        inputCAdresse.id= "complementAdresseFac";
        inputCAdresse.name= "complementAdresseFac";
        inputCAdresse.placeholder= "veuillez entrer votre complement d'adresse ";
        inputCAdresse.required;
        document.getElementById("facturation").appendChild(inputCAdresse);


        let labelleCpostal = document.createElement("p");
        labelleCpostal.textContent="Code Postal de Facturation";
        document.getElementById("facturation").appendChild(labelleCpostal);

		let inputCPostal = document.createElement("input");
        inputCPostal.type= "text";
        inputCPostal.id= "CpostalFac";
        inputCPostal.name= "CpostalFac";
        inputCPostal.placeholder= "veuillez entrez votre code postal";
        inputCPostal.required;
        document.getElementById("facturation").appendChild(inputCPostal)

        let labelleVille = document.createElement("p");
        labelleVille.textContent="Ville de Facturation";
        document.getElementById("facturation").appendChild(labelleVille);

		let inputVille = document.createElement("input");
        inputVille.type= "text";
        inputVille.id= "villeFac";
        inputVille.name= "villeFac";
        inputVille.placeholder= "veuillez votre adresse de facturation";
        inputVille.required;
        document.getElementById("facturation").appendChild(inputVille)
	}




    if (document.getElementById("same").checked == true)
	{
        document.getElementById('facturation').innerHTML = "";
    }

}