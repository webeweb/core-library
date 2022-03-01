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

use WBW\Library\Symfony\Provider\Assets\Color\BrownColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Color\TestBrownColorProviderTrait;

/**
 * Brown color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Color
 */
class BrownColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setBrownColorProvider()
     *
     * @return void
     */
    public function testSetBrownColorProvider(): void {

        // Set a Brown color provider mock.
        $brownColorProvider = $this->getMockBuilder(BrownColorProviderInterface::class)->getMock();

        $obj = new TestBrownColorProviderTrait();

        $obj->setBrownColorProvider($brownColorProvider);
        $this->assertSame($brownColorProvider, $obj->getBrownColorProvider());
    }
}
