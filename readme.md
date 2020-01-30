## Project CI

Notre projet d'intégration continue consiste en une application composé de 3 conteneurs, image contenant l'environnement d'un projet laravel, mysql-server et phpmyadmin.

### Lancement du projet

```bash
docker-compose run app composer install
docker-compose run app npm install
docker-compose run app php artisan migrate
```

### Membre du groupe

- HADJI Mohamed Allam
- LAPOTRE Nils
- ZHA Anatole
