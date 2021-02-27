---
title: Navigation
description:
extends: _layouts.documentation
section: content
---

# Navigation

By default, Filament will register navigation items for each of your [resources](/docs/resources) and [custom pages](/docs/pages). These classes contain static properties that you can override, to configure that navigation item and its order:
```php
public static $label = 'Custom Navigation Label';

public static $icon = 'heroicon-o-document-text';

public static $sort = 3;
```

Alternatively, you may completely override the static `navigationItems()` method on the class and register as many custom navication items as you require:
```php
use Filament\NavigationItem;

public static function navigationItems()
{
    return [
        NavigationItem::make($label, $url)
            ->activeRule($activeRule)
            ->icon($icon = 'heroicon-o-collection')
            ->sort($sort = 0),
    ];
}
```