# PHP Library Crypt

The Crypt package provides pure PHP encryption methods with no external dependencies.

## Background ##

## Installation ##

Add the following to your composer file:

```json
   "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/sinevia/php-library-crypt.git"
        }
    ],
    "require": {
        "sinevia/php-library-crypt": "dev-master"
    },
```

## Usage ##


```php
$pass = 'test';

$enc = Sinevia\Crypt::xorEncode('test',$pass);

$dec = Sinevia\Crypt::xorDecode(enc,$pass);
```
