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
 * Montant acompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAcompteTrait {

    /**
     * Montant acompte.
     *
     * @var float
     */
    private $montantAcompte;

    /**
     * Get the montant acompte.
     *
     * @return float Returns the montant acompte.
     */
    public function getMontantAcompte() {
        return $this->montantAcompte;
    }

    /**
     * Set the montant acompte.
     *
     * @param float $montantAcompte The montant acompte.
     */
    public function setMontantAcompte($montantAcompte) {
        $this->montantAcompte = $montantAcompte;
        return $this;
    }
}
