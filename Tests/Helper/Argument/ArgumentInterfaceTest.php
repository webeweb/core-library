<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Helper\Argument;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Helper\Argument\ArgumentInterface;

/**
 * Argument interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Helper\Argument
 * @final
 */
final class ArgumentInterfaceTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(63, ArgumentInterface::ARGUMENT_ARRAY);
        $this->assertEquals(64, ArgumentInterface::ARGUMENT_BOOLEAN);
        $this->assertEquals(30, ArgumentInterface::ARGUMENT_DATE);
        $this->assertEquals(59, ArgumentInterface::ARGUMENT_DOUBLE);
        $this->assertEquals(54, ArgumentInterface::ARGUMENT_FLOAT);
        $this->assertEquals(78, ArgumentInterface::ARGUMENT_INTEGER);
        $this->assertEquals(73, ArgumentInterface::ARGUMENT_NUMBER);
        $this->assertEquals(55, ArgumentInterface::ARGUMENT_OBJECT);
        $this->assertEquals(104, ArgumentInterface::ARGUMENT_RESOURCE);
        $this->assertEquals(87, ArgumentInterface::ARGUMENT_STRING);
        $this->assertEquals(116, ArgumentInterface::ARGUMENT_TIMESTAMP);
    }

}
