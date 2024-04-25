<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Factory;

use WBW\Library\Widget\Factory\DropdownItemFactory;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestDropdownItem;

/**
 * Dropdown item factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Factory
 */
class DropdownItemFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new TestDropdownItem();
        $obj->setByDefault(true);
        $obj->setLabel("label");
        $obj->setPosition(1);

        $res = DropdownItemFactory::copy($obj, new TestDropdownItem());
        $this->assertEquals($obj->getByDefault(), $res->getByDefault());
        $this->assertEquals($obj->getLabel(), $res->getLabel());
        $this->assertEquals($obj->getPosition(), $res->getPosition());
    }
}
