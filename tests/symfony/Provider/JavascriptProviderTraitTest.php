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

use WBW\Library\Symfony\Provider\JavascriptProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\TestJavascriptProviderTrait;

/**
 * Javascript provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class JavascriptProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setProvider()
     *
     * @return void
     */
    public function testSetProvider(): void {

        // Set a Javascript provider mock.
        $javascriptProvider = $this->getMockBuilder(JavascriptProviderInterface::class)->getMock();

        $obj = new TestJavascriptProviderTrait();

        $obj->setJavascriptProvider($javascriptProvider);
        $this->assertSame($javascriptProvider, $obj->getJavascriptProvider());
    }
}
