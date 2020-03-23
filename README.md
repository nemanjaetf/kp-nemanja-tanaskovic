# kp-nemanja-tanaskovic

## Requirements (EN)
### Project configuration
In order to start this project locally, first you need to create database and import tables from file:

> ./db.sql

Also, in PHP you need to configure database. This can be done by modifying:

> ./controller/database/factory/MySQLFactory.php

Right now, application is designed in a way that it use database information from

> ./config/php.ini

So, once deployed to actual server it needs to have database information inside php.ini file.

### Current live version of the website (for testing purposes)
Right now, application can be tested by accessing:

[http://nemanjatanaskovic.com/kp/view/register.php](http://nemanjatanaskovic.com/kp/view/register.php)

### Notes
In folder called "before" there is one PHP file that contains all code before refactoring.
Other folder, called "after" contains code refactorization from "before" folder using S.O.L.I.D principles.

## Konfiguracija (SRB)
### Konfiguracija projekta lokalno
Da bi projekat radio lokalno, potrebno je kreirati bazu i importovati tabele iz fajla:

> ./db.sql

Takodje, konfiguracija baze se vrsi putem klase:

> ./controller/database/factory/MySQLFactory.php

Trenutno je po projektu podeseno da cita parametre iz php.ini fajla koji se nalazi na lokaciji:

> ./config/php.ini

### Live verzija projekta
Projekat se moze testirati na stranici:

[http://nemanjatanaskovic.com/kp/view/register.php](http://nemanjatanaskovic.com/kp/view/register.php)

### Ostale informacije
U folderu "before" se nalazi kod pre refaktorizacije, dok se u folderu "after" nalazi kod nakon primene S.O.L.I.D principa.