# Skeleton
Skeleton for a new Xaraya module

## Version highlights

### 1.0.0 Initial version

This version aligns with [Xaraya 2.5.0](https://github.com/mikespub/xaraya-core/releases/tag/v2.5.0) and uses traditional user gui and user api functions in `xaruser.php` and `xaruserapi.php`.

The actual module code is in `Xaraya\Modules\Skeleton` classes with DynamicData userapi and usergui traits to support DD out of the box.

This version also supports Twig templates if enabled in Xaraya `html/index.php`:
```php
/** un-comment the next line to activate Twig templates */
$context['twig'] = true;
```

### 2.5.3 Module classes via core

This version aligns with [Xaraya 2.5.3](https://github.com/mikespub/xaraya-core/releases/tag/v2.5.3) and uses `xarMod::getGUI()` resp. `xarMod::getAPI()` to load module classes from the core via the new module class in  `class/module.php`.

### 2.5.5 Align with trait namespaces

This version aligns with [Xaraya 2.5.4](https://github.com/mikespub/xaraya-core/releases/tag/v2.5.4) and uses the `Xaraya\Modules` namespace for module traits.

### 2.x.x Use module classes directly

TODO
