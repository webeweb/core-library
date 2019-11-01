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
 * Taux h sup1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHSup1Trait {

    /**
     * Taux h sup1.
     *
     * @var float
     */
    private $tauxHSup1;

    /**
     * Get the taux h sup1.
     *
     * @return float Returns the taux h sup1.
     */
    public function getTauxHSup1() {
        return $this->tauxHSup1;
    }

    /**
     * Set the taux h sup1.
     *
     * @param float $tauxHSup1 The taux h sup1.
     */
    public function setTauxHSup1($tauxHSup1) {
        $this->tauxHSup1 = $tauxHSup1;
        return $this;
    }
}
