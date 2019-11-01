<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolMenuVisibleTrait;

/**
 * Menu visible trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolMenuVisibleTraitTest extends AbstractTestCase {

    /**
     * Tests the setMenuVisible() method.
     *
     * @return void
     */
    public function testSetMenuVisible() {

        $obj = new TestBoolMenuVisibleTrait();

        $obj->setMenuVisible(true);
        $this->assertEquals(true, $obj->getMenuVisible());
    }
}
