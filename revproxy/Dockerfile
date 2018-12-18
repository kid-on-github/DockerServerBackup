#Revproxy

FROM debian:latest
MAINTAINER Mike Peterson <mike@lemonshell.com>

RUN apt update && apt upgrade
RUN apt install -y nginx
ADD ./nginx.conf /etc/nginx/nginx.conf
CMD nginx && tail -f /dev/null

# Expose the ports for server
EXPOSE 80 22 443
