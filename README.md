echo "# e-shop_projet"


Structuration des données :

1- Increment 1 : Gestion des produits :
---feat1 : Enregister un produit
**Regle de gestion:
-RG1 : Le libelle est obligatoire et unique;
-RG2 : La reference est generer suivant le format REF001/REF010/REF100 ...
-RG3 : Le prix et la quantité sont positifs;
---feat2 : Archiver un produit;
---feat3 : Lister les produits archivés et non archivés;

Mes fonctions :
--fonction enregistrer (produits.controller)
--fonction saisie (util)
--fonction de verification d'unicité (validator)
--fonction de verification champ vide (validator)
--fonction generation reference(service)
--fonction verification positif(validator)
--fonction archivage(produit.model)
--fonction verification reference dans le tableau produits(produit.model)
--fonction recuperation index produit(produit.model)
--fonction supprimer(produit.model)
--fonction lister produits(produit.view)
