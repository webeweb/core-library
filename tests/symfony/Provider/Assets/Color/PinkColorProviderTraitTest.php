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

use WBW\Library\Symfony\Provider\Assets\Color\PinkColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Color\TestPinkColorProviderTrait;

/**
 * Pink color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Color
 */
class PinkColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setPinkColorProvider()
     *
     * @return void
     */
    public function testSetPinkColorProvider(): void {

        // Set a Pink color provider mock.
        $pinkColorProvider = $this->getMockBuilder(PinkColorProviderInterface::class)->getMock();

        $obj = new TestPinkColorProviderTrait();

        $obj->setPinkColorProvider($pinkColorProvider);
        $this->assertSame($pinkColorProvider, $obj->getPinkColorProvider());
    }
}
