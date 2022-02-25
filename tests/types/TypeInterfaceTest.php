<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests;

use WBW\Library\Types\TypeInterface;

/**
 * Type interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests
 */
class TypeInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(220, TypeInterface::TYPE_ARRAY);
        $this->assertEquals(254, TypeInterface::TYPE_BOOLEAN);
        $this->assertEquals(86, TypeInterface::TYPE_DATE);
        $this->assertEquals(195, TypeInterface::TYPE_DOUBLE);
        $this->assertEquals(179, TypeInterface::TYPE_FLOAT);
        $this->assertEquals(308, TypeInterface::TYPE_INTEGER);
        $this->assertEquals(236, TypeInterface::TYPE_NUMBER);
        $this->assertEquals(204, TypeInterface::TYPE_OBJECT);
        $this->assertEquals(419, TypeInterface::TYPE_RESOURCE);
        $this->assertEquals(261, TypeInterface::TYPE_STRING);
        $this->assertEquals(567, TypeInterface::TYPE_TIMESTAMP);
    }
}
