<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\SkiData\Traits;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\SkiData\Traits\TestCardTrait;

/**
 * Card trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\SkiData\Traits
 */
class CardTraitTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestCardTrait();

        $this->assertNull($obj->getBlocked());
        $this->assertNull($obj->getBlockedDate());
    }

    /**
     * Tests the setBlocked() method.
     *
     * @return void
     */
    public function testSetBlocked() {

        $obj = new TestCardTrait();

        $obj->setBlocked(true);
        $this->assertTrue($obj->getBlocked());
    }

    /**
     * Tests the setBlockedDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBlockedDate() {

        $obj = new TestCardTrait();

        $obj->setBlockedDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getBlockedDate()->format("2018-08-30"));
    }
}
