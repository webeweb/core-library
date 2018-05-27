<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures\Algorithm\Sorting;

use WBW\Library\Core\Algorithm\Sorting\FunctorInterface;

/**
 * Integer functor.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Fixtures\Node
 * @final
 */
final class IntegerFunctor implements FunctorInterface {

    /**
     * {@inheritdoc}
     */
    public function compare($valueA, $valueB) {
        return $valueA < $valueB;
    }

}
