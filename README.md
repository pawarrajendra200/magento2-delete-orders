# Overview
## Purpose of module

TechRaj\module-delete-orders module is responsible for helps admins completely remove unnecessary orders, invoices, shipments and credit memos which are arised during testing process. This helps simplify order management and get these arranged neater.

## Highlight features

- Delete mass orders
- Ability to delete all
- Delete related data safely
## Deployment
## System requirements

## Install
### Add repository
Repositry : composer config repositories.rajtech-delete-orders git https://github.com/pawarrajendra200/magento2-delete-orders.git
### Install the Extension using Composer
composer require tech-raj/module-delete-orders
### Enable the Extension

php bin/magento module:enable TechRaj_DeleteOrders

### Last execute magento commanads
1) php bin/magento setup:upgrade
2) php bin/magento setup:di:compile
3) php bin/magento setup:static-content:deploy
4) php bin/magento setup:cache:flush
