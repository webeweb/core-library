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

use WBW\Library\Symfony\Provider\Color\BlackColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestBlackColorProviderTrait;

/**
 * Black color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class BlackColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setBlackColorProvider()
     *
     * @return void
     */
    public function testSetBlackColorProvider(): void {

        // Set an Black color provider mock.
        $blackColorProvider = $this->getMockBuilder(BlackColorProviderInterface::class)->getMock();

        $obj = new TestBlackColorProviderTrait();

        $obj->setBlackColorProvider($blackColorProvider);
        $this->assertSame($blackColorProvider, $obj->getBlackColorProvider());
    }
}
