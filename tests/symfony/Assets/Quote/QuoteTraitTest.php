<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Quote;

use WBW\Library\Symfony\Assets\Quote\QuoteInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\Quote\TestQuoteTrait;

/**
 * Quote trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Quote
 */
class QuoteTraitTest extends AbstractTestCase {

    /**
     * Tests setQuote()
     *
     * @return void
     */
    public function testSetQuote(): void {

        // Set a Quote mock.
        $quote = $this->getMockBuilder(QuoteInterface::class)->getMock();

        $obj = new TestQuoteTrait();

        $obj->setQuote($quote);
        $this->assertSame($quote, $obj->getQuote());
    }
}
