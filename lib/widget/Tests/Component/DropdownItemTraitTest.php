<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\DropdownItemInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestDropdownItemTrait;

/**
 * Dropdown item trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class DropdownItemTraitTest extends AbstractTestCase {

    /**
     * Test setDropdownItem()
     *
     * @return void
     */
    public function testSetDropdownItem(): void {

        // Set a Dropdown item mock.
        $dropdownItem = $this->getMockBuilder(DropdownItemInterface::class)->getMock();

        $obj = new TestDropdownItemTrait();

        $obj->setDropdownItem($dropdownItem);
        $this->assertSame($dropdownItem, $obj->getDropdownItem());
    }
}
