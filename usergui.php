<?php

/**
 * @package modules\skeleton
 * @category Xaraya Web Applications Framework
 * @version 2.5.7
 * @copyright see the html/credits.html file in this release
 * @license GPL {@link http://www.gnu.org/licenses/gpl.html}
 * @link https://github.com/mikespub/xaraya-modules
 *
 * @author mikespub <mikespub@xaraya.com>
 **/

namespace Xaraya\Modules\Skeleton;

use Xaraya\Modules\DynamicData\Traits\UserGuiInterface;
use Xaraya\Modules\DynamicData\Traits\UserGuiTrait;

/**
 * Class instance to handle the Skeleton User GUI
 */
class UserGui implements UserGuiInterface
{
    /** @use UserGuiTrait<Module> */
    use UserGuiTrait;

    /**
     * User main GUI function
     * @param array<string, mixed> $args
     * @return array<mixed>
     */
    public function main(array $args = [])
    {
        $args['description'] ??= 'Description of Skeleton';

        return $args;
    }
}
