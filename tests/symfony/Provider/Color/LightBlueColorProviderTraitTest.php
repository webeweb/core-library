<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Color;

use WBW\Library\Symfony\Provider\Color\LightBlueColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestLightBlueColorProviderTrait;

/**
 * Light blue color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class LightBlueColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setLightBlueColorProvider()
     *
     * @return void
     */
    public function testSetLightBlueColorProvider(): void {

        // Set a Light blue color provider mock.
        $lightBlueColorProvider = $this->getMockBuilder(LightBlueColorProviderInterface::class)->getMock();

        $obj = new TestLightBlueColorProviderTrait();

        $obj->setLightBlueColorProvider($lightBlueColorProvider);
        $this->assertSame($lightBlueColorProvider, $obj->getLightBlueColorProvider());
    }
}
