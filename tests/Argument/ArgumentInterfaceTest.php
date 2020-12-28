<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use WBW\Library\Core\Argument\ArgumentInterface;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Argument interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 */
class ArgumentInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(220, ArgumentInterface::ARGUMENT_ARRAY);
        $this->assertEquals(254, ArgumentInterface::ARGUMENT_BOOLEAN);
        $this->assertEquals(86, ArgumentInterface::ARGUMENT_DATE);
        $this->assertEquals(195, ArgumentInterface::ARGUMENT_DOUBLE);
        $this->assertEquals(179, ArgumentInterface::ARGUMENT_FLOAT);
        $this->assertEquals(308, ArgumentInterface::ARGUMENT_INTEGER);
        $this->assertEquals(236, ArgumentInterface::ARGUMENT_NUMBER);
        $this->assertEquals(204, ArgumentInterface::ARGUMENT_OBJECT);
        $this->assertEquals(419, ArgumentInterface::ARGUMENT_RESOURCE);
        $this->assertEquals(261, ArgumentInterface::ARGUMENT_STRING);
        $this->assertEquals(567, ArgumentInterface::ARGUMENT_TIMESTAMP);
    }
}
