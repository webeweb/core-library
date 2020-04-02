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

use WBW\Library\Core\Logger\TerminalLogger;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Terminal logger test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Logger
 */
class TerminalLoggerTest extends AbstractTestCase {

    /**
     * Tests the alert() method.
     *
     * @return void
     */
    public function testAlert() {

        $obj = new TerminalLogger();

        $this->assertNull($obj->alert("alert"));
    }

    /**
     * Tests the critical() method.
     *
     * @return void
     */
    public function testCritical() {

        $obj = new TerminalLogger();

        $this->assertNull($obj->critical("critical"));
    }

    /**
     * Tests the debug() method.
     *
     * @return void
     */
    public function testDebug() {

        $obj = new TerminalLogger();

        $this->assertNull($obj->debug("debug"));
    }

    /**
     * Tests the emergency() method.
     *
     * @return void
     */
    public function testEmergency() {

        $obj = new TerminalLogger();

        $this->assertNull($obj->emergency("emergency"));
    }

    /**
     * Tests the error() method.
     *
     * @return void
     */
    public function testError() {

        $obj = new TerminalLogger();

        $this->assertNull($obj->error("error"));
    }

    /**
     * Tests the info() method.
     *
     * @return void
     */
    public function testInfo() {

        $obj = new TerminalLogger();

        $this->assertNull($obj->info("info"));
    }

    /**
     * Tests the notice() method.
     *
     * @return void
     */
    public function testNotice() {

        $obj = new TerminalLogger();

        $this->assertNull($obj->notice("notice"));
    }

    /**
     * Tests the warning() method.
     *
     * @return void
     */
    public function testWarning() {

        $obj = new TerminalLogger();

        $this->assertNull($obj->warning("warning"));
    }
}