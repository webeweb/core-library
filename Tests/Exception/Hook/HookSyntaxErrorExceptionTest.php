<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Hook;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Hook\HookSyntaxErrorException;

/**
 * Hook syntax error exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Hook
 * @final
 */
final class HookSyntaxErrorExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     */
    public function testConstruct() {

        $ex = new HookSyntaxErrorException("exception");

        $res = "The hook file \"exception\" contains syntax errors";
        $this->assertEquals($res, $ex->getMessage());
    }

}
