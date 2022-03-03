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

use WBW\Library\Symfony\Provider\Color\GreyColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestGreyColorProviderTrait;

/**
 * Grey color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class GreyColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setGreyColorProvider()
     *
     * @return void
     */
    public function testSetGreyColorProvider(): void {

        // Set a Grey color provider mock.
        $greyColorProvider = $this->getMockBuilder(GreyColorProviderInterface::class)->getMock();

        $obj = new TestGreyColorProviderTrait();

        $obj->setGreyColorProvider($greyColorProvider);
        $this->assertSame($greyColorProvider, $obj->getGreyColorProvider());
    }
}
