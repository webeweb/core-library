<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Logger;

use WBW\Library\Core\Logger\NullLogger;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Null logger test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Logger
 */
class NullLoggerTest extends AbstractTestCase {

    /**
     * Tests the alert() method.
     *
     * @return void
     */
    public function testAlert() {

        $obj = new NullLogger();

        $this->assertNull($obj->alert("alert"));
    }

    /**
     * Tests the critical() method.
     *
     * @return void
     */
    public function testCritical() {

        $obj = new NullLogger();

        $this->assertNull($obj->critical("critical"));
    }

    /**
     * Tests the debug() method.
     *
     * @return void
     */
    public function testDebug() {

        $obj = new NullLogger();

        $this->assertNull($obj->debug("debug"));
    }

    /**
     * Tests the emergency() method.
     *
     * @return void
     */
    public function testEmergency() {

        $obj = new NullLogger();

        $this->assertNull($obj->emergency("emergency"));
    }

    /**
     * Tests the error() method.
     *
     * @return void
     */
    public function testError() {

        $obj = new NullLogger();

        $this->assertNull($obj->error("error"));
    }

    /**
     * Tests the info() method.
     *
     * @return void
     */
    public function testInfo() {

        $obj = new NullLogger();

        $this->assertNull($obj->info("info"));
    }

    /**
     * Tests the notice() method.
     *
     * @return void
     */
    public function testNotice() {

        $obj = new NullLogger();

        $this->assertNull($obj->notice("notice"));
    }

    /**
     * Tests the warning() method.
     *
     * @return void
     */
    public function testWarning() {

        $obj = new NullLogger();

        $this->assertNull($obj->warning("warning"));
    }
}