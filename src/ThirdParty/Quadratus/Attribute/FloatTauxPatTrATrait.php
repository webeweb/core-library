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
 * Taux pat tr a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPatTrATrait {

    /**
     * Taux pat tr a.
     *
     * @var float
     */
    private $tauxPatTrA;

    /**
     * Get the taux pat tr a.
     *
     * @return float Returns the taux pat tr a.
     */
    public function getTauxPatTrA() {
        return $this->tauxPatTrA;
    }

    /**
     * Set the taux pat tr a.
     *
     * @param float $tauxPatTrA The taux pat tr a.
     */
    public function setTauxPatTrA($tauxPatTrA) {
        $this->tauxPatTrA = $tauxPatTrA;
        return $this;
    }
}
