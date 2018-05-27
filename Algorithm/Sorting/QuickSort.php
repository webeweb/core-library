<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Algorithm\Sorting;

/**
 * Quick sort.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Algorithm\Sorting
 */
class QuickSort {

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
     * Constructor.
     *
     * @param array $values The values.
     * @param FunctorInterface $functor The fonctor.
     */
    public function __construct(array $values, FunctorInterface $functor) {
        $this->setFunctor($functor);
        $this->setValues($values);
    }

    /**
     * Get the fonctor.
     *
     * @return Functor Returns the fonctor.
     */
    public function getFunctor() {
        return $this->functor;
    }

    /**
     * Get the values.
     *
     * @return array Returns the values.
     */
    public function getValues() {
        return $this->values;
    }

    /**
     * Quick sort the values.
     *
     * @param integer $min The min index.
     * @param integer $max The max index.
     * @return void
     */
    private function quickSort($min, $max) {

        $i = $min;
        $j = $max;

        $pivot = $this->values[$min + ($max - $min) / 2];

        while ($i <= $j) {

            while (true === $this->functor->compare($this->values[$i], $pivot)) {
                ++$i;
            }

            while (true === $this->functor->compare($pivot, $this->values[$j])) {
                --$j;
            }

            if ($i <= $j) {
                $this->swap($i, $j);
                ++$i;
                --$j;
            }
        }

        if ($min < $j) {
            $this->quickSort($min, $j);
        }
        if ($i < $max) {
            $this->quickSort($i, $max);
        }
    }

    /**
     * Set the fonctor.
     *
     * @param FunctorInterface $fonctor The fonctor.
     * @return QuickSort Returns this quick sort.
     */
    public function setFunctor(FunctorInterface $fonctor) {
        $this->functor = $fonctor;
        return $this;
    }

    /**
     * Set the values.
     *
     * @param array $values The values.
     * @return QuickSort Returns this quick sort.
     */
    public function setValues(array $values = []) {
        $this->values = $values;
        return $this;
    }

    /**
     * Sort the values.
     *
     * @return void
     */
    public function sort() {
        $this->quickSort(0, count($this->values) - 1);
    }

    /**
     * Swap two values.
     *
     * @param integer $a The first value index.
     * @param integer $b The second value index.
     */
    private function swap($a, $b) {
        $value            = $this->values[$a];
        $this->values[$a] = $this->values[$b];
        $this->values[$b] = $value;
    }

}
