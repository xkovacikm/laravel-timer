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
```
Dumps timer current time:
```php
tread();
```
Dumps timer and die:
```php
tstop();
```
