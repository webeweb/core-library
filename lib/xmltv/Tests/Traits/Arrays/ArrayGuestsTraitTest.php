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

use WBW\Library\XmlTv\Model\Guest;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayGuestsTrait;

/**
 * Array guests trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayGuestsTraitTest extends AbstractTestCase {

    /**
     * Test addGuest()
     *
     * @return void
     */
    public function testAddGuest(): void {

        // Set a Guest mock.
        $guest = new Guest();

        $obj = new TestArrayGuestsTrait();

        $obj->addGuest($guest);
        $this->assertSame($guest, $obj->getGuests()[0]);
        $this->assertEquals(1, $obj->getNumberGuests());
        $this->assertTrue($obj->hasGuests());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayGuestsTrait();

        $this->assertEquals([], $obj->getGuests());
        $this->assertEquals(0, $obj->getNumberGuests());
        $this->assertFalse($obj->hasGuests());
    }
}
