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
use WBW\Library\Symfony\Tests\Fixtures\Provider\TestStylesheetProviderTrait;

/**
 * Stylesheet provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class StylesheetProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setProvider()
     *
     * @return void
     */
    public function testSetProvider(): void {

        // Set a Stylesheet provider mock.
        $stylesheetProvider = $this->getMockBuilder(StylesheetProviderInterface::class)->getMock();

        $obj = new TestStylesheetProviderTrait();

        $obj->setStylesheetProvider($stylesheetProvider);
        $this->assertSame($stylesheetProvider, $obj->getStylesheetProvider());
    }
}
