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
```

Create a user account for your admin panel by running
```
php artisan make:filament-user
```
and answering the prompts.

Once you have a user account, you can sign in to the admin panel by visiting `/admin` in your browser.

To start building your admin panel, [create a resource](/docs/resources#getting-started).