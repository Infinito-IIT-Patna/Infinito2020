## How to Contribute
When contributing to this repository, please first discuss the change you wish to make via issue, email, or any other method with the owners of this repository before making a change.

## Issues
* Choose an issue to work on from [Issues](https://github.com/Infinito-IIT-Patna/Infinito2020/issues) and claim that issue.
* After the issue is assigned to you, start working on it. 

## Pull Request
* While pushing new changes to this repo make sure to **create a new branch** everytime.
* Push changes to origin i.e. your forked repo.
* Create a pull request with relevant heading. 
* Add supporting screenshots to establish the areas you have worked on.
* The repo maintainers will review your PR and accordingly merge or request changes.  

## How to setup SQL Database

* First of all go to `http://localhost/phpmyadmin/` and create a new database with its name as infinitoadmin.
* Import database tables using infinitoAdmin.sql file present in the project
* Next goto User Accnts -> root/localhost -> editpriviliges -> change password. 
* Set a simple password for your sql db. 
* Create a new file named config.php inside the root directory and copy paste the follwing contents 
`<?php
define('DBPASSWORD','<YOUR SQL PASSWORD>');`
* Now u might face difficulties in opening `http://localhost/phpmyadmin/` next time .
* To fix this goto XAMPP -> phpmyadmin -> config.inc.php OR config.php.inc and add ur password inside the given single quotes.
* Save the file and u will see phpMyAdmin Working again. 
* Dowload video available on teams for reference. 
