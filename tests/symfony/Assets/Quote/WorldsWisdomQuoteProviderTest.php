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

use WBW\Library\Symfony\Assets\Quote\WorldsWisdomQuoteProvider;
use WBW\Library\Symfony\Assets\Quote\YamlQuoteProvider;
use WBW\Library\Symfony\Provider\Assets\QuoteProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * World's wisdom quote provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Quote
 */
class WorldsWisdomQuoteProviderTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertStringEndsWith("/Resources/assets/quote/WorldsWisdom.fr.yml", WorldsWisdomQuoteProvider::RESOURCE_PATH);

        $obj = new WorldsWisdomQuoteProvider();

        $this->assertInstanceOf(QuoteProviderInterface::class, $obj);
        $this->assertInstanceOf(YamlQuoteProvider::class, $obj);
    }
}
