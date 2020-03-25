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
 * Float x trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatXTrait {

    /**
     * X.
     *
     * @var float
     */
    protected $x;

    /**
     * Get the x.
     *
     * @return float Returns the x.
     */
    public function getX() {
        return $this->x;
    }

    /**
     * Get the (int) x.
     *
     * @return int Returns the x.
     */
    public function getXInt() {
        return intval($this->x);
    }

    /**
     * Set the x.
     *
     * @param float $x The x.
     */
    public function setX($x) {
        $this->x = $x;
        return $this;
    }
}
