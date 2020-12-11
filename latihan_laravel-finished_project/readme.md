## Second Meeting
###Create View
View will represent UI / Frontend that will be seen by User
<ul>
    <li>Product</li>
    <li>Detail Product</li>
    <li>Transaction</li>
    <li>Detail Transaction</li>
</ul>

###Create Model & Migration
Model will represent object that will be manipulate
<ul>
    <li>Product</li>
    <li>Transaction</li>
    <li>Detail Transaction</li>
</ul>
For creating model we can create by manual in folder 'app/'<br> 
And the migrate table create in folder 'migrate'<br>
<br>
You can also run artisan command to automatically create Model & Migration


```php
php artisan make:model Product -migration
```
```php
php artisan make:model Product -m
```

###Create Controller
Controller will be represent the process of manipulating the model that already declare.<br>
For creating model we can create by manual in folder 'app/Http/Controllers'<br> 
<ul>
    <li>ProductController</li>
    <li>TransactionController</li>
</ul>

You can also run artisan command to automatically create Controller

```php
php artisan make:controller ProductController --resource
```
https://laravel.com/docs/5.8/controllers#resource-controllers is why we use resource controller
<hr>

###Automatically create model, migration, and controller
You can automatically create model, migration, and controller that automatiocally unbundled all by one command

```php
php artisan make:model Product -mcr
php artisan make:model Transaction -mcr
php artisan make:model DetailTransaction
```
