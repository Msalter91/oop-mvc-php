# Object-Oriented MVC for PHP 

## Installation and Setup

Run Composer Install msalter/oopmvc

### Config File 

To set the necessary constants - add the following to the config file

- DB_HOST - Your database host. e.g. localhost
- DB_USER - Your database username
- DB_PASS - Your database password
- DB_NAME - Your database's name

- URLROOT - The root URL for this project 

- SITENAME - The name you've given to this site

- APP_VERSION - It is set by default to 1.0.0, please change this as appropriate.

## Bootstrap.php

The bootstrap.php file needs to contain all the required files 

## Example Workflow and Correct URL settings 

The Core component splits the URL at '/' and uses each part to access the required parts in order to load them

`URLROOT/ControllerDirectory/ControllerName/ControllerMethod`

e.g. `myapp.com/user/users/login` 

## Example file structure

This framework has been designed to follow a file structure similar to Magento, with modularised components. 
Each component should contain its own controller and models. As well as any interfaces/abstracts that you wish to use. 

[Imgur](https://i.imgur.com/ehBm1C7.png)

