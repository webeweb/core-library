<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use WBW\Library\Symfony\Manager\StylesheetManagerInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Manager\TestStylesheetManagerTrait;

/**
 * Stylesheet manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class StylesheetManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setStylesheetManager()
     *
     * @return void
     */
    public function testSetStylesheetManager(): void {

        // Set a Stylesheet manager mock.
        $stylesheetManager = $this->getMockBuilder(StylesheetManagerInterface::class)->getMock();

        $obj = new TestStylesheetManagerTrait();

        $obj->setStylesheetManager($stylesheetManager);
        $this->assertSame($stylesheetManager, $obj->getStylesheetManager());
    }
}
