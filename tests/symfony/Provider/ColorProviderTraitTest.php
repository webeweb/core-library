<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider;

use WBW\Library\Symfony\Provider\ColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\TestColorProviderTrait;

/**
 * Color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class ColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setProvider()
     *
     * @return void
     */
    public function testSetProvider(): void {

        // Set a Color provider mock.
        $colorProvider = $this->getMockBuilder(ColorProviderInterface::class)->getMock();

        $obj = new TestColorProviderTrait();

        $obj->setColorProvider($colorProvider);
        $this->assertSame($colorProvider, $obj->getColorProvider());
    }
}
