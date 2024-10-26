
FROM ubuntu:latest
RUN apt-get update && \
    apt-get install -y php php-cgi lighttpd php-mysql micro git && \
    apt-get clean

ENV DB_HOST="db_host" \
    DB_USER="" \
    DB_PASS="" \
    DB_NAME="" \
    DB_HOST=""

COPY lighttpd.conf /etc/lighttpd/lighttpd.conf

RUN git clone https://github.com/K-Zoldyck/PRJ__AdmBus.git /var/www/projc && \
    chown -R www-data:www-data /var/www/projc && \
    chmod -R 755 /var/www/projc

EXPOSE 80
CMD ["lighttpd", "-D","-f", "/etc/lighttpd/lighttpd.conf"]