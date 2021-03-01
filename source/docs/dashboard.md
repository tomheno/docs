---
title: Dashboard
description:
extends: _layouts.documentation
section: content
---

# Dashboard

Filament allows you to build dynamic custom dashboard widgets very easily. To get started building a `Stats` widget:
```
php artisan make:filament-widget Stats
```

This command will create two files - a widget class in the `/Widgets` directory of the Filament directory, and a view in the `/widgets` directory of the Filament views directory.

Widgets are pure [Laravel Livewire](https://laravel-livewire.com) components, so may use any features of that package.

> Pre-built widget templates are coming soon. For more information, please see our [Development Roadmap](/docs/roadmap).