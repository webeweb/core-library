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

use WBW\Library\Symfony\Provider\StylesheetProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Stylesheet provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class StylesheetProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("text/css; charset=utf-8", StylesheetProviderInterface::STYLESHEET_PROVIDER_CONTENT_TYPE);
        $this->assertEquals("css", StylesheetProviderInterface::STYLESHEET_PROVIDER_EXTENSION);
        $this->assertEquals("wbw.core.provider.stylesheet", StylesheetProviderInterface::STYLESHEET_PROVIDER_TAG_NAME);
    }
}
