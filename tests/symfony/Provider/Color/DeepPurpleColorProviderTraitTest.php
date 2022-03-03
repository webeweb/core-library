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

use WBW\Library\Symfony\Provider\Color\DeepPurpleColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestDeepPurpleColorProviderTrait;

/**
 * Deep purple color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class DeepPurpleColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setDeepPurpleColorProvider()
     *
     * @return void
     */
    public function testSetDeepPurpleColorProvider(): void {

        // Set an Deep purple color provider mock.
        $deepPurpleColorProvider = $this->getMockBuilder(DeepPurpleColorProviderInterface::class)->getMock();

        $obj = new TestDeepPurpleColorProviderTrait();

        $obj->setDeepPurpleColorProvider($deepPurpleColorProvider);
        $this->assertSame($deepPurpleColorProvider, $obj->getDeepPurpleColorProvider());
    }
}
