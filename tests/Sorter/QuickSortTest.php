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

namespace WBW\Library\Common\Tests\Sorter;

use WBW\Library\Common\Sorter\FunctorInterface;
use WBW\Library\Common\Sorter\QuickSort;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Sorter\TestFunctor;

/**
 * Quick sort test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Sorter
 */
class QuickSortTest extends AbstractTestCase {

    /**
     * Functor.
     *
     * @var FunctorInterface|null
     */
    private $functor;

    /**
     * Values.
     *
     * @var int[]|null
     */
    private $values;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the functor mock.
        $this->functor = new TestFunctor();

        // Set the values mock.
        $this->values = [12, 98, 21, 89, 23, 87, 32, 78, 34, 76, 43, 67, 45, 65, 54, 56,];
    }

    /**
     * Test sort()
     *
     * @return void
     */
    public function testSort(): void {

        $exp = [12, 21, 23, 32, 34, 43, 45, 54, 56, 65, 67, 76, 78, 87, 89, 98];

        $obj = new QuickSort($this->values, $this->functor);

        $obj->sort();
        $this->assertEquals($exp, $obj->getValues());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new QuickSort($this->values, $this->functor);

        $this->assertSame($this->functor, $obj->getFunctor());
        $this->assertSame($this->values, $obj->getValues());
    }
}
