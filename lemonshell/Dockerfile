#Lemonshell

FROM debian:latest
MAINTAINER Mike Peterson <mike@lemonshell.com>

RUN apt update && apt upgrade
RUN apt install -y nginx
ADD www /var/www/html

CMD service nginx start && tail -f /dev/null

# Expose the ports for server
EXPOSE 80 443

