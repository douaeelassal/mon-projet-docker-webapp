FROM nginx:latest

# Supprimer la configuration par défaut
RUN rm /etc/nginx/conf.d/default.conf

# Copier notre configuration personnalisée
COPY nginx.conf /etc/nginx/conf.d/

# Exposer le port 80
EXPOSE 80