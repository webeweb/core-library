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
 * z excedent versement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzExcedentVersementTrait {

    /**
     * z excedent versement.
     *
     * @var float
     */
    private $zExcedentVersement;

    /**
     * Get the z excedent versement.
     *
     * @return float Returns the z excedent versement.
     */
    public function getzExcedentVersement() {
        return $this->zExcedentVersement;
    }

    /**
     * Set the z excedent versement.
     *
     * @param float $zExcedentVersement The z excedent versement.
     */
    public function setzExcedentVersement($zExcedentVersement) {
        $this->zExcedentVersement = $zExcedentVersement;
        return $this;
    }
}
