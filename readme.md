# Room Finder

This application is used to filter and find rooms according on their campus location, capacity, and room type. Admins can manage the rooms details as well as add or remove entries.

## Functional Overview

* The Database process is responsible for store the rooms details.
* The PHP based system is responsible to retrieve, append or modified the rooms details.

## Technical Overview

* The application is a PHP 8.0.1 based system that connects to a SQlite database. IT uses HTML, CSS and Jquery 3.6.0 
* To build and deploy this app we are using custom built docker image based on official bitnami/apache .
* This is a self contained image (Project files are built within the image) No volumes Rquired .
   


## System Dependencies

* Docker file
* Docker compose
* Docker images registry 
* Teamcity for building images
* Portainer for Creating and Deploying containers

  
## Release Instructions

This job is built and deployed by solutions team using Portainer and Teamcity.  

## Servers
### Docker Servers
**DEV:** docker-dev-t2&#46;usq&#46;edu&#46;au  
**TST:** docker-tst-t1&#46;usq&#46;edu&#46;au   
**PRD:** docker-prd-t1&#46;usq&#46;edu&#46;au   
