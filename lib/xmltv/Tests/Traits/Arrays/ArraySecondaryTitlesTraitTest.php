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

use WBW\Library\XmlTv\Model\SecondaryTitle;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArraySecondaryTitlesTrait;

/**
 * Array secondary titles trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArraySecondaryTitlesTraitTest extends AbstractTestCase {

    /**
     * Test addSecondaryTitle()
     *
     * @return void
     */
    public function testAddSecondaryTitle(): void {

        // Set a Secondary title mock.
        $secondaryTitle = new SecondaryTitle();

        $obj = new TestArraySecondaryTitlesTrait();

        $obj->addSecondaryTitle($secondaryTitle);
        $this->assertSame($secondaryTitle, $obj->getSecondaryTitles()[0]);
        $this->assertEquals(1, $obj->getNumberSecondaryTitles());
        $this->assertTrue($obj->hasSecondaryTitles());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArraySecondaryTitlesTrait();

        $this->assertEquals([], $obj->getSecondaryTitles());
        $this->assertEquals(0, $obj->getNumberSecondaryTitles());
        $this->assertFalse($obj->hasSecondaryTitles());
    }
}
