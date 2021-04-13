# KuberPy
Proxy server written in PHP containerised using Docker.

## Requirements
| Software     | Version     |
| ----------- | ----------- |
| PHP      | 7.0       |
| Docker   | 20.10.5        |
| Apache   | 2.4.46 (Unix)  |

## To run using Docker
- Pull latest image using
> docker pull devagastya0/kuberpy
- Run a container using
> docker run -p 8080:80 -d kuberpy

This publishes the port 80 of your container to 8080 of your host. Ensure that there are no pre-existing processes on port 8080.


## To build from source
- Configure Apache2 to run on port 80.
- Place the contents of the _www_ directory into the root of Apache2 server. 
- Ensure that your system has PHP-7 installed.
- Run : apache2ctl -D FOREGROUND
