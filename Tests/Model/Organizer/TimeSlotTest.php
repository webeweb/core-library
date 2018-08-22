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

        // Set Date/Time mock.
        $this->dates = [];

        $this->dates[] = new DateTime("2018-08-22 08:00:00");
        $this->dates[] = new DateTime("2018-08-22 11:00:00");
        $this->dates[] = new DateTime("2018-08-22 15:00:00");
        $this->dates[] = new DateTime("2018-08-22 18:00:00");

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
     * Tests the contains() method.
     *
     * @return void
     */
    public function testContains() {


        // 08:00-11:00 / 15:00-18:00
        $this->assertFalse(TimeSlot::contains(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $this->assertTrue(TimeSlot::contains(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2])));

        // 11:00-18:00 / 08:00-15:00
        $this->assertFalse(TimeSlot::contains(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2])));

        // 08:00-15:00 / 11:00-18:00
        $this->assertFalse(TimeSlot::contains(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3])));

        // 11:00-15:00 / 08:00-18:00
        $this->assertFalse(TimeSlot::contains(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3])));
    }

    /**
     * Tests the fullJoin() method.
     *
     * @return void
     */
    public function testFullJoin() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlot::fullJoin(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlot::fullJoin(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2]));
        $this->assertEquals($this->dates[0], $res1->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[3], $res1->getEndDate()); /* 18:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlot::fullJoin(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2]));
        $this->assertEquals($this->dates[0], $res2->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[3], $res2->getEndDate()); /* 18:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlot::fullJoin(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3]));
        $this->assertEquals($this->dates[0], $res3->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[3], $res3->getEndDate()); /* 18:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlot::fullJoin(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3]));
        $this->assertEquals($this->dates[0], $res4->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[3], $res4->getEndDate()); /* 18:00 */
    }

    /**
     * Tests the fullJoinWithout() method.
     *
     * @return void
     */
    public function testFullJoinWithout() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlot::fullJoinWithout(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlot::fullJoinWithout(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2]));

        $this->assertCount(2, $res1);

        $this->assertEquals($this->dates[0], $res1[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[1], $res1[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dates[2], $res1[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dates[3], $res1[1]->getEndDate()); /* 18:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlot::fullJoinWithout(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2]));

        $this->assertCount(2, $res2);

        $this->assertEquals($this->dates[2], $res2[0]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dates[3], $res2[0]->getEndDate()); /* 18:00 */

        $this->assertEquals($this->dates[0], $res2[1]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[1], $res2[1]->getEndDate()); /* 11:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlot::fullJoinWithout(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3]));

        $this->assertCount(2, $res3);

        $this->assertEquals($this->dates[0], $res3[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[1], $res3[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dates[2], $res3[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dates[3], $res3[1]->getEndDate()); /* 18:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlot::fullJoinWithout(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3]));

        $this->assertCount(2, $res4);

        $this->assertEquals($this->dates[0], $res4[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[1], $res4[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dates[2], $res4[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dates[3], $res4[1]->getEndDate()); /* 18:00 */
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
     * Tests the hasFullJoin() method.
     *
     * @return void
     */
    public function testHasFullJoin() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertFalse(TimeSlot::hasFullJoin(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $this->assertTrue(TimeSlot::hasFullJoin(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2])));

        // 11:00-18:00 / 08:00-15:00
        $this->assertTrue(TimeSlot::hasFullJoin(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2])));

        // 08:00-15:00 / 11:00-18:00
        $this->assertTrue(TimeSlot::hasFullJoin(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3])));

        // 11:00-15:00 / 08:00-18:00
        $this->assertTrue(TimeSlot::hasFullJoin(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3])));
    }

    /**
     * Tests the hasInnerJoin() method.
     *
     * @return void
     */
    public function testHasInnerJoin() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertFalse(TimeSlot::hasInnerJoin(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $this->assertTrue(TimeSlot::hasInnerJoin(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2])));

        // 11:00-18:00 / 08:00-15:00
        $this->assertTrue(TimeSlot::hasInnerJoin(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2])));

        // 08:00-15:00 / 11:00-18:00
        $this->assertTrue(TimeSlot::hasInnerJoin(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3])));

        // 11:00-15:00 / 08:00-18:00
        $this->assertTrue(TimeSlot::hasInnerJoin(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3])));
    }

    /**
     * Tests the innerJoin() method.
     *
     * @return void
     */
    public function testInnerJoin() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlot::innerJoin(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlot::innerJoin(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2]));
        $this->assertEquals($this->dates[1], $res1->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dates[2], $res1->getEndDate()); /* 15:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlot::innerJoin(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2]));
        $this->assertEquals($this->dates[1], $res2->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dates[2], $res2->getEndDate()); /* 15:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlot::innerJoin(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3]));
        $this->assertEquals($this->dates[1], $res3->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dates[2], $res3->getEndDate()); /* 15:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlot::innerJoin(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3]));
        $this->assertEquals($this->dates[1], $res4->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dates[2], $res4->getEndDate()); /* 15:00 */
    }

    /**
     * Tests the leftJoin() method.
     *
     * @return void
     */
    public function testLeftJoin() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlot::leftJoin(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlot::leftJoin(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2]));
        $this->assertEquals($this->dates[0], $res1->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[3], $res1->getEndDate()); /* 18:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlot::leftJoin(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2]));
        $this->assertEquals($this->dates[1], $res2->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dates[3], $res2->getEndDate()); /* 18:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlot::leftJoin(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3]));
        $this->assertEquals($this->dates[0], $res3->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[2], $res3->getEndDate()); /* 15:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlot::leftJoin(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3]));
        $this->assertEquals($this->dates[1], $res4->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dates[2], $res4->getEndDate()); /* 15:00 */
    }

    /**
     * Tests the leftJoinWithout() method.
     *
     * @return void
     */
    public function testLeftJoinWithout() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlot::leftJoinWithout(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlot::leftJoinWithout(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2]));

        $this->assertCount(2, $res1);

        $this->assertEquals($this->dates[0], $res1[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[1], $res1[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dates[2], $res1[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dates[3], $res1[1]->getEndDate()); /* 18:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlot::leftJoinWithout(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2]));

        $this->assertCount(1, $res2);

        $this->assertEquals($this->dates[2], $res2[0]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dates[3], $res2[0]->getEndDate()); /* 18:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlot::leftJoinWithout(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3]));

        $this->assertCount(1, $res3);

        $this->assertEquals($this->dates[0], $res3[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[1], $res3[0]->getEndDate()); /* 11:00 */

        // 11:00-15:00 / 08:00-18:00
        $this->assertNull(TimeSlot::leftJoinWithout(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3])));
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

    /**
     * Tests the rightJoin() method.
     *
     * @return void
     */
    public function testRightJoin() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlot::rightJoin(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlot::rightJoin(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2]));
        $this->assertEquals($this->dates[1], $res1->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dates[2], $res1->getEndDate()); /* 15:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlot::rightJoin(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2]));
        $this->assertEquals($this->dates[0], $res2->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[2], $res2->getEndDate()); /* 15:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlot::rightJoin(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3]));
        $this->assertEquals($this->dates[1], $res3->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dates[3], $res3->getEndDate()); /* 18:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlot::rightJoin(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3]));
        $this->assertEquals($this->dates[0], $res4->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[3], $res4->getEndDate()); /* 18:00 */
    }

    /**
     * Tests the rightJoinWithout() method.
     *
     * @return void
     */
    public function testRightJoinWithout() {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlot::rightJoinWithout(new TimeSlot($this->dates[0], $this->dates[1]), new TimeSlot($this->dates[2], $this->dates[3])));

        // 08:00-18:00 / 11:00-15:00
        $this->assertNull(TimeSlot::rightJoinWithout(new TimeSlot($this->dates[0], $this->dates[3]), new TimeSlot($this->dates[1], $this->dates[2])));

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlot::rightJoinWithout(new TimeSlot($this->dates[1], $this->dates[3]), new TimeSlot($this->dates[0], $this->dates[2]));

        $this->assertCount(1, $res2);

        $this->assertEquals($this->dates[0], $res2[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[1], $res2[0]->getEndDate()); /* 11:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlot::rightJoinWithout(new TimeSlot($this->dates[0], $this->dates[2]), new TimeSlot($this->dates[1], $this->dates[3]));

        $this->assertCount(1, $res3);

        $this->assertEquals($this->dates[2], $res3[0]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dates[3], $res3[0]->getEndDate()); /* 18:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlot::rightJoinWithout(new TimeSlot($this->dates[1], $this->dates[2]), new TimeSlot($this->dates[0], $this->dates[3]));

        $this->assertCount(2, $res4);

        $this->assertEquals($this->dates[0], $res4[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dates[1], $res4[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dates[2], $res4[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dates[3], $res4[1]->getEndDate()); /* 18:00 */
    }

}
