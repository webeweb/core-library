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

use WBW\Library\Symfony\Provider\Color\GreenColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestGreenColorProviderTrait;

/**
 * Green color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class GreenColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setGreenColorProvider()
     *
     * @return void
     */
    public function testSetGreenColorProvider(): void {

        // Set a Green color provider mock.
        $greenColorProvider = $this->getMockBuilder(GreenColorProviderInterface::class)->getMock();

        $obj = new TestGreenColorProviderTrait();

        $obj->setGreenColorProvider($greenColorProvider);
        $this->assertSame($greenColorProvider, $obj->getGreenColorProvider());
    }
}
