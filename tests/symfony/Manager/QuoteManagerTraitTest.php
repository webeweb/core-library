<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use WBW\Library\Symfony\Manager\QuoteManagerInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Manager\TestQuoteManagerTrait;

/**
 * Quote manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class QuoteManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setQuoteManager()
     *
     * @return void
     */
    public function testSetQuoteManager(): void {

        // Set a Quote manager mock.
        $quoteManager = $this->getMockBuilder(QuoteManagerInterface::class)->getMock();

        $obj = new TestQuoteManagerTrait();

        $obj->setQuoteManager($quoteManager);
        $this->assertSame($quoteManager, $obj->getQuoteManager());
    }
}
