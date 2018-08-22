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
use WBW\Library\Core\Tests\Fixtures\TestFixtures;

/**
 * Time slot test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Organizer
 * @final
 */
final class TimeSlotTest extends PHPUnit_Framework_TestCase {

    /**
     * Dates.
     *
     * @var DateTime[]
     */
    private $dates;

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

        // Set Date/times mock.
        $this->dates = TestFixtures::getTimeSlotDateTimes();

        // Set an End date mock.
        $this->endDate = new DateTime("2018-08-06 20:30");

        // Set a Start date mock.
        $this->startDate = new DateTime("2018-08-06 08:30");
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
     * Tests the getDuration() method.
     *
     * @return void
     */
    public function testGetDuration() {

        // 08:00-11:00
        $this->assertEquals(10800, (new TimeSlot($this->dates[0], $this->dates[1]))->getDuration());

        // 08:00-15:00
        $this->assertEquals(25200, (new TimeSlot($this->dates[0], $this->dates[2]))->getDuration());

        // 08:00-18:00
        $this->assertEquals(36000, (new TimeSlot($this->dates[0], $this->dates[3]))->getDuration());
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
