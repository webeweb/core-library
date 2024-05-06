<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\QueryBuilder\Tests\Model;

use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder decorator interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderDecoratorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("{{ separator }}", QueryBuilderDecoratorInterface::DEFAULT_SEPARATOR);
    }
}
