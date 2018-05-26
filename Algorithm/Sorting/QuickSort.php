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
     * Fonctor.
     *
     * @var FonctorInterface
     */
    private $fonctor;

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
     * @param FonctorInterface $fonctor The fonctor.
     */
    public function __construct(array $values, FonctorInterface $fonctor) {
        $this->setFonctor($fonctor);
        $this->setValues($values);
    }

    /**
     * Get the fonctor.
     *
     * @return Fonctor Returns the fonctor.
     */
    public function getFonctor() {
        return $this->fonctor;
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

            while (true === $this->fonctor->compare($this->values[$i], $pivot)) {
                ++$i;
            }

            while (true === $this->fonctor->compare($pivot, $this->values[$j])) {
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
     * @param FonctorInterface $fonctor The fonctor.
     * @return QuickSort Returns this quick sort.
     */
    public function setFonctor(FonctorInterface $fonctor) {
        $this->fonctor = $fonctor;
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
