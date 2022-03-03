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

use WBW\Library\Symfony\Provider\Color\YellowColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestYellowColorProviderTrait;

/**
 * Yellow color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class YellowColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setYellowColorProvider()
     *
     * @return void
     */
    public function testSetYellowColorProvider(): void {

        // Set a Yellow color provider mock.
        $yellowColorProvider = $this->getMockBuilder(YellowColorProviderInterface::class)->getMock();

        $obj = new TestYellowColorProviderTrait();

        $obj->setYellowColorProvider($yellowColorProvider);
        $this->assertSame($yellowColorProvider, $obj->getYellowColorProvider());
    }
}
