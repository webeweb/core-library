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
 * Px km a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxKmATrait {

    /**
     * Px km a.
     *
     * @var float
     */
    private $pxKmA;

    /**
     * Get the px km a.
     *
     * @return float Returns the px km a.
     */
    public function getPxKmA() {
        return $this->pxKmA;
    }

    /**
     * Set the px km a.
     *
     * @param float $pxKmA The px km a.
     */
    public function setPxKmA($pxKmA) {
        $this->pxKmA = $pxKmA;
        return $this;
    }
}
