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

use WBW\Library\Symfony\Provider\Color\BlueGreyColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestBlueGreyColorProviderTrait;

/**
 * Blue grey color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class BlueGreyColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setBlueGreyColorProvider()
     *
     * @return void
     */
    public function testSetBlueGreyColorProvider(): void {

        // Set an Blue grey color provider mock.
        $blueGreyColorProvider = $this->getMockBuilder(BlueGreyColorProviderInterface::class)->getMock();

        $obj = new TestBlueGreyColorProviderTrait();

        $obj->setBlueGreyColorProvider($blueGreyColorProvider);
        $this->assertSame($blueGreyColorProvider, $obj->getBlueGreyColorProvider());
    }
}
