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
 * At taux2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTaux2Trait {

    /**
     * At taux2.
     *
     * @var float
     */
    private $atTaux2;

    /**
     * Get the at taux2.
     *
     * @return float Returns the at taux2.
     */
    public function getAtTaux2() {
        return $this->atTaux2;
    }

    /**
     * Set the at taux2.
     *
     * @param float $atTaux2 The at taux2.
     */
    public function setAtTaux2($atTaux2) {
        $this->atTaux2 = $atTaux2;
        return $this;
    }
}
