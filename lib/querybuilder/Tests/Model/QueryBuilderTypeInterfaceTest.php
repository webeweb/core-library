<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Tests\Model;

use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder type interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderTypeInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("boolean", QueryBuilderTypeInterface::TYPE_BOOLEAN);
        $this->assertEquals("date", QueryBuilderTypeInterface::TYPE_DATE);
        $this->assertEquals("datetime", QueryBuilderTypeInterface::TYPE_DATETIME);
        $this->assertEquals("double", QueryBuilderTypeInterface::TYPE_DOUBLE);
        $this->assertEquals("integer", QueryBuilderTypeInterface::TYPE_INTEGER);
        $this->assertEquals("string", QueryBuilderTypeInterface::TYPE_STRING);
        $this->assertEquals("time", QueryBuilderTypeInterface::TYPE_TIME);
    }
}
