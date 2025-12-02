<?php

namespace Xaraya\Modules\Skeleton\Tests;

use Xaraya\Modules\TestHelper;
use Xaraya\Modules\Skeleton\UserApi;
use Xaraya\Services\xar;
use FunctionNotFoundException;

final class UserApiTest extends TestHelper
{
    protected function setUp(): void {}

    protected function tearDown(): void {}

    public function testUserApi(): void
    {
        $expected = 0;
        /** @var UserApi $userapi */
        $userapi = xar::mod()->userapi('skeleton');
        $itemtypes = $userapi->getItemTypes();
        $this->assertCount($expected, $itemtypes);
    }

    public function testXarModApiFunc(): void
    {
        // initialize modules
        //xar::mod()->init();
        $expected = [];
        $result = xar::mod()->apiFunc('skeleton', 'user', 'getitemtypes');
        $this->assertEquals($expected, $result);
    }

    public function testXarModApiFuncInvalidName(): void
    {
        // initialize modules
        //xar::mod()->init();
        $this->expectException(FunctionNotFoundException::class);
        $expected = 'The function "skeleton_userapi_invalid" could not be found or not be loaded.';
        $this->expectExceptionMessage($expected);
        $result = xar::mod()->apiFunc('skeleton', 'user', 'invalid');
    }
}
