#Hyperlamp

FROM debian:latest
MAINTAINER Mike Peterson <mike@lemonshell.com>

RUN apt update && apt upgrade
RUN apt install -y openssh-server apache2 nano
RUN useradd -ou 0 -g 0 -m kefka
RUN mkdir -p /home/kefka/.ssh
ADD ./kefka.pub /home/kefka/.ssh/authorized_keys
ADD www /var/www/html

CMD service apache2 start && service ssh start && tail -f /dev/null

# Expose the ports for server
EXPOSE 80 22 443

