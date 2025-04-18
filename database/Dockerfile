FROM mysql:8.0

# Ajouter des scripts d'initialisation personnalisés si nécessaire
COPY ./init-scripts/ /docker-entrypoint-initdb.d/

# Exposer le port 3306
EXPOSE 3306