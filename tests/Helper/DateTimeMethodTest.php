<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Helper;

use DateTime;
use InvalidArgumentException;
use Throwable;
use WBW\Library\Common\Helper\DateTimeMethod;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time method test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Helper
 */
class DateTimeMethodTest extends AbstractTestCase {

    /**
     * Test addDay()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddDay(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2021-12-23", DateTimeMethod::addDay(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2021-12-24", DateTimeMethod::addDay(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test addDay()
     *
     * @return void
     */
    public function testAddDayWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::addDay(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test addHour()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddHour(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::addHour(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 12:00:00", DateTimeMethod::addHour(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test addHour()
     *
     * @return void
     */
    public function testAddHourWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::addHour(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test addInterval()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddInterval(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 12:30:00");

        $this->assertEquals("2023-06-21 12:30:00", DateTimeMethod::addInterval(clone $dateTime, 0, 0, 0, 0, 0, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 12:30:01", DateTimeMethod::addInterval(clone $dateTime, 0, 0, 0, 0, 0, 1)->format("Y-m-d H:i:s"));
        $this->assertEquals("2024-07-22 13:31:01", DateTimeMethod::addInterval(clone $dateTime, 1, 1, 1, 1, 1, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test addInterval()
     *
     * @return void
     */
    public function testAddIntervalWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::addInterval(new DateTime(), 0, 0, 0, 0, 0, -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test addMinute()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddMinute(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::addMinute(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 11:01:00", DateTimeMethod::addMinute(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test addMinute()
     *
     * @return void
     */
    public function testAddMinuteWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::addMinute(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test addMonth()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddMonth(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2021-12-23", DateTimeMethod::addMonth(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2022-01-23", DateTimeMethod::addMonth(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test addMonth()
     *
     * @return void
     */
    public function testAddMonthWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::addMonth(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test addSecond()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddSecond(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::addSecond(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 11:00:01", DateTimeMethod::addSecond(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test addSecond()
     *
     * @return void
     */
    public function testAddSecondWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::addSecond(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test addYear()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddYear(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2021-12-23", DateTimeMethod::addYear(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2022-12-23", DateTimeMethod::addYear(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test addYear()
     *
     * @return void
     */
    public function testAddYearWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::addYear(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test modDay()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testModDay(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2021-12-22", DateTimeMethod::modDay(clone $dateTime, -1)->format("Y-m-d"));
        $this->assertEquals("2021-12-23", DateTimeMethod::modDay(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2021-12-24", DateTimeMethod::modDay(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test modHour()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testModHour(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 10:00:00", DateTimeMethod::modHour(clone $dateTime, -1)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::modHour(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 12:00:00", DateTimeMethod::modHour(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test modInterval()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testModInterval(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 12:30:00");

        $this->assertEquals("2023-06-21 12:30:00", DateTimeMethod::modInterval(clone $dateTime)->format("Y-m-d H:i:s"));

        $this->assertEquals("2022-05-20 11:28:59", DateTimeMethod::modInterval(clone $dateTime, -1, -1, -1, -1, -1, -1)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 12:29:59", DateTimeMethod::modInterval(clone $dateTime, 0, 0, 0, 0, 0, -1)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 12:30:00", DateTimeMethod::modInterval(clone $dateTime, 0, 0, 0, 0, 0, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 12:30:01", DateTimeMethod::modInterval(clone $dateTime, 0, 0, 0, 0, 0, 1)->format("Y-m-d H:i:s"));
        $this->assertEquals("2024-07-22 13:31:01", DateTimeMethod::modInterval(clone $dateTime, 1, 1, 1, 1, 1, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test modInterval()
     *
     * @return void
     */
    public function testModIntervalWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::modInterval(new DateTime(), -1, 0, 0, 0, 0, 1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("All offsets must be of the same sign", $ex->getMessage());
        }
    }

    /**
     * Test modMinute()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testModMinute(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 10:59:00", DateTimeMethod::modMinute(clone $dateTime, -1)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::modMinute(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 11:01:00", DateTimeMethod::modMinute(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test modMonth()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testModMonth(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2023-05-21", DateTimeMethod::modMonth(clone $dateTime, -1)->format("Y-m-d"));
        $this->assertEquals("2023-06-21", DateTimeMethod::modMonth(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2023-07-21", DateTimeMethod::modMonth(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test modSecond()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testModSecond(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 10:59:59", DateTimeMethod::modSecond(clone $dateTime, -1)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::modSecond(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 11:00:01", DateTimeMethod::modSecond(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test modYear()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testModYear(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21");
        $dateTime->setTime(0, 0);

        $this->assertEquals("2022-06-21", DateTimeMethod::modYear(clone $dateTime, -1)->format("Y-m-d"));
        $this->assertEquals("2023-06-21", DateTimeMethod::modYear(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2024-06-21", DateTimeMethod::modYear(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test subDay()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSubDay(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");

        $this->assertEquals("2021-12-23", DateTimeMethod::subDay(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2021-12-22", DateTimeMethod::subDay(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test subDay()
     *
     * @return void
     */
    public function testSubDayWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::subDay(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test subHour()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSubHour(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::subHour(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 10:00:00", DateTimeMethod::subHour(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test subHour()
     *
     * @return void
     */
    public function testSubHourWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::subHour(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test subInterval()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSubInterval(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 12:30:00");

        $this->assertEquals("2023-06-21 12:30:00", DateTimeMethod::subInterval(clone $dateTime, 0, 0, 0, 0, 0, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 12:29:59", DateTimeMethod::subInterval(clone $dateTime, 0, 0, 0, 0, 0, 1)->format("Y-m-d H:i:s"));
        $this->assertEquals("2022-05-20 11:28:59", DateTimeMethod::subInterval(clone $dateTime, 1, 1, 1, 1, 1, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test subInterval()
     *
     * @return void
     */
    public function testSubIntervalWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::subInterval(new DateTime(), 0, 0, 0, 0, 0, -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test subMinute()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSubMinute(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::subMinute(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 10:59:00", DateTimeMethod::subMinute(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test subMinute()
     *
     * @return void
     */
    public function testSubMinuteWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::subMinute(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test subMonth()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSubMonth(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");

        $this->assertEquals("2021-12-23", DateTimeMethod::subMonth(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2021-11-23", DateTimeMethod::subMonth(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test subMonth()
     *
     * @return void
     */
    public function testSubMonthWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::subMonth(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test subSecond()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSubSecond(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2023-06-21 11:00:00");

        $this->assertEquals("2023-06-21 11:00:00", DateTimeMethod::subSecond(clone $dateTime, 0)->format("Y-m-d H:i:s"));
        $this->assertEquals("2023-06-21 10:59:59", DateTimeMethod::subSecond(clone $dateTime, 1)->format("Y-m-d H:i:s"));
    }

    /**
     * Test subSecond()
     *
     * @return void
     */
    public function testSubSecondWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::subSecond(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }

    /**
     * Test subYear()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSubYear(): void {

        // Set a date/time mock.
        $dateTime = new DateTime("2021-12-23");

        $this->assertEquals("2021-12-23", DateTimeMethod::subYear(clone $dateTime, 0)->format("Y-m-d"));
        $this->assertEquals("2020-12-23", DateTimeMethod::subYear(clone $dateTime, 1)->format("Y-m-d"));
    }

    /**
     * Test subYear()
     *
     * @return void
     */
    public function testSubYearWithInvalidArgumentException(): void {

        try {

            DateTimeMethod::subYear(new DateTime(), -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("Offset must be positive or zero", $ex->getMessage());
        }
    }
}
