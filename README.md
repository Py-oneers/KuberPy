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
> docker run -p 8080:80 -d devagastya0/kuberpy:tag

For now, we support Intel, ARM64 and ARM32 hardware. 

| Tags supported     | 
| ----------- |
| arm32v7-latest      | 
| latest   | 
| arm64v8-latest   |


For now, we support Intel, ARM64 and ARM32 hardware. 

This publishes the port 80 of your container to 8080 of your host. Ensure that there are no pre-existing processes on port 8080.
## To deploy using Kubernetes
> kubectl create -f deployment.yml
> 
> kubectl create -f service.yml
>
This create a kubernetes deployment with 2 pods and a kubernetes service(LoadBalancer) and which recieves requests from port 8080. 

### Note
In developement, you can use [Ngrok](https://ngrok.com/download) and run:
>ngrok http 8080
>
To generate a publicly accessible URL. 


## To build from source
- Configure Apache2 to run on port 80.
- Place the contents of the _www_ directory into the root of Apache2 server. 
- Ensure that your system has PHP-7 installed.
- Run : apache2ctl -D FOREGROUND
