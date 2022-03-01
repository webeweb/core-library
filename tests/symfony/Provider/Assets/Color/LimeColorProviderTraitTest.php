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

use WBW\Library\Symfony\Provider\Assets\Color\LimeColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Color\TestLimeColorProviderTrait;

/**
 * Lime color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Color
 */
class LimeColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setLimeColorProvider()
     *
     * @return void
     */
    public function testSetLimeColorProvider(): void {

        // Set a Lime color provider mock.
        $limeColorProvider = $this->getMockBuilder(LimeColorProviderInterface::class)->getMock();

        $obj = new TestLimeColorProviderTrait();

        $obj->setLimeColorProvider($limeColorProvider);
        $this->assertSame($limeColorProvider, $obj->getLimeColorProvider());
    }
}
