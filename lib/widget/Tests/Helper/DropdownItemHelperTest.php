<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Helper;

use WBW\Library\Widget\Component\DropdownItemInterface;
use WBW\Library\Widget\Helper\DropdownItemHelper;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestDropdownItem;

/**
 * Dropdown item helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Helper
 */
class DropdownItemHelperTest extends AbstractTestCase {

    /**
     * Test setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        /** @var DropdownItemInterface[] $obj */
        $obj = [
            new TestDropdownItem(),
            new TestDropdownItem(),
            new TestDropdownItem(),
        ];

        DropdownItemHelper::setPosition($obj);

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

        $src = new TestDropdownItem();
        $src->setPosition(0);

        $dst = new TestDropdownItem();
        $dst->setPosition(1);

        DropdownItemHelper::swap($src, $dst);
        $this->assertEquals(0, $dst->getPosition());
        $this->assertEquals(1, $src->getPosition());
    }
}
