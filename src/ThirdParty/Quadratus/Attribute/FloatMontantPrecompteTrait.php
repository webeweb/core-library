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
 * Montant precompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantPrecompteTrait {

    /**
     * Montant precompte.
     *
     * @var float
     */
    private $montantPrecompte;

    /**
     * Get the montant precompte.
     *
     * @return float Returns the montant precompte.
     */
    public function getMontantPrecompte() {
        return $this->montantPrecompte;
    }

    /**
     * Set the montant precompte.
     *
     * @param float $montantPrecompte The montant precompte.
     */
    public function setMontantPrecompte($montantPrecompte) {
        $this->montantPrecompte = $montantPrecompte;
        return $this;
    }
}
