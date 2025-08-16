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

use WBW\Library\XmlTv\Model\Title;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayTitlesTrait;

/**
 * Array titles trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayTitlesTraitTest extends AbstractTestCase {

    /**
     * Test addTitle()
     *
     * @return void
     */
    public function testAddTitle(): void {

        // Set a Title mock.
        $title = new Title();

        $obj = new TestArrayTitlesTrait();

        $obj->addTitle($title);
        $this->assertSame($title, $obj->getTitles()[0]);
        $this->assertEquals(1, $obj->getNumberTitles());
        $this->assertTrue($obj->hasTitles());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayTitlesTrait();

        $this->assertEquals([], $obj->getTitles());
        $this->assertEquals(0, $obj->getNumberTitles());
        $this->assertFalse($obj->hasTitles());
    }
}
