<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseTrait {

    /**
     * Base.
     *
     * @var float
     */
    private $base;

    /**
     * Get the base.
     *
     * @return float Returns the base.
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Set the base.
     *
     * @param float $base The base.
     */
    public function setBase($base) {
        $this->base = $base;
        return $this;
    }
}
