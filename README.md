# k8s_project de Idelon Téo et Bouvier Pierre


## Application nécesaires :

<ul>
<li>minikube</li>
<li>docker</li>
<li>kubectl</li>
</ul>

### Deploiement application :

``` kubectl  -k https://github.com/pierrebuniv/k8s_project.git ```

### Initialisation de la base de données:

Pour cela il faut avoir le fichier commentaire.mysql dans son répertoire. Vous pouvez obtenir ce fichier grace à un git clone ( ``` git clone https://github.com/pierrebuniv/k8s_project.git) ```
<br />
Puis lancer commande :

``` cat commentaire.sql | kubectl exec -i sqldb-555c867c5c-6zbdf  -- mysql -u root -ppassword chat ```

### Pour lancer l'application web on peut utiliser la commande :

```minikube service webserver```


