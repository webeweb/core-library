<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Renderer;

use DateTime;
use Exception;
use WBW\Library\Core\Renderer\DateTimeRenderer;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Date/time renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Renderer
 */
class DateTimeRendererTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("Y-m-d H:i", DateTimeRenderer::DATETIME_FORMAT);
    }

    /**
     * Tests the renderAge() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRenderAge() {

        // Set a Date/time mock.
        $ref = new DateTime("2019-02-14");

        $this->assertEquals(19, DateTimeRenderer::renderAge(new DateTime("2000-02-13"), $ref));
        $this->assertEquals(19, DateTimeRenderer::renderAge(new DateTime("2000-02-14"), $ref));
        $this->assertEquals(18, DateTimeRenderer::renderAge(new DateTime("2000-02-15"), $ref));

        $this->assertGreaterThanOrEqual(20, DateTimeRenderer::renderAge(new DateTime("2000-01-01")));
    }

    /**
     * Tests the renderDateTime() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRenderDateTime() {

        $this->assertEquals("2018-01-14 17:00", DateTimeRenderer::renderDateTime(new DateTime("2018-01-14 17:00")));
    }

    /**
     * Tests the renderDateTime() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRenderDateTimeWithFormat() {

        $this->assertEquals("14/01/2018 17:00", DateTimeRenderer::renderDateTime(new DateTime("2018-01-14 17:00"), "d/m/Y H:i"));
    }

    /**
     * Tests the renderDateTime() method.
     *
     * @return void
     */
    public function testRenderDateTimeWithoutArguments() {

        $this->assertEquals("", DateTimeRenderer::renderDateTime());
    }
}
