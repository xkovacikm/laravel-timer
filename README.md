# laravel-timer

A small tool to measure operations execution time. Forked from https://github.com/Astatroth/laravel-timer.

This version adds service provider, and facade automatically after installing.
Also, timer methods don't require parameter.

# Installation
```
composer require "astatroth/laravel-timer":"dev-master"
```

# Usage
```php
use Astatroth\LaravelTimer\Timer;
```
Just start the Timer with
```php
Timer::timerStart();
//or named one.
Timer::timerStart('name');
```
>If you start and stop the same timer multiple times, the measured intervals will be accumulated.

Reading specified timer current time:
```php
Timer::timerRead();
//or named one.
Timer::timerRead('name');
```
Stop the timer:
```php
Timer::timerStop();
//or named one.
Timer::timerStop('name');
```

Have fun! ;)
