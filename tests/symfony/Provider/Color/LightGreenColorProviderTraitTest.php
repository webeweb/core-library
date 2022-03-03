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

use WBW\Library\Symfony\Provider\Color\LightGreenColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestLightGreenColorProviderTrait;

/**
 * Light green color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class LightGreenColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setLightGreenColorProvider()
     *
     * @return void
     */
    public function testSetLightGreenColorProvider(): void {

        // Set a Light green color provider mock.
        $lightGreenColorProvider = $this->getMockBuilder(LightGreenColorProviderInterface::class)->getMock();

        $obj = new TestLightGreenColorProviderTrait();

        $obj->setLightGreenColorProvider($lightGreenColorProvider);
        $this->assertSame($lightGreenColorProvider, $obj->getLightGreenColorProvider());
    }
}
