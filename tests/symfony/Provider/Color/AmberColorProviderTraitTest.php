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

use WBW\Library\Symfony\Provider\Color\AmberColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestAmberColorProviderTrait;

/**
 * Amber color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class AmberColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setAmberColorProvider()
     *
     * @return void
     */
    public function testSetAmberColorProvider(): void {

        // Set an Amber color provider mock.
        $amberColorProvider = $this->getMockBuilder(AmberColorProviderInterface::class)->getMock();

        $obj = new TestAmberColorProviderTrait();

        $obj->setAmberColorProvider($amberColorProvider);
        $this->assertSame($amberColorProvider, $obj->getAmberColorProvider());
    }
}
