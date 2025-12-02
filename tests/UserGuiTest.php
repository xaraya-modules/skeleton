<?php

namespace Xaraya\Modules\Skeleton\Tests;

use Xaraya\Modules\TestHelper;
use Xaraya\Modules\Skeleton\UserGui;
use Xaraya\Services\xar;

final class UserGuiTest extends TestHelper
{
    protected function setUp(): void {}

    protected function tearDown(): void {}

    public function testUserGui(): void
    {
        $expected = UserGui::class;
        /** @var UserGui $usergui */
        $usergui = xar::mod()->usergui('skeleton');
        $this->assertEquals($expected, $usergui::class);
    }

    public function testUserMain(): void
    {
        $context = $this->createContext();
        /** @var UserGui $usergui */
        $usergui = xar::mod()->usergui('skeleton');
        $usergui->setContext($context);

        $args = ['hello' => 'world'];
        $data = $usergui->main($args);

        $expected = array_merge($args, [
            'context' => $context,
            'description' => 'Description of Skeleton',
        ]);
        $this->assertEquals($expected, $data);
    }

    public function testXarModGuiFunc(): void
    {
        // initialize modules
        //xar::mod()->init();
        // needed to initialize the template cache
        xar::tpl()->init();
        $expected = 'Description of Skeleton';
        $output = (string) xar::mod()->guiFunc('skeleton');
        $this->assertStringContainsString($expected, $output);
    }

    public function testXarModGuiFuncInvalidName(): void
    {
        // initialize modules
        //xar::mod()->init();
        // needed to initialize the template cache
        xar::tpl()->init();
        $expected = 'Function not found';
        $output = (string) xar::mod()->guiFunc('skeleton', 'user', 'invalid');
        $this->assertStringContainsString($expected, $output);
    }
}
