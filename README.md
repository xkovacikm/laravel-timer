# laravel-timer

A small tool to measure operations execution time. Forked from https://github.com/Astatroth/laravel-timer.

This version adds service provider, and facade automatically after installing.
Also, timer methods don't require parameter.

# Installation
```
composer require xkovacikm/laravel-timer
```

# Usage

Start the Timer with:
```php
tstart();
//or named one.
tstart('name');
```
>If you start and stop the same timer multiple times, the measured intervals will be accumulated.

Reading specified timer current time:
```php
tread();
//or named one.
tread('name');
```
Stop the timer:
```php
tstop();
//or named one.
tstop('name');
```
