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

namespace WBW\Library\Dropdown\Tests\Helper;

use WBW\Library\Dropdown\Helper\DropdownItemHelper;
use WBW\Library\Widget\Tests\Fixtures\Component\TestDropdownItem;
use WBW\Library\Widget\Component\DropdownItemInterface;
use WBW\Library\Dropdown\Tests\AbstractTestCase;

/**
 * Dropdown item helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Tests\Helper
 */
class DropdownItemHelperTest extends AbstractTestCase {

    /**
     * Test position()
     *
     * @return void
     */
    public function testPosition(): void {

        /** @var DropdownItemInterface[] $obj */
        $obj = [
            new TestDropdownItem(),
            new TestDropdownItem(),
            new TestDropdownItem(),
        ];

        DropdownItemHelper::position($obj);

        $i = -1;
        foreach ($obj as $current) {
            $this->assertEquals(++$i, $current->getPosition());
        }
    }

    /**
     * Test swap()
     *
     * @return void
     */
    public function testSwap(): void {

        $src = new DropdownItem();
        $src->setPosition(0);

        $dst = new DropdownItem();
        $dst->setPosition(1);

        DropdownItemHelper::swap($src, $dst);
        $this->assertEquals(0, $dst->getPosition());
        $this->assertEquals(1, $src->getPosition());
    }
}
