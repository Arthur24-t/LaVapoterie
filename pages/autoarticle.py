import shutil

from sqlalchemy import desc;  # folder management

numProduit = input("num prod\n");
fichier = numProduit+".php";
print(fichier)
nomProduit= input("nom produit\n")
description = input("description\n");
prix = input("prix\n")
prix += "€"
bouton ="<a href='"+numProduit+".php?action=ajout&amp;i="+ numProduit +"&amp;l="+nomProduit+"&amp;q=1&amp;p="+prix+"'>Ajouter au panier</a></div>"

image = "<img src='../image/produit/"+numProduit+".jpg'>"

shutil.copy('produit.php',  fichier)

print("le nom du nouveau fichier est :" + fichier)



f = open(fichier, "r+", encoding='utf-8')

f.seek(2170, 0)


f.write(str(nomProduit))

f.seek(2344, 0)
f.write(str(image))

f.seek(2509, 0)

f.write(str(description))
f.seek(2820, 0)

f.write(str(prix))
f.seek(2913, 0)

f.write(str(bouton))




f.close();
