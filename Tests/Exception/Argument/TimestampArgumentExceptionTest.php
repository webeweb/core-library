<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Argument;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\TimestampArgumentException;

/**
 * Timestamp argument exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception
 * @final
 */
final class TimestampArgumentExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     */
    public function testConstruct() {
        $ex = new TimestampArgumentException('');
        $this->assertEquals('The argument "" is not a timestamp', $ex->getMessage());
    }

}
