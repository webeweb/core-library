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
     * @var float|null
     */
    protected $y;

    /**
     * Get the y.
     *
     * @return float|null Returns the y.
     */
    public function getY(): ?float {
        return $this->y;
    }

    /**
     * Get the (int) y.
     *
     * @return int Returns the y.
     */
    public function getYInt(): int {
        return intval($this->y);
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     */
    public function setY(?float $y) {
        $this->y = $y;
        return $this;
    }
}
