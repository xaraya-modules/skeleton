<?php

/**
 * Skeleton version information
 *
 * @package modules\skeleton
 * @copyright (C) 2024 Mike's Pub
 * @license GPL {@link http://www.gnu.org/licenses/gpl.html}
 * @link https://github.com/xaraya-modules
 * @author mikespub
 */

namespace Xaraya\Modules\Skeleton;

class Version
{
    /**
     * Get module version information
     *
     * @return array<string, mixed>
     */
    public function __invoke(): array
    {
        return [
            'name' => 'skeleton',
            'id' => '123456',
            'version' => '2.5.3',
            'displayname' => 'Skeleton',
            'description' => 'Skeleton for a new Xaraya module',
            'credits' => '',
            'help' => '',
            'changelog' => '',
            'license' => '',
            'official' => false,
            'author' => 'mikespub',
            'contact' => 'https://github.com/xaraya-modules/skeleton',
            'admin' => false,
            'user' => true,
            'class' => 'Complete',
            'category' => 'Content',
            'namespace' => 'Xaraya\\Modules\\Skeleton',
            'securityschema'
             => [
             ],
            'dependency'
             => [
             ],
            'twigtemplates' => true,
            'dependencyinfo'
             => [
                 0
                  => [
                      'name' => 'Xaraya Core',
                      'version_ge' => '2.4.1',
                  ],
             ],
        ];
    }
}
