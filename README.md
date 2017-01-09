# TP1-php

Créer un script en ligne de commande en PHP.
Compétences mis en avant:

-PHP
-Programmation Objet

Créer un script agissant comme une base de données. On sauvegardera dans un fichier .txt les infos plutot que d'ajouter ou d'editer en BDD. Les informations à ajouter seront de la forme "key value".

Exemples d'appel : 

php script.php -put key value
php script.php -update key newValue
php script.php -delete key
php script.php -select key

La méthode put:
-Permet d'ajouter une ligne en fin de fichier au fichier courant: par défaut le fichier sera file.txt. Il faudra au préalable verifier si la clef n est pas présente, Si elle est présente, elle agira comme un update et fera un retour visuel pour demander a l user si il souhaite update la valeur, si il tape "y", il faudra expliquer que la clef etait présente et qu'une mise a jour a ete faite, sinon annuler action.

Exemple rendu fichier file.db:
toto 62
tata 69
lol mdr

La clef et valeur seront séparé seulement d'un espace.

La méthode update:
La méthode va mettre a jour la valeur de la clef précisée : il va falloir parcourir le fichier et trouver la clef pour modifier sa valeur avec la nouvelle donnée.

La méthode delete:
La méthode va supprimer la ligne du fichier. Si la clef et la valeur sont précisé, les deux champs seront supprimé. Par contre, si il n y a que la clef précisé, la méthode supprimera seulement la valeur et laissera la clef dans le fichier avec une valeur non présente. (il faudra donc gérer cette subtilité pour la méthode add).

La méthode select:
Cette méthode permet de selectionner une ligne avec une clef passée en parametre. Parcours le fichier et renvoie la ligne dans la console a l user.

Bonus:
-L'utilisateur pourra taper une option en ligne de commande pour rediriger vers un fichier spécifié de la sorte:
php script.php -r newFile.txt
-L'option -q permettra d'afficher en sortie le couple clef/valeur séparé par un "=" au lieu d'un espace.
php script.php -e select key

Travail:
-Proposer un MCD de ce TP, il faut que tu fasse au plus une programmation Objet, reflechit bien et propose moi un MCD le plus objet que tu peux.
-Développer l'application en respectant la coding Covention qui te sera fournie.

Helper:
-StartUml pour créer des MCD (tu peux le faire à la main)
-argv pour les arguments en ligne de commande
-Programmation Objet PHP pour la synthaxe

Durée du TP : 4 jours.




