<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Arrays;

use WBW\Library\XmlTv\Model\Icon;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayIconsTrait;

/**
 * Array icons trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayIconsTraitTest extends AbstractTestCase {

    /**
     * Test addIcon()
     *
     * @return void
     */
    public function testAddIcon(): void {

        // Set an Icon mock.
        $icon = new Icon();

        $obj = new TestArrayIconsTrait();

        $obj->addIcon($icon);
        $this->assertSame($icon, $obj->getIcons()[0]);
        $this->assertEquals(1, $obj->getNumberIcons());
        $this->assertTrue($obj->hasIcons());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayIconsTrait();

        $this->assertEquals([], $obj->getIcons());
        $this->assertEquals(0, $obj->getNumberIcons());
        $this->assertFalse($obj->hasIcons());
    }
}
