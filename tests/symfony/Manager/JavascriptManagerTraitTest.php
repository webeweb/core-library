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

use WBW\Library\Symfony\Manager\JavascriptManagerInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Manager\TestJavascriptManagerTrait;

/**
 * Javascript manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class JavascriptManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setJavascriptManager()
     *
     * @return void
     */
    public function testSetJavascriptManager(): void {

        // Set a Javascript manager mock.
        $javascriptManager = $this->getMockBuilder(JavascriptManagerInterface::class)->getMock();

        $obj = new TestJavascriptManagerTrait();

        $obj->setJavascriptManager($javascriptManager);
        $this->assertSame($javascriptManager, $obj->getJavascriptManager());
    }
}
