#Terraria Server

FROM debian:latest
MAINTAINER Mike Peterson <mike@lemonshell.com>

RUN apt update && apt upgrade
ADD server /server
RUN chmod +x /server/TerrariaServer.bin.x86_64

#CMD ./server/TerrariaServer.bin.x86_64 -config /server/serverconfig.txt -autocreate 1

# Expose the ports for server
EXPOSE 4263

