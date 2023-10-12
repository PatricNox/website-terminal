# Website-Terminal
A Command line interface, inside a website!

<p align="center">
<img src="https://i.imgur.com/ccisFZ6.png"/>
</p>

## Compability
This Web app based Command Line utility (CMD) has the compability for any CLI software.
Following are supported by this project:

* Git
* npm
* node
* php
* .. all of them!

## Usage with Docker

The modern way is using [Docker](https://docs.docker.com/engine/install/). You'll only need Docker and Docker Compose installed on your system.

1. Clone the repository:
   ```bash
   git clone git@github.com:PatricNox/website-terminal.git
   # OR
   git clone https://github.com/PatricNox/website-terminal.git
   ```
2. Navigate to the project directory:
    ```bash
    cd website-terminal
   ```
3. Run the following command to start the website:
   ```bash
    docker-compose up -d
   ```
    The website will be accessible at http://localhost.
4. To stop and remove the containers, use:
   ```bash
    docker-compose down --remove-orphans
    ```
## Usage with dedicated server 
You will need a web server (XAMPP for example) for this:

 1.   Download and extract the project files inside your web server's www/htdocs directory.

 2.   Run the website like a normal website!

## Why you should use this project:
Maybe you want to access a computer's shell from another location, having the terminal placed and password secured on the locations host. 

## DISCLAIMER
**USE AT YOUR OWN RISK**

Any damage done to your or someone elses property is not to be held responsible by PatricNox, github or anyone/anything related to the project. 

If to be used like in the "why" section, **do strongly protect** the access to it as it involves **full** access to a computer's system.
> Only to the computer which runs the webserver where the terminal is inside!
