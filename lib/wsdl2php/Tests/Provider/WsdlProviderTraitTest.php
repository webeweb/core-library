<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Tests\Provider;

use WBW\Library\Wsdl2Php\Provider\WsdlProvider;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;
use WBW\Library\Wsdl2Php\Tests\Fixtures\Provider\TestWsdlProviderTrait;

/**
 * WSDL provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Provider
 */
class WsdlProviderTraitTest extends AbstractTestCase {

    /**
     * Test setProvider()
     *
     * @return void
     */
    public function testSetProvider(): void {

        // Set a Provider mock.
        $provider = new WsdlProvider($this->wsdl);

        $obj = new TestWsdlProviderTrait();

        $obj->setProvider($provider);
        $this->assertSame($provider, $obj->getProvider());
    }
}
