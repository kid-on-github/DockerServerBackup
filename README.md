# Server Backup
There are many benefits of containerizing services. 
I have recently started using Docker for seperation of concerns on my server.
This is a backup of the files used to build and load the containers that host my services.

I have four services that are currently hosted on my server:

 - lemonshell.com: my website
 - hyperlamp.com:  friend's website
 - revproxy: reverse proxy for traffic control 
 - terraria server: game server


Note:
 - All services are hosted in seperate containers.  
 - The reverse proxy is used to avoid exposing services directly. 
 - This is useful for laying out the routing all in one place.
