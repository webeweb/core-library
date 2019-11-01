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
 * Taux h sup4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHSup4Trait {

    /**
     * Taux h sup4.
     *
     * @var float
     */
    private $tauxHSup4;

    /**
     * Get the taux h sup4.
     *
     * @return float Returns the taux h sup4.
     */
    public function getTauxHSup4() {
        return $this->tauxHSup4;
    }

    /**
     * Set the taux h sup4.
     *
     * @param float $tauxHSup4 The taux h sup4.
     */
    public function setTauxHSup4($tauxHSup4) {
        $this->tauxHSup4 = $tauxHSup4;
        return $this;
    }
}
