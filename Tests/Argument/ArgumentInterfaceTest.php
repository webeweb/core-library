<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Argument\ArgumentInterface;

/**
 * Argument interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 * @final
 */
final class ArgumentInterfaceTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(63, ArgumentInterface::TYPE_ARRAY);
        $this->assertEquals(64, ArgumentInterface::TYPE_BOOLEAN);
        $this->assertEquals(30, ArgumentInterface::TYPE_DATE);
        $this->assertEquals(59, ArgumentInterface::TYPE_DOUBLE);
        $this->assertEquals(54, ArgumentInterface::TYPE_FLOAT);
        $this->assertEquals(78, ArgumentInterface::TYPE_INTEGER);
        $this->assertEquals(73, ArgumentInterface::TYPE_NUMBER);
        $this->assertEquals(55, ArgumentInterface::TYPE_OBJECT);
        $this->assertEquals(104, ArgumentInterface::TYPE_RESOURCE);
        $this->assertEquals(87, ArgumentInterface::TYPE_STRING);
        $this->assertEquals(116, ArgumentInterface::TYPE_TIMESTAMP);
    }

}
