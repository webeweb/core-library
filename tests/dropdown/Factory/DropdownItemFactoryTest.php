<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Dropdown\Tests\Factory;

use WBW\Library\Dropdown\Factory\DropdownItemFactory;
use WBW\Library\Dropdown\Model\DropdownItem;
use WBW\Library\Dropdown\Tests\AbstractTestCase;

/**
 * Dropdown item factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Tests\Factory
 */
class DropdownItemFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new DropdownItem();
        $obj->setByDefault(true);
        $obj->setLabel("label");
        $obj->setPosition(1);

        $res = DropdownItemFactory::copy($obj, new DropdownItem());
        $this->assertEquals($obj->getByDefault(), $res->getByDefault());
        $this->assertEquals($obj->getLabel(), $res->getLabel());
        $this->assertEquals($obj->getPosition(), $res->getPosition());
    }
}
