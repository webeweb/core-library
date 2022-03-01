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

use WBW\Library\Symfony\Provider\Assets\Color\PurpleColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Color\TestPurpleColorProviderTrait;

/**
 * Purple color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Color
 */
class PurpleColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setPurpleColorProvider()
     *
     * @return void
     */
    public function testSetPurpleColorProvider(): void {

        // Set a Purple color provider mock.
        $purpleColorProvider = $this->getMockBuilder(PurpleColorProviderInterface::class)->getMock();

        $obj = new TestPurpleColorProviderTrait();

        $obj->setPurpleColorProvider($purpleColorProvider);
        $this->assertSame($purpleColorProvider, $obj->getPurpleColorProvider());
    }
}
