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

use WBW\Library\Symfony\Provider\Color\CyanColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestCyanColorProviderTrait;

/**
 * Cyan color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class CyanColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setCyanColorProvider()
     *
     * @return void
     */
    public function testSetCyanColorProvider(): void {

        // Set a Cyan color provider mock.
        $cyanColorProvider = $this->getMockBuilder(CyanColorProviderInterface::class)->getMock();

        $obj = new TestCyanColorProviderTrait();

        $obj->setCyanColorProvider($cyanColorProvider);
        $this->assertSame($cyanColorProvider, $obj->getCyanColorProvider());
    }
}
