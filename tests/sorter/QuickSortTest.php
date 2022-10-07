<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter\Tests;

use WBW\Library\Sorter\FunctorInterface;
use WBW\Library\Sorter\QuickSort;
use WBW\Library\Sorter\Tests\Fixtures\TestIntegerFunctor;

/**
 * Quick sort test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter\Tests
 */
class QuickSortTest extends AbstractTestCase {

    /**
     * Functor.
     *
     * @var FunctorInterface
     */
    private $functor;

    /**
     * Values.
     *
     * @var array
     */
    private $values;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the functor mock.
        $this->functor = new TestIntegerFunctor();

        // Set the values mock.
        $this->values = [12, 98, 21, 89, 23, 87, 32, 78, 34, 76, 43, 67, 45, 65, 54, 56,];
    }

    /**
     * Tests sort()
     *
     * @return void
     */
    public function testSort(): void {

        $obj = new QuickSort($this->values, $this->functor);

        $obj->sort();

        $exp = [12, 21, 23, 32, 34, 43, 45, 54, 56, 65, 67, 76, 78, 87, 89, 98];

        $this->assertEquals($exp, $obj->getValues());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new QuickSort($this->values, $this->functor);

        $this->assertSame($this->functor, $obj->getFunctor());
        $this->assertSame($this->values, $obj->getValues());
    }
}
