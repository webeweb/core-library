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
 * X fer dos cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerDosCptaTrait {

    /**
     * X fer dos cpta.
     *
     * @var bool
     */
    private $xFerDosCpta;

    /**
     * Get the x fer dos cpta.
     *
     * @return bool Returns the x fer dos cpta.
     */
    public function getXFerDosCpta() {
        return $this->xFerDosCpta;
    }

    /**
     * Set the x fer dos cpta.
     *
     * @param bool $xFerDosCpta The x fer dos cpta.
     */
    public function setXFerDosCpta($xFerDosCpta) {
        $this->xFerDosCpta = $xFerDosCpta;
        return $this;
    }
}
