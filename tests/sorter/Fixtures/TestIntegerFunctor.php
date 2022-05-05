<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter\Tests\Fixtures;

use WBW\Library\Sorter\FunctorInterface;

/**
 * Test integer functor.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter\Tests\Fixtures
 */
class TestIntegerFunctor implements FunctorInterface {

    /**
     * {@inheritdoc}
     */
    public function compare($a, $b): bool {
        return $a < $b;
    }
}
