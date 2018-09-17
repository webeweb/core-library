<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Network;

use WBW\Library\Core\Exception\Network\CURLMethodNotAllowedException;
use WBW\Library\Core\Tests\AbstractCoreFrameworkTestCase;

/**
 * cURL method not allowed exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Network
 * @final
 */
final class CURLInvalidMessageClassExceptionTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new CURLMethodNotAllowedException("exception");

        $res = "The method \"exception\" is not allowed";
        $this->assertEquals($res, $ex->getMessage());
    }

}
