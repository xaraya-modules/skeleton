<?php
/**
 * @package modules\skeleton
 * @category Xaraya Web Applications Framework
 * @version 2.5.3
 * @copyright see the html/credits.html file in this release
 * @license GPL {@link http://www.gnu.org/licenses/gpl.html}
 * @link http://xaraya.info/index.php/release/18257.html
 */

/**
 * Utility function to retrieve the list of itemtypes of this module (if any).
 * @uses Xaraya\Modules\Skeleton\UserApi::getItemTypes()
 * @param array<string, mixed> $args array of optional parameters
 * @return array<mixed> the itemtypes of this module and their description
 */
function skeleton_userapi_getitemtypes(array $args = [], $context = null)
{
    $userapi = xarMod::getAPI('skeleton');
    $userapi->setContext($context);
    return $userapi->getItemTypes($args);
}

/**
 * Utility function to pass individual item links to whoever
 * @uses Xaraya\Modules\Skeleton\UserApi::getItemLinks()
 * @param array<string, mixed> $args array of optional parameters
 *        string   $args['itemtype'] item type (optional)
 *        array    $args['itemids'] array of item ids to get
 * @return array<mixed> containing the itemlink(s) for the item(s).
 */
function skeleton_userapi_getitemlinks(array $args = [], $context = null)
{
    $userapi = xarMod::getAPI('skeleton');
    $userapi->setContext($context);
    return $userapi->getItemLinks($args);
}
