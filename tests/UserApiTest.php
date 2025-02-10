<?php

use Xaraya\Modules\TestHelper;
use Xaraya\Modules\Skeleton\UserApi;

final class UserApiTest extends TestHelper
{
    protected function setUp(): void {}

    protected function tearDown(): void {}

    public function testUserApi(): void
    {
        $expected = 0;
        /** @var UserApi $userapi */
        $userapi = xarMod::userapi('skeleton');
        $itemtypes = $userapi->getItemTypes();
        $this->assertCount($expected, $itemtypes);
    }

    public function testXarModApiFunc(): void
    {
        // initialize modules
        //xarMod::init();
        $expected = [];
        $result = xarMod::apiFunc('skeleton', 'user', 'getitemtypes');
        $this->assertEquals($expected, $result);
    }

    public function testXarModApiFuncInvalidName(): void
    {
        // initialize modules
        //xarMod::init();
        $this->expectException(FunctionNotFoundException::class);
        $expected = 'The function "skeleton_userapi_invalid" could not be found or not be loaded.';
        $this->expectExceptionMessage($expected);
        $result = xarMod::apiFunc('skeleton', 'user', 'invalid');
    }
}
