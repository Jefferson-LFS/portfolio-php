# Usa a imagem base do PHP-FPM 8.1
FROM php:8.1.2-fpm

# Instala o Nginx e dependências
RUN apt-get update && apt-get install -y \
    nginx \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Define o diretório raiz da aplicação
ENV APP_ROOT=/var/www/html
WORKDIR $APP_ROOT

# Configuração do Nginx
COPY nginx/default.conf /etc/nginx/sites-available/default.conf
RUN rm -rf /etc/nginx/sites-enabled/default && \
    ln -s /etc/nginx/sites-available/default.conf /etc/nginx/sites-enabled/

# Configuração do PHP-FPM (ajuste conforme necessário)
COPY nginx/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

# Copia os arquivos da aplicação
COPY . $APP_ROOT/

# Ajusta permissões
RUN chown -R www-data:www-data $APP_ROOT && \
    chmod -R 755 $APP_ROOT/public


# Expõe a porta 80 (Nginx)
EXPOSE 80

# Comando para iniciar ambos serviços
CMD ["sh", "-c", "php-fpm --nodaemonize & nginx -g 'daemon off;'"]