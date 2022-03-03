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

use WBW\Library\Symfony\Provider\Color\TealColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestTealColorProviderTrait;

/**
 * Teal color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class TealColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setTealColorProvider()
     *
     * @return void
     */
    public function testSetTealColorProvider(): void {

        // Set a Teal color provider mock.
        $tealColorProvider = $this->getMockBuilder(TealColorProviderInterface::class)->getMock();

        $obj = new TestTealColorProviderTrait();

        $obj->setTealColorProvider($tealColorProvider);
        $this->assertSame($tealColorProvider, $obj->getTealColorProvider());
    }
}
