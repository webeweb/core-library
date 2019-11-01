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
 * Taux h sup2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHSup2Trait {

    /**
     * Taux h sup2.
     *
     * @var float
     */
    private $tauxHSup2;

    /**
     * Get the taux h sup2.
     *
     * @return float Returns the taux h sup2.
     */
    public function getTauxHSup2() {
        return $this->tauxHSup2;
    }

    /**
     * Set the taux h sup2.
     *
     * @param float $tauxHSup2 The taux h sup2.
     */
    public function setTauxHSup2($tauxHSup2) {
        $this->tauxHSup2 = $tauxHSup2;
        return $this;
    }
}
