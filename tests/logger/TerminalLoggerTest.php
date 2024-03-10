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

use WBW\Library\Logger\TerminalLogger;

/**
 * Terminal logger test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Logger\Tests
 */
class TerminalLoggerTest extends AbstractTestCase {

    /**
     * Test alert()
     *
     * @return void
     */
    public function testAlert(): void {

        $obj = new TerminalLogger();

        $obj->alert("alert");
        $this->assertNull(null);
    }

    /**
     * Test critical()
     *
     * @return void
     */
    public function testCritical(): void {

        $obj = new TerminalLogger();

        $obj->critical("critical");
        $this->assertNull(null);
    }

    /**
     * Test debug()
     *
     * @return void
     */
    public function testDebug(): void {

        $obj = new TerminalLogger();

        $obj->debug("debug");
        $this->assertNull(null);
    }

    /**
     * Test emergency()
     *
     * @return void
     */
    public function testEmergency(): void {

        $obj = new TerminalLogger();

        $obj->emergency("emergency");
        $this->assertNull(null);
    }

    /**
     * Test error()
     *
     * @return void
     */
    public function testError(): void {

        $obj = new TerminalLogger();

        $obj->error("error");
        $this->assertNull(null);
    }

    /**
     * Test info()
     *
     * @return void
     */
    public function testInfo(): void {

        $obj = new TerminalLogger();

        $obj->info("info");
        $this->assertNull(null);
    }

    /**
     * Test notice()
     *
     * @return void
     */
    public function testNotice(): void {

        $obj = new TerminalLogger();

        $obj->notice("notice");
        $this->assertNull(null);
    }

    /**
     * Test warning()
     *
     * @return void
     */
    public function testWarning(): void {

        $obj = new TerminalLogger();

        $obj->warning("warning");
        $this->assertNull(null);
    }
}
