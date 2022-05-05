<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Planning\Tests\Model;

use DateTime;
use Exception;
use InvalidArgumentException;
use WBW\Library\Planning\Model\TimeSlot;
use WBW\Library\Planning\Tests\AbstractTestCase;
use WBW\Library\Planning\Tests\Fixtures\TestFixtures;

/**
 * Time slot test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Planning\Tests\Model
 */
class TimeSlotTest extends AbstractTestCase {

    /**
     * Dates.
     *
     * @var DateTime[]
     */
    private $dateTimes;

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
    protected function setUp(): void {
        parent::setUp();

        // Set Date/times mock.
        $this->dateTimes = TestFixtures::getDateTimes();

        // Set an End date mock.
        $this->endDate = new DateTime("2018-08-06 20:30");

        // Set a Start date mock.
        $this->startDate = new DateTime("2018-08-06 08:30");
    }

    /**
     * Tests getDuration()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetDuration(): void {

        // 08:00-11:00
        $this->assertEquals(10800, (new TimeSlot($this->dateTimes[0], $this->dateTimes[1]))->getDuration());

        // 08:00-15:00
        $this->assertEquals(25200, (new TimeSlot($this->dateTimes[0], $this->dateTimes[2]))->getDuration());

        // 08:00-18:00
        $this->assertEquals(36000, (new TimeSlot($this->dateTimes[0], $this->dateTimes[3]))->getDuration());
    }

    /**
     * Tests leftJoinWithout()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLeftJoinWithout(): void {

        // ===
        $obj0 = new TimeSlot(new DateTime("2018-08-29 08:00"), new DateTime("2018-08-29 18:00"));

        $res0 = $obj0->leftJoinWithout();
        $this->assertCount(1, $res0);

        $this->assertSame($obj0, $res0[0]);

        // ===
        $obj1 = new TimeSlot(new DateTime("2018-08-29 08:00"), new DateTime("2018-08-29 18:00"));

        $this->assertSame($obj1, $obj1->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 10:00"), new DateTime("2018-08-29 11:00"))));
        $this->assertSame($obj1, $obj1->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 13:00"), new DateTime("2018-08-29 14:00"))));
        $this->assertSame($obj1, $obj1->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 16:00"), new DateTime("2018-08-29 17:00"))));

        $res1 = $obj1->leftJoinWithout();
        $this->assertCount(4, $res1);

        $this->assertEquals("2018-08-29 08:00", $res1[0]->getStartDate()->format("Y-m-d H:i"));
        $this->assertEquals("2018-08-29 10:00", $res1[0]->getEndDate()->format("Y-m-d H:i"));

        $this->assertEquals("2018-08-29 11:00", $res1[1]->getStartDate()->format("Y-m-d H:i"));
        $this->assertEquals("2018-08-29 13:00", $res1[1]->getEndDate()->format("Y-m-d H:i"));

        $this->assertEquals("2018-08-29 14:00", $res1[2]->getStartDate()->format("Y-m-d H:i"));
        $this->assertEquals("2018-08-29 16:00", $res1[2]->getEndDate()->format("Y-m-d H:i"));

        $this->assertEquals("2018-08-29 17:00", $res1[3]->getStartDate()->format("Y-m-d H:i"));
        $this->assertEquals("2018-08-29 18:00", $res1[3]->getEndDate()->format("Y-m-d H:i"));

        // ===
        $obj2 = new TimeSlot(new DateTime("2018-08-29 08:00"), new DateTime("2018-08-29 18:00"));

        $this->assertSame($obj2, $obj2->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 10:00"), new DateTime("2018-08-29 11:00"))));
        $this->assertSame($obj2, $obj2->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 11:00"), new DateTime("2018-08-29 13:00"))));
        $this->assertSame($obj2, $obj2->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 13:00"), new DateTime("2018-08-29 17:00"))));

        $res2 = $obj2->leftJoinWithout();
        $this->assertCount(2, $res2);

        $this->assertEquals("2018-08-29 08:00", $res2[0]->getStartDate()->format("Y-m-d H:i"));
        $this->assertEquals("2018-08-29 10:00", $res2[0]->getEndDate()->format("Y-m-d H:i"));

        $this->assertEquals("2018-08-29 17:00", $res2[1]->getStartDate()->format("Y-m-d H:i"));
        $this->assertEquals("2018-08-29 18:00", $res2[1]->getEndDate()->format("Y-m-d H:i"));

        // ===
        $obj3 = new TimeSlot(new DateTime("2018-08-29 08:00"), new DateTime("2018-08-29 18:00"));

        $this->assertSame($obj3, $obj3->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 07:00"), new DateTime("2018-08-29 08:00"))));
        $this->assertSame($obj3, $obj3->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 11:00"), new DateTime("2018-08-29 13:00"))));
        $this->assertSame($obj3, $obj3->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 18:00"), new DateTime("2018-08-29 19:00"))));

        $res3 = $obj3->leftJoinWithout();
        $this->assertCount(2, $res3);

        $this->assertEquals("2018-08-29 08:00", $res3[0]->getStartDate()->format("Y-m-d H:i"));
        $this->assertEquals("2018-08-29 11:00", $res3[0]->getEndDate()->format("Y-m-d H:i"));

        $this->assertEquals("2018-08-29 13:00", $res3[1]->getStartDate()->format("Y-m-d H:i"));
        $this->assertEquals("2018-08-29 18:00", $res3[1]->getEndDate()->format("Y-m-d H:i"));

        // ===
        $obj4 = new TimeSlot(new DateTime("2018-08-29 08:00"), new DateTime("2018-08-29 18:00"));

        $this->assertSame($obj4, $obj4->addTimeSlot(new TimeSlot(new DateTime("2018-08-29 07:00"), new DateTime("2018-08-29 19:00"))));

        $res4 = $obj4->leftJoinWithout();
        $this->assertCount(0, $res4);
    }

    /**
     * Tests removeTimeSlot()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRemoveTimeSlot(): void {

        $obj = new TimeSlot($this->startDate, $this->endDate);

        $this->assertCount(0, $obj->getTimeSlots());

        $arg = new TimeSlot($this->startDate, $this->endDate);

        $this->assertSame($obj, $obj->addTimeSlot($arg));
        $this->assertCount(1, $obj->getTimeSlots());

        $this->assertSame($obj, $obj->removeTimeSlot(new TimeSlot($this->startDate, new DateTime("2018-08-06 14:45:00"))));
        $this->assertCount(1, $obj->getTimeSlots());

        $this->assertSame($obj, $obj->removeTimeSlot($arg));
        $this->assertCount(0, $obj->getTimeSlots());
    }

    /**
     * Tests __construct()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function test__construct(): void {

        $obj = new TimeSlot($this->startDate, $this->endDate);

        $this->assertSame($this->endDate, $obj->getEndDate());
        $this->assertSame($this->startDate, $obj->getStartDate());
        $this->assertEquals([], $obj->getTimeSlots());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructWithException(): void {

        try {

            new TimeSlot($this->endDate, $this->startDate);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The end date must be greater than start date", $ex->getMessage());
        }
    }
}
