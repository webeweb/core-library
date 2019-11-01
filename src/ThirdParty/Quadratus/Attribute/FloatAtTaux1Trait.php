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
 * At taux1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTaux1Trait {

    /**
     * At taux1.
     *
     * @var float
     */
    private $atTaux1;

    /**
     * Get the at taux1.
     *
     * @return float Returns the at taux1.
     */
    public function getAtTaux1() {
        return $this->atTaux1;
    }

    /**
     * Set the at taux1.
     *
     * @param float $atTaux1 The at taux1.
     */
    public function setAtTaux1($atTaux1) {
        $this->atTaux1 = $atTaux1;
        return $this;
    }
}
