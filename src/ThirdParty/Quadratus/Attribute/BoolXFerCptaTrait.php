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
 * X fer cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCptaTrait {

    /**
     * X fer cpta.
     *
     * @var bool
     */
    private $xFerCpta;

    /**
     * Get the x fer cpta.
     *
     * @return bool Returns the x fer cpta.
     */
    public function getXFerCpta() {
        return $this->xFerCpta;
    }

    /**
     * Set the x fer cpta.
     *
     * @param bool $xFerCpta The x fer cpta.
     */
    public function setXFerCpta($xFerCpta) {
        $this->xFerCpta = $xFerCpta;
        return $this;
    }
}
