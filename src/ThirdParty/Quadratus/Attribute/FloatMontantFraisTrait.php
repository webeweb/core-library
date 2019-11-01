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
 * Montant frais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantFraisTrait {

    /**
     * Montant frais.
     *
     * @var float
     */
    private $montantFrais;

    /**
     * Get the montant frais.
     *
     * @return float Returns the montant frais.
     */
    public function getMontantFrais() {
        return $this->montantFrais;
    }

    /**
     * Set the montant frais.
     *
     * @param float $montantFrais The montant frais.
     */
    public function setMontantFrais($montantFrais) {
        $this->montantFrais = $montantFrais;
        return $this;
    }
}
