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

use WBW\Library\Symfony\Provider\Color\WhiteColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestWhiteColorProviderTrait;

/**
 * White color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class WhiteColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setWhiteColorProvider()
     *
     * @return void
     */
    public function testSetWhiteColorProvider(): void {

        // Set an White color provider mock.
        $whiteColorProvider = $this->getMockBuilder(WhiteColorProviderInterface::class)->getMock();

        $obj = new TestWhiteColorProviderTrait();

        $obj->setWhiteColorProvider($whiteColorProvider);
        $this->assertSame($whiteColorProvider, $obj->getWhiteColorProvider());
    }
}
