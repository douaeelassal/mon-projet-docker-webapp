FROM node:18

# Installer Angular CLI globalement
RUN npm install -g @angular/cli

# Définir le répertoire de travail
WORKDIR /app

# Copier d'abord le package.json
COPY src/package*.json ./

# Installer les dépendances
RUN npm install

# Puis copier le reste des fichiers
COPY src/ .

# Exposer le port 4200
EXPOSE 4200

# Démarrer l'application en mode développement
CMD ["ng", "serve", "--host", "0.0.0.0"]