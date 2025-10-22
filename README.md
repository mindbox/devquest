# TYPO3 Starter

Dieses Projekt stellt eine minimal konfigurierte TYPO3-Installation mit Content Blocks und einer einfachen JSON-API bereit.

# Schnellstart

Verzeichnis wählen
- git clone git@github.com:mindbox/devquest.git devquest
- cd devquest
- ddev start
- ddev composer install
- ddev import-db --src=.ddev/db_dumps/devquest_db_start.sql.gz

=> Frontend: https://devquest.ddev.site/  
=> Backend: https://devquest.ddev.site/typo3  
Login: admin  
Passwort: 8nJAW>NQsf@V3CiUiC_!  

JSON-API: https://devquest.ddev.site/?type=171234

# Relevante Code-Dateien
Immo Model: packages/devquest_site/Classes/Domain/Model/Immo.php
Immo Repository: packages/devquest_site/Classes/Domain/Repository/ImmoRepository.php
Command: packages/devquest_site/Classes/Command/ImmoImportCommand.php
JSON Controller: packages/devquest_site/Classes/Controller/ImmoController.php

# Relevante Dokumentation
DDEV: https://docs.ddev.com/en/stable/  
TYPO3 Repository: https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ExtensionArchitecture/Extbase/Reference/Domain/Repository/Index.html  
TYPO3 CLI: https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ApiOverview/CommandControllers/Index.html#symfony-console-commands  
TYPO3 JSON: https://docs.typo3.org/p/lms/routes/main/en-us/Tutorials/Requirement/Property/Format/Json.html  