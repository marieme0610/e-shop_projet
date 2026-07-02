echo "# e-shop_projet"


Structuration des données :

1- Increment 1 : Gestion des produits :
---feat1 : Enregister un produit (ok)
**Regle de gestion:
-RG1 : Le libelle est obligatoire et unique; (ok)
-RG2 : La reference est generer suivant le format  REF001/REF010/REF100 ... (ok)
-RG3 : Le prix et la quantité sont positifs; (ok)
---feat2 : Archiver un produit;
---feat3 : Lister les produits archivés et non archivés;

Mes fonctions :
--fonction enregistrer (produits.controller)(ok)
--fonction saisie (util)(ok)
--fonction de verification d'unicité (validator)(ok)
--fonction de verification champ vide (validator)(ok)
--fonction generation reference(service)(ok)
--fonction verification positif(validator)(ok)
--fonction archivage(produit.model)(ok)
--fonction verification reference dans le tableau produits(produit.model)(ok)
--fonction recuperation index produit(produit.model)(ok)
--fonction supprimer(produit.model)(ok)
--fonction lister produits(produit.view)(ok)
