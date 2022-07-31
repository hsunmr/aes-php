## hsunmr/aes-php
>  PHP implementations of advanced encryption standard

## Install
```
composer require hsunmr/aes-php
```

## Usage
```php
<?php

required 'vendor/autoload.php';

use Hsunmr\AES;

// encrypt
AES::encrypt($original_string, $cipher_algo, $key, $iv);

// decrypt
AES::encrypt($encrypted_string, $cipher_algo, $key, $iv);

```

## Example
```php
<?php

required 'vendor/autoload.php';

use Hsunmr\AES;

$original_string = 'test';
$cipher_algo     = 'AES-256-CBC';
$key             = '0USLKHBKDQQ2T9Z7IF1GNEYJLD6ZUWGO';
$iv              = 'KGOV99FKY9O9J15H';

// encrypt
$encrypted_string = AES::encrypt($original_string, $cipher_algo, $key, $iv);
var_dump($encrypted_string); //string(24) "uwZOvY9RAtYHNzuOAZ2LuA=="

// decrypt
$result = AES::decrypt($encrypted_string, $cipher_algo, $key, $iv);
var_dump($result); //string(4) "test"
```