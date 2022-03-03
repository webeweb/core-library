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

use WBW\Library\Symfony\Provider\Color\IndigoColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestIndigoColorProviderTrait;

/**
 * Indigo color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class IndigoColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setIndigoColorProvider()
     *
     * @return void
     */
    public function testSetIndigoColorProvider(): void {

        // Set an Indigo color provider mock.
        $indigoColorProvider = $this->getMockBuilder(IndigoColorProviderInterface::class)->getMock();

        $obj = new TestIndigoColorProviderTrait();

        $obj->setIndigoColorProvider($indigoColorProvider);
        $this->assertSame($indigoColorProvider, $obj->getIndigoColorProvider());
    }
}
