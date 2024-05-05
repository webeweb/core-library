<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\QueryBuilder\Tests\Fixtures\Model;

use WBW\Library\QueryBuilder\Model\AbstractQueryBuilder;

/**
 * Test abstract QueryBuilder.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Fixtures\Model
 */
class TestAbstractQueryBuilder extends AbstractQueryBuilder {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }
}
