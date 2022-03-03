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

use WBW\Library\Symfony\Provider\Color\RedColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Color\TestRedColorProviderTrait;

/**
 * Red color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class RedColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setRedColorProvider()
     *
     * @return void
     */
    public function testSetRedColorProvider(): void {

        // Set an Red color provider mock.
        $redColorProvider = $this->getMockBuilder(RedColorProviderInterface::class)->getMock();

        $obj = new TestRedColorProviderTrait();

        $obj->setRedColorProvider($redColorProvider);
        $this->assertSame($redColorProvider, $obj->getRedColorProvider());
    }
}
