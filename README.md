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

This version aligns with [Xaraya 2.5.3](https://github.com/mikespub/xaraya-core/releases/tag/v2.5.3) and uses `xarMod::usergui()` resp. `xarMod::userapi()` to load module classes from the core via the new module class in  `module.php`.

### 2.5.5 Align with trait namespaces

This version aligns with [Xaraya 2.5.4](https://github.com/mikespub/xaraya-core/releases/tag/v2.5.4) and uses the `Xaraya\Modules` namespace for module traits.

### 2.6.0 Use module classes directly

This version aligns with [Xaraya 2.5.5](https://github.com/mikespub/xaraya-core/releases/tag/v2.5.5) and Xaraya core can call the module api, gui and installer class methods directly.

Procedural functions like `skeleton_userapi_getitemtypes()` in xaruserapi.php, xaruser.php or xarinit.php files are **not** needed anymore. This changes from the traditional module structure used since Xaraya 1.x, and allows modules to be developped in a more object-oriented way.

*Note that traditional function files are still supported and will take precedence if available.*
