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

use WBW\Library\Symfony\Provider\QuoteProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\TestQuoteProviderTrait;

/**
 * Quote provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class QuoteProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setProvider()
     *
     * @return void
     */
    public function testSetProvider(): void {

        // Set a Quote provider mock.
        $quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();

        $obj = new TestQuoteProviderTrait();

        $obj->setQuoteProvider($quoteProvider);
        $this->assertSame($quoteProvider, $obj->getQuoteProvider());
    }
}
