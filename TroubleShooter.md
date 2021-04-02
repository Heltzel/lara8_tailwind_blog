# Troubleshooter

### Problem:
#### Tag: sqlite
```php
$ php artisan migrate:rollback
Rolling back: 2021_04_01_183438_add_username_to_users_table

   Error 

  Class "Doctrine\DBAL\Driver\AbstractSQLiteDriver" not found
  ```
  ### Solution:
  <dd>
This new version is having this issue. a workaround for that can be:

change version to "doctrine/dbal": "^2.12.1" in composer.json file
run composer update
Share
</dd>


https://stackoverflow.com/questions/64869825/artisan-migration-error-class-doctrine-dbal-driver-pdomysql-driver-not-fo


***
