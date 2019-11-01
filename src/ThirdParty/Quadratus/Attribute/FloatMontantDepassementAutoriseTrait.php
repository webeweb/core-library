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
 * Montant depassement autorise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantDepassementAutoriseTrait {

    /**
     * Montant depassement autorise.
     *
     * @var float
     */
    private $montantDepassementAutorise;

    /**
     * Get the montant depassement autorise.
     *
     * @return float Returns the montant depassement autorise.
     */
    public function getMontantDepassementAutorise() {
        return $this->montantDepassementAutorise;
    }

    /**
     * Set the montant depassement autorise.
     *
     * @param float $montantDepassementAutorise The montant depassement autorise.
     */
    public function setMontantDepassementAutorise($montantDepassementAutorise) {
        $this->montantDepassementAutorise = $montantDepassementAutorise;
        return $this;
    }
}
