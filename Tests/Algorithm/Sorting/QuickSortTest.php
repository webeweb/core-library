<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Algorithm\Sorting;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Algorithm\Sorting\FunctorInterface;
use WBW\Library\Core\Algorithm\Sorting\QuickSort;
use WBW\Library\Core\Tests\Fixtures\Algorithm\Sorting\IntegerFunctor;

/**
 * Quick sort test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Algorithm\Sorting
 * @final
 */
final class QuickSortTest extends PHPUnit_Framework_TestCase {

    /**
     * Functor.
     *
     * @var FunctorInterface
     */
    private $fonctor;

    /**
     * Values.
     *
     * @var array
     */
    private $values;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        // Set the fonctor mock.
        $this->fonctor = new IntegerFunctor();

        // Set the values mock.
        $this->values = [12, 98, 21, 89, 23, 87, 32, 78, 34, 76, 43, 67, 45, 65, 54, 56,];
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new QuickSort($this->values, $this->fonctor);

        $this->assertSame($this->fonctor, $obj->getFunctor());
        $this->assertSame($this->values, $obj->getValues());
    }

    /**
     * Tests the sort() method.
     *
     * @return void
     */
    public function testSort() {

        $obj = new QuickSort($this->values, $this->fonctor);

        $obj->sort();
        $res = [12, 21, 23, 32, 34, 43, 45, 54, 56, 65, 67, 76, 78, 87, 89, 98];
        $this->assertEquals($res, $obj->getValues());
    }

}
