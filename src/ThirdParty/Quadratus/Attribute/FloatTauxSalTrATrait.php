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
 * Taux sal tr a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSalTrATrait {

    /**
     * Taux sal tr a.
     *
     * @var float
     */
    private $tauxSalTrA;

    /**
     * Get the taux sal tr a.
     *
     * @return float Returns the taux sal tr a.
     */
    public function getTauxSalTrA() {
        return $this->tauxSalTrA;
    }

    /**
     * Set the taux sal tr a.
     *
     * @param float $tauxSalTrA The taux sal tr a.
     */
    public function setTauxSalTrA($tauxSalTrA) {
        $this->tauxSalTrA = $tauxSalTrA;
        return $this;
    }
}
