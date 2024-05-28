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

use WBW\Library\QueryBuilder\Model\QueryBuilderInputInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder input interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderInputInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("checkbox", QueryBuilderInputInterface::INPUT_CHECKBOX);
        $this->assertEquals("number", QueryBuilderInputInterface::INPUT_NUMBER);
        $this->assertEquals("radio", QueryBuilderInputInterface::INPUT_RADIO);
        $this->assertEquals("select", QueryBuilderInputInterface::INPUT_SELECT);
        $this->assertEquals("text", QueryBuilderInputInterface::INPUT_TEXT);
        $this->assertEquals("textarea", QueryBuilderInputInterface::INPUT_TEXTAREA);
    }
}
