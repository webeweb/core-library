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

use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\TestProviderTrait;

/**
 * Provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class ProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setProvider()
     *
     * @return void
     */
    public function testSetProvider(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new TestProviderTrait();

        $obj->setProvider($provider);
        $this->assertSame($provider, $obj->getProvider());
    }
}
