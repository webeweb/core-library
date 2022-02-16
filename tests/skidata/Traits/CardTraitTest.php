<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Tests\Traits;

use DateTime;
use Exception;
use WBW\Library\SkiData\Tests\AbstractTestCase;
use WBW\Library\SkiData\Tests\Fixtures\Traits\TestCardTrait;

/**
 * Card trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Traits
 */
class CardTraitTest extends AbstractTestCase {

    /**
     * Tests setBlocked()
     *
     * @return void
     */
    public function testSetBlocked(): void {

        $obj = new TestCardTrait();

        $obj->setBlocked(true);
        $this->assertTrue($obj->getBlocked());
    }

    /**
     * Tests setBlockedDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBlockedDate(): void {

        $obj = new TestCardTrait();

        $obj->setBlockedDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getBlockedDate()->format("2018-08-30"));
    }
}
