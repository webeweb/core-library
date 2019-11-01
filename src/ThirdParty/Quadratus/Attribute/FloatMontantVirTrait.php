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
 * Montant vir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantVirTrait {

    /**
     * Montant vir.
     *
     * @var float
     */
    private $montantVir;

    /**
     * Get the montant vir.
     *
     * @return float Returns the montant vir.
     */
    public function getMontantVir() {
        return $this->montantVir;
    }

    /**
     * Set the montant vir.
     *
     * @param float $montantVir The montant vir.
     */
    public function setMontantVir($montantVir) {
        $this->montantVir = $montantVir;
        return $this;
    }
}
