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
 * At taux3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTaux3Trait {

    /**
     * At taux3.
     *
     * @var float
     */
    private $atTaux3;

    /**
     * Get the at taux3.
     *
     * @return float Returns the at taux3.
     */
    public function getAtTaux3() {
        return $this->atTaux3;
    }

    /**
     * Set the at taux3.
     *
     * @param float $atTaux3 The at taux3.
     */
    public function setAtTaux3($atTaux3) {
        $this->atTaux3 = $atTaux3;
        return $this;
    }
}
