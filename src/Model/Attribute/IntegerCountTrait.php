<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Integer count trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerCountTrait {

    /**
     * Count.
     *
     * @var integer
     */
    protected $count;

    /**
     * Get the count.
     *
     * @return integer Returns the count.
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * Set the count.
     *
     * @param integer $count The count.
     */
    public function setCount($count) {
        $this->count = $count;
        return $this;
    }
}
