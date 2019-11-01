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
 * Taux h sup5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHSup5Trait {

    /**
     * Taux h sup5.
     *
     * @var float
     */
    private $tauxHSup5;

    /**
     * Get the taux h sup5.
     *
     * @return float Returns the taux h sup5.
     */
    public function getTauxHSup5() {
        return $this->tauxHSup5;
    }

    /**
     * Set the taux h sup5.
     *
     * @param float $tauxHSup5 The taux h sup5.
     */
    public function setTauxHSup5($tauxHSup5) {
        $this->tauxHSup5 = $tauxHSup5;
        return $this;
    }
}
