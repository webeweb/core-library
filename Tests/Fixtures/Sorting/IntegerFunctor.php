<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures\Sorting;

use WBW\Library\Core\Sorting\FunctorInterface;

/**
 * Integer functor.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Fixtures\Sorting
 * @final
 */
final class IntegerFunctor implements FunctorInterface {

    /**
     * {@inheritdoc}
     */
    public function compare($a, $b) {
        return $a < $b;
    }

}
