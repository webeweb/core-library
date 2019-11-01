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
 * Taux assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxAssuranceTrait {

    /**
     * Taux assurance.
     *
     * @var float
     */
    private $tauxAssurance;

    /**
     * Get the taux assurance.
     *
     * @return float Returns the taux assurance.
     */
    public function getTauxAssurance() {
        return $this->tauxAssurance;
    }

    /**
     * Set the taux assurance.
     *
     * @param float $tauxAssurance The taux assurance.
     */
    public function setTauxAssurance($tauxAssurance) {
        $this->tauxAssurance = $tauxAssurance;
        return $this;
    }
}
