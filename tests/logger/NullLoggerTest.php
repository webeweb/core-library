<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Logger\Tests;

use WBW\Library\Logger\NullLogger;

/**
 * Null logger test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Logger\Tests
 */
class NullLoggerTest extends AbstractTestCase {

    /**
     * Tests the alert() method.
     *
     * @return void
     */
    public function testAlert(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->alert("alert"));
    }

    /**
     * Tests the critical() method.
     *
     * @return void
     */
    public function testCritical(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->critical("critical"));
    }

    /**
     * Tests the debug() method.
     *
     * @return void
     */
    public function testDebug(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->debug("debug"));
    }

    /**
     * Tests the emergency() method.
     *
     * @return void
     */
    public function testEmergency(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->emergency("emergency"));
    }

    /**
     * Tests the error() method.
     *
     * @return void
     */
    public function testError(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->error("error"));
    }

    /**
     * Tests the info() method.
     *
     * @return void
     */
    public function testInfo(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->info("info"));
    }

    /**
     * Tests the notice() method.
     *
     * @return void
     */
    public function testNotice(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->notice("notice"));
    }

    /**
     * Tests the warning() method.
     *
     * @return void
     */
    public function testWarning(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->warning("warning"));
    }
}