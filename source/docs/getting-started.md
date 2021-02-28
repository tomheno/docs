---
title: Getting Started
description:
extends: _layouts.documentation
section: content
---

# Getting Started

> Filament requires Laravel 8.x or higher, and PHP 7.4 or higher.

Installation is very simple:
```
composer require filament/filament
php artisan migrate
```

Create a user account for your admin panel by running
```
php artisan make:filament-user
```
and answering the input prompts.

Once you have a user account, you can sign in to the admin panel by visiting `/admin` in your browser.

To start building your admin panel, [create a resource](/docs/resources).

## Configuration {#configuration}

You may optionally publish the configuration file for Filament:
```
php artisan vendor:publish --tag=filament-config
```

## Upgrade Guide {#upgrade-guide}

To upgrade Filament to the latest version, you must run the following commands:
```
composer update
php artisan migrate
php artisan livewire:discover
php artisan view:clear
```

> If you have [published the configuration file](#configuration) for Filament, please ensure that you republish it when you upgrade.