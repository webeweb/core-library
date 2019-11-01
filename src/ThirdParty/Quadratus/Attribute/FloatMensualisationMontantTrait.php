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
 * Mensualisation montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMensualisationMontantTrait {

    /**
     * Mensualisation montant.
     *
     * @var float
     */
    private $mensualisationMontant;

    /**
     * Get the mensualisation montant.
     *
     * @return float Returns the mensualisation montant.
     */
    public function getMensualisationMontant() {
        return $this->mensualisationMontant;
    }

    /**
     * Set the mensualisation montant.
     *
     * @param float $mensualisationMontant The mensualisation montant.
     */
    public function setMensualisationMontant($mensualisationMontant) {
        $this->mensualisationMontant = $mensualisationMontant;
        return $this;
    }
}
