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
     * Tests alert()
     *
     * @return void
     */
    public function testAlert(): void {

        $obj = new TerminalLogger();

        $this->assertNull($obj->alert("alert"));
    }

    /**
     * Tests critical()
     *
     * @return void
     */
    public function testCritical(): void {

        $obj = new TerminalLogger();

        $this->assertNull($obj->critical("critical"));
    }

    /**
     * Tests debug()
     *
     * @return void
     */
    public function testDebug(): void {

        $obj = new TerminalLogger();

        $this->assertNull($obj->debug("debug"));
    }

    /**
     * Tests emergency()
     *
     * @return void
     */
    public function testEmergency(): void {

        $obj = new TerminalLogger();

        $this->assertNull($obj->emergency("emergency"));
    }

    /**
     * Tests error()
     *
     * @return void
     */
    public function testError(): void {

        $obj = new TerminalLogger();

        $this->assertNull($obj->error("error"));
    }

    /**
     * Tests info()
     *
     * @return void
     */
    public function testInfo(): void {

        $obj = new TerminalLogger();

        $this->assertNull($obj->info("info"));
    }

    /**
     * Tests notice()
     *
     * @return void
     */
    public function testNotice(): void {

        $obj = new TerminalLogger();

        $this->assertNull($obj->notice("notice"));
    }

    /**
     * Tests warning()
     *
     * @return void
     */
    public function testWarning(): void {

        $obj = new TerminalLogger();

        $this->assertNull($obj->warning("warning"));
    }
}
