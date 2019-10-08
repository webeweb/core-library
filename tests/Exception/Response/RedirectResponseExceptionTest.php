<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Response;

use WBW\Library\Core\Exception\Response\RedirectResponseException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Redirect response exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Response
 */
class RedirectResponseExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new RedirectResponseException("route", ["name" => "value"], "exception");
        $this->assertEquals("exception", $ex->getMessage());
        $this->assertEquals(["name" => "value"], $ex->getArguments());
        $this->assertEquals("route", $ex->getRoute());
    }

}
