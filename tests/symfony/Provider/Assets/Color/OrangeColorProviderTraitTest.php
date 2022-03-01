<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Assets\Color;

use WBW\Library\Symfony\Provider\Assets\Color\OrangeColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Color\TestOrangeColorProviderTrait;

/**
 * Orange color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Color
 */
class OrangeColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setOrangeColorProvider()
     *
     * @return void
     */
    public function testSetOrangeColorProvider(): void {

        // Set an Orange color provider mock.
        $orangeColorProvider = $this->getMockBuilder(OrangeColorProviderInterface::class)->getMock();

        $obj = new TestOrangeColorProviderTrait();

        $obj->setOrangeColorProvider($orangeColorProvider);
        $this->assertSame($orangeColorProvider, $obj->getOrangeColorProvider());
    }
}
