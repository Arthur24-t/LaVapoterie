import shutil;  # folder management

nomProduit = input("nom prod\n");
description = input("description\n");

nomProduit += ".php";

shutil.copy('default.php',  nomProduit);

print(nomProduit);

f = open(nomProduit, "a", encoding='utf-8');

f.close();
