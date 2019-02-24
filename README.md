# Phantasy-PHP [![Coverage Status](https://coveralls.io/repos/github/mckayb/phantasy-php/badge.svg?branch=master)](https://coveralls.io/github/mckayb/phantasy-php)
Curried versions of common PHP functions.

## Getting Started

### Installation
`composer require mckayb/phantasy-php`

### Usage
```php
use function Phantasy\PHP\{explode, implode};

$explodeBySpace = explode(' ');
$arr = $explodeBySpace('foo bar');
// ['foo', 'bar']

$implodeWithCommas = implode('-');
$implodeWithCommas($arr);
// 'foo,bar'
```
For more information, read the [docs!](https://github.com/mckayb/phantasy-php/tree/master/docs)

### What's Included
I'm slowly working my way up to all of the PHP functions, but I should have most of the ones that people use in their everyday code covered. If I'm missing one that you need, let me know by opening up an issue or a pull request.

### Contributing
Find a bug? Want to make any additions? Just create an issue or open up a pull request.

### Inspiration
  * [LambdaJS](https://github.com/loop-recur/lambdajs)


