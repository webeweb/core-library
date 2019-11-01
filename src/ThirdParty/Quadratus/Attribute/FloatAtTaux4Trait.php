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
 * At taux4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTaux4Trait {

    /**
     * At taux4.
     *
     * @var float
     */
    private $atTaux4;

    /**
     * Get the at taux4.
     *
     * @return float Returns the at taux4.
     */
    public function getAtTaux4() {
        return $this->atTaux4;
    }

    /**
     * Set the at taux4.
     *
     * @param float $atTaux4 The at taux4.
     */
    public function setAtTaux4($atTaux4) {
        $this->atTaux4 = $atTaux4;
        return $this;
    }
}
