<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Planning\Tests\Helper;

use DateTime;
use Exception;
use WBW\Library\Planning\Helper\TimeSlotHelper;
use WBW\Library\Planning\Model\TimeSlot;
use WBW\Library\Planning\Tests\AbstractTestCase;
use WBW\Library\Planning\Tests\Fixtures\TestFixtures;

/**
 * Time slot helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Planning\Tests\Helper
 */
class TimeSlotHelperTest extends AbstractTestCase {

    /**
     * Dates.
     *
     * @var DateTime[]
     */
    private $dateTimes;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set Date/times mock.
        $this->dateTimes = TestFixtures::getDateTimes();
    }

    /**
     * Tests contains()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testContains(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertFalse(TimeSlotHelper::contains(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $this->assertTrue(TimeSlotHelper::contains(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2])));

        // 11:00-18:00 / 08:00-15:00
        $this->assertFalse(TimeSlotHelper::contains(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2])));

        // 08:00-15:00 / 11:00-18:00
        $this->assertFalse(TimeSlotHelper::contains(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3])));

        // 11:00-15:00 / 08:00-18:00
        $this->assertFalse(TimeSlotHelper::contains(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3])));
    }

    /**
     * Tests equals()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testEquals(): void {

        $obj = [
            new TimeSlot($this->dateTimes[0], $this->dateTimes[1]),
            new TimeSlot($this->dateTimes[0], $this->dateTimes[2]),
            new TimeSlot($this->dateTimes[0], $this->dateTimes[3]),
            new TimeSlot($this->dateTimes[2], $this->dateTimes[3]),
        ];

        // Start dates.
        $this->assertFalse(TimeSlotHelper::equals($obj[0], $obj[3]));
        $this->assertTrue(TimeSlotHelper::equals($obj[0], $obj[0]));

        // End dates.
        $this->assertFalse(TimeSlotHelper::equals($obj[0], $obj[1]));
        $this->assertTrue(TimeSlotHelper::equals($obj[0], $obj[0]));

        // Time slots count.
        $arg = clone $obj[0];
        $this->assertFalse(TimeSlotHelper::equals($arg, $obj[0]->addTimeSlot($obj[1])));
        $this->assertTrue(TimeSlotHelper::equals($obj[0], $obj[0]));

        // Time slots.
        $this->assertFalse(TimeSlotHelper::equals($obj[0], $arg->addTimeSlot($obj[2])));
        $this->assertTrue(TimeSlotHelper::equals($obj[0], $obj[0]));
    }

    /**
     * Tests fullJoin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testFullJoin(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlotHelper::fullJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlotHelper::fullJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2]));
        $this->assertEquals($this->dateTimes[0], $res1->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[3], $res1->getEndDate()); /* 18:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlotHelper::fullJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2]));
        $this->assertEquals($this->dateTimes[0], $res2->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[3], $res2->getEndDate()); /* 18:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlotHelper::fullJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3]));
        $this->assertEquals($this->dateTimes[0], $res3->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[3], $res3->getEndDate()); /* 18:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlotHelper::fullJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3]));
        $this->assertEquals($this->dateTimes[0], $res4->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[3], $res4->getEndDate()); /* 18:00 */
    }

    /**
     * Tests fullJoinWithout()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testFullJoinWithout(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlotHelper::fullJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlotHelper::fullJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2]));

        $this->assertCount(2, $res1);

        $this->assertEquals($this->dateTimes[0], $res1[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res1[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dateTimes[2], $res1[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res1[1]->getEndDate()); /* 18:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlotHelper::fullJoinWithout(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2]));

        $this->assertCount(2, $res2);

        $this->assertEquals($this->dateTimes[0], $res2[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res2[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dateTimes[2], $res2[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res2[1]->getEndDate()); /* 18:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlotHelper::fullJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3]));

        $this->assertCount(2, $res3);

        $this->assertEquals($this->dateTimes[0], $res3[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res3[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dateTimes[2], $res3[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res3[1]->getEndDate()); /* 18:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlotHelper::fullJoinWithout(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3]));

        $this->assertCount(2, $res4);

        $this->assertEquals($this->dateTimes[0], $res4[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res4[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dateTimes[2], $res4[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res4[1]->getEndDate()); /* 18:00 */
    }

    /**
     * Tests getDuration()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetDuration(): void {

        $arg = [
            new TimeSlot($this->dateTimes[0], $this->dateTimes[1]),
            new TimeSlot($this->dateTimes[1], $this->dateTimes[2]),
            new TimeSlot($this->dateTimes[2], $this->dateTimes[3]),
        ];
        $exp = 36000;

        $this->assertEquals($exp, TimeSlotHelper::getDuration($arg));
    }

    /**
     * Tests hasFullJoin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testHasFullJoin(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertFalse(TimeSlotHelper::hasFullJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $this->assertTrue(TimeSlotHelper::hasFullJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2])));

        // 11:00-18:00 / 08:00-15:00
        $this->assertTrue(TimeSlotHelper::hasFullJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2])));

        // 08:00-15:00 / 11:00-18:00
        $this->assertTrue(TimeSlotHelper::hasFullJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3])));

        // 11:00-15:00 / 08:00-18:00
        $this->assertTrue(TimeSlotHelper::hasFullJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3])));
    }

    /**
     * Tests hasInnerJoin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testHasInnerJoin(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertFalse(TimeSlotHelper::hasInnerJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $this->assertTrue(TimeSlotHelper::hasInnerJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2])));

        // 11:00-18:00 / 08:00-15:00
        $this->assertTrue(TimeSlotHelper::hasInnerJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2])));

        // 08:00-15:00 / 11:00-18:00
        $this->assertTrue(TimeSlotHelper::hasInnerJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3])));

        // 11:00-15:00 / 08:00-18:00
        $this->assertTrue(TimeSlotHelper::hasInnerJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3])));
    }

    /**
     * Tests innerJoin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testInnerJoin(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlotHelper::innerJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlotHelper::innerJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2]));
        $this->assertEquals($this->dateTimes[1], $res1->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dateTimes[2], $res1->getEndDate()); /* 15:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlotHelper::innerJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2]));
        $this->assertEquals($this->dateTimes[1], $res2->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dateTimes[2], $res2->getEndDate()); /* 15:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlotHelper::innerJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3]));
        $this->assertEquals($this->dateTimes[1], $res3->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dateTimes[2], $res3->getEndDate()); /* 15:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlotHelper::innerJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3]));
        $this->assertEquals($this->dateTimes[1], $res4->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dateTimes[2], $res4->getEndDate()); /* 15:00 */
    }

    /**
     * Tests leftJoin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLeftJoin(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlotHelper::leftJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlotHelper::leftJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2]));
        $this->assertEquals($this->dateTimes[0], $res1->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[3], $res1->getEndDate()); /* 18:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlotHelper::leftJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2]));
        $this->assertEquals($this->dateTimes[1], $res2->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dateTimes[3], $res2->getEndDate()); /* 18:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlotHelper::leftJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3]));
        $this->assertEquals($this->dateTimes[0], $res3->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[2], $res3->getEndDate()); /* 15:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlotHelper::leftJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3]));
        $this->assertEquals($this->dateTimes[1], $res4->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dateTimes[2], $res4->getEndDate()); /* 15:00 */
    }

    /**
     * Tests leftJoinWithout()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLeftJoinWithout(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlotHelper::leftJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlotHelper::leftJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2]));

        $this->assertCount(2, $res1);

        $this->assertEquals($this->dateTimes[0], $res1[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res1[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dateTimes[2], $res1[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res1[1]->getEndDate()); /* 18:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlotHelper::leftJoinWithout(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2]));

        $this->assertCount(1, $res2);

        $this->assertEquals($this->dateTimes[2], $res2[0]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res2[0]->getEndDate()); /* 18:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlotHelper::leftJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3]));

        $this->assertCount(1, $res3);

        $this->assertEquals($this->dateTimes[0], $res3[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res3[0]->getEndDate()); /* 11:00 */

        // 11:00-15:00 / 08:00-18:00
        $this->assertNull(TimeSlotHelper::leftJoinWithout(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3])));
    }

    /**
     * Tests merge()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testMerge(): void {

        // ===
        $arg0 = [];

        $res0 = TimeSlotHelper::merge($arg0);
        $this->assertCount(0, $res0);

        // ===
        $arg1   = [];
        $arg1[] = new TimeSlot($this->dateTimes[0], $this->dateTimes[1]); /* 08:00 / 11:00 */
        $arg1[] = new TimeSlot($this->dateTimes[1], $this->dateTimes[2]); /* 11:00 / 15:00 */
        $arg1[] = new TimeSlot($this->dateTimes[2], $this->dateTimes[3]); /* 15:00 / 18:00 */

        $res1 = TimeSlotHelper::merge($arg1);
        $this->assertCount(1, $res1);

        $this->assertEquals($this->dateTimes[0], $res1[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[3], $res1[0]->getEndDate()); /* 18:00 */

        // ===
        $arg2   = [];
        $arg2[] = new TimeSlot($this->dateTimes[0], $this->dateTimes[1]); /* 08:00 / 11:00 */
        $arg2[] = new TimeSlot($this->dateTimes[2], $this->dateTimes[3]); /* 15:00 / 18:00 */

        $res2 = TimeSlotHelper::merge($arg2);
        $this->assertCount(2, $res2);

        $this->assertEquals($this->dateTimes[0], $res2[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res2[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dateTimes[2], $res2[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res2[1]->getEndDate()); /* 18:00 */
    }

    /**
     * Tests rightJoin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRightJoin(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlotHelper::rightJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $res1 = TimeSlotHelper::rightJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2]));
        $this->assertEquals($this->dateTimes[1], $res1->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dateTimes[2], $res1->getEndDate()); /* 15:00 */

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlotHelper::rightJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2]));
        $this->assertEquals($this->dateTimes[0], $res2->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[2], $res2->getEndDate()); /* 15:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlotHelper::rightJoin(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3]));
        $this->assertEquals($this->dateTimes[1], $res3->getStartDate()); /* 11:00 */
        $this->assertEquals($this->dateTimes[3], $res3->getEndDate()); /* 18:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlotHelper::rightJoin(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3]));
        $this->assertEquals($this->dateTimes[0], $res4->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[3], $res4->getEndDate()); /* 18:00 */
    }

    /**
     * Tests rightJoinWithout()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRightJoinWithout(): void {

        // 08:00-11:00 / 15:00-18:00
        $this->assertNull(TimeSlotHelper::rightJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[1]), new TimeSlot($this->dateTimes[2], $this->dateTimes[3])));

        // 08:00-18:00 / 11:00-15:00
        $this->assertNull(TimeSlotHelper::rightJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[3]), new TimeSlot($this->dateTimes[1], $this->dateTimes[2])));

        // 11:00-18:00 / 08:00-15:00
        $res2 = TimeSlotHelper::rightJoinWithout(new TimeSlot($this->dateTimes[1], $this->dateTimes[3]), new TimeSlot($this->dateTimes[0], $this->dateTimes[2]));

        $this->assertCount(1, $res2);

        $this->assertEquals($this->dateTimes[0], $res2[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res2[0]->getEndDate()); /* 11:00 */

        // 08:00-15:00 / 11:00-18:00
        $res3 = TimeSlotHelper::rightJoinWithout(new TimeSlot($this->dateTimes[0], $this->dateTimes[2]), new TimeSlot($this->dateTimes[1], $this->dateTimes[3]));

        $this->assertCount(1, $res3);

        $this->assertEquals($this->dateTimes[2], $res3[0]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res3[0]->getEndDate()); /* 18:00 */

        // 11:00-15:00 / 08:00-18:00
        $res4 = TimeSlotHelper::rightJoinWithout(new TimeSlot($this->dateTimes[1], $this->dateTimes[2]), new TimeSlot($this->dateTimes[0], $this->dateTimes[3]));

        $this->assertCount(2, $res4);

        $this->assertEquals($this->dateTimes[0], $res4[0]->getStartDate()); /* 08:00 */
        $this->assertEquals($this->dateTimes[1], $res4[0]->getEndDate()); /* 11:00 */

        $this->assertEquals($this->dateTimes[2], $res4[1]->getStartDate()); /* 15:00 */
        $this->assertEquals($this->dateTimes[3], $res4[1]->getEndDate()); /* 18:00 */
    }
}
