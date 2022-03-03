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

use WBW\Library\Symfony\Provider\Color\DeepOrangeColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestDeepOrangeColorProviderTrait;

/**
 * Deep orange color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class DeepOrangeColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setDeepOrangeColorProvider()
     *
     * @return void
     */
    public function testSetDeepOrangeColorProvider(): void {

        // Set a Deep orange color provider mock.
        $deepOrangeColorProvider = $this->getMockBuilder(DeepOrangeColorProviderInterface::class)->getMock();

        $obj = new TestDeepOrangeColorProviderTrait();

        $obj->setDeepOrangeColorProvider($deepOrangeColorProvider);
        $this->assertSame($deepOrangeColorProvider, $obj->getDeepOrangeColorProvider());
    }
}
