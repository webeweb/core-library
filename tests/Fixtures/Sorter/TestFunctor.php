<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Sorter;

use WBW\Library\Common\Sorter\FunctorInterface;

/**
 * Test functor.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Sorter
 */
class TestFunctor implements FunctorInterface {

    /**
     * {@inheritDoc}
     */
    public function compare($a, $b): bool {
        return $a < $b;
    }
}
