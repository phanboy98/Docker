# What is this for?
nginx-proxy allows us to setup multiple Docker based websites on the same host, listens on standard HTTP ports 80 and 443. It acts as a proxy, stands between the client and the websites running in Docker containers and routes all HTTP requests to coresponding Docker based websites.
# How to setup

* First, clone this repository to your local machine.

* Copy the nginx self-singed SSL certificate for your new virtual host

Ex: if your new domain is `magento2.localhost`:

```bash
cp certs/default.crt certs/magento2.localhost.crt
cp certs/default.key certs/magento2.localhost.key
```

* Start the proxy container

```bash
docker-compose up -d
```

This container will be started automatically when Docker service starts, so you don't have to start it everytime.


* Setup your Magento 2 site using this Docker setup: https://git.dtn.com.vn/dtn/docker-magento

**Note**: in the docker-compose.yml file of your Magento site, change the environment variable `VIRTUAL_HOST` of the `app` service to match with the domain in SSL cert step.


# Found an issue?
Please open a new issue in `Issues` tab and put it as much details as you have, I will manage time to check.