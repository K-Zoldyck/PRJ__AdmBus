
FROM ubuntu:latest
RUN apt-get update && \
    apt-get install -y apache2 php micro git openssh-server && \
    apt-get clean

RUN apt-get install -y wget && \
    wget https://archive.apache.org/dist/tomcat/tomcat-11/v11.0.0/bin/apache-tomcat-11.0.0.tar.gz && \
    tar -xvzf apache-tomcat-11.0.0.tar.gz && \
    mv apache-tomcat-11.0.0 /opt/tomcat

ENV REPO_URL="github_url" \
    DB_HOST="db_host" \
    DB_USER="db_user" \
    DB_PASSWORD="db_password"

RUN mkdir -p /var/www/app
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
EXPOSE 3000 8080
RUN echo "Listen 3000" >> /etc/apache2/ports.conf
RUN mkdir /var/run/sshd
ENTRYPOINT ["/entrypoint.sh"]

