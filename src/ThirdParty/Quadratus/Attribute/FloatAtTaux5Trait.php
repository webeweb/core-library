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
 * At taux5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTaux5Trait {

    /**
     * At taux5.
     *
     * @var float
     */
    private $atTaux5;

    /**
     * Get the at taux5.
     *
     * @return float Returns the at taux5.
     */
    public function getAtTaux5() {
        return $this->atTaux5;
    }

    /**
     * Set the at taux5.
     *
     * @param float $atTaux5 The at taux5.
     */
    public function setAtTaux5($atTaux5) {
        $this->atTaux5 = $atTaux5;
        return $this;
    }
}
