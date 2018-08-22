<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Organizer;

use DateTime;
use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Model\Organizer\TimeSlot;

/**
 * Time slot test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Organizer
 * @final
 */
final class TimeSlotTest extends PHPUnit_Framework_TestCase {

    /**
     * End date.
     *
     * @var DateTime
     */
    private $endDate;

    /**
     * Start date.
     *
     * @var DateTime
     */
    private $startDate;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Start date mock.
        $this->startDate = new DateTime("2018-08-06 08:30");

        // Set an End date mock.
        $this->endDate = new DateTime("2018-08-06 20:30");
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConctruct() {

        try {
            new TimeSlot($this->endDate, $this->startDate);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The end date must be greater than start date", $ex->getMessage());
        }

        $obj = new TimeSlot($this->startDate, $this->endDate);

        $this->assertSame($this->endDate, $obj->getEndDate());
        $this->assertSame($this->startDate, $obj->getStartDate());
        $this->assertEquals([], $obj->getTimeSlots());
    }

    /**
     * Tests the removeTimeSlot() method.
     *
     * @return void
     */
    public function testRemoveTimeSlot() {

        $obj = new TimeSlot($this->startDate, $this->endDate);

        $this->assertCount(0, $obj->getTimeSlots());

        $arg = new TimeSlot($this->startDate, $this->endDate);

        $obj->addTimeSlot($arg);
        $this->assertCount(1, $obj->getTimeSlots());

        $obj->removeTimeSlot(new TimeSlot($this->startDate, new DateTime("2018-08-06 14:45:00")));
        $this->assertCount(1, $obj->getTimeSlots());

        $obj->removeTimeSlot($arg);
        $this->assertCount(0, $obj->getTimeSlots());
    }

}
