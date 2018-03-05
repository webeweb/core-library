<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Response;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Response\RedirectResponseException;

/**
 * Redirect response exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Response
 * @final
 */
final class RedirectResponseExceptionTest extends PHPUnit_Framework_TestCase {

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
