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

namespace WBW\Library\XmlTv\Tests\Traits\Strings;

use DateTime;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Strings\TestStringStartTrait;

/**
 * String start trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Strings
 */
class StringStartTraitTest extends AbstractTestCase {

    /**
     * Test setStart()
     *
     * @return void
     */
    public function testSetStart(): void {

        $obj = new TestStringStartTrait();

        $obj->setStart("20190730180000 +0200");
        $this->assertEquals("20190730180000 +0200", $obj->getStart());

        $this->assertInstanceOf(DateTime::class, $obj->getStartDateTime());
    }
}
