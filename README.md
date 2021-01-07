# k8s_project de Idelon Téo et Bouvier Pierre


##Application nécesaires :
minikube
docker
kubectl

###Deploiement application :

``` kubectl  -k https://github.com/pierrebuniv/k8s_project.git ```

###Pour initialiser la base de données il faut avoir le fichier commentaire.mysql dans son répertoire puis lancer commande :

``` cat commentaire.sql | kubectl exec -i sqldb-555c867c5c-6zbdf  -- mysql -u root -ppassword chat ```


###Pour lancer l'application web on peut utiliser la commande :

```minikube service webserver```


