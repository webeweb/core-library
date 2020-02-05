<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Float y trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatYTrait {

    /**
     * Y.
     *
     * @var float
     */
    protected $y;

    /**
     * Get the y.
     *
     * @return float Returns the y.
     */
    public function getY() {
        return $this->y;
    }

    /**
     * Set the y.
     *
     * @param float $y The y.
     */
    public function setY($y) {
        $this->y = $y;
        return $this;
    }
}
