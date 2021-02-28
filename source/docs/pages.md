---
title: Custom Pages
description:
extends: _layouts.documentation
section: content
---

# Custom Pages

- [Authorization](#authorization)
- [Customization](#customization)

Filament allows you to create completely custom pages for the admin panel. To create a new page, you can use:
```
php artisan make:filament-page Settings
```
This command will create two files - a page class in the `/Pages` directory of the Filament directory, and a view in the `/pages` directory of the Filament views directory.

Page classes are essentially [Laravel Livewire](https://laravel-livewire.com) components with custom integration utilities for use with Filament.

## Authorization {#authorization}

## Customization {#customization}

Filament will automatically generate a title, navigation label and URL (slug) for your page based on its name. You may override it using static properties of your page class:
```php
public static $label = 'Custom Navigation Label';

public static $slug = 'custom-url-slug';

public static $title = 'Custom Page Title';
```