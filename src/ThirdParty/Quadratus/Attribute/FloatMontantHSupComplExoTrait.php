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
 * Montant h sup compl exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantHSupComplExoTrait {

    /**
     * Montant h sup compl exo.
     *
     * @var float
     */
    private $montantHSupComplExo;

    /**
     * Get the montant h sup compl exo.
     *
     * @return float Returns the montant h sup compl exo.
     */
    public function getMontantHSupComplExo() {
        return $this->montantHSupComplExo;
    }

    /**
     * Set the montant h sup compl exo.
     *
     * @param float $montantHSupComplExo The montant h sup compl exo.
     */
    public function setMontantHSupComplExo($montantHSupComplExo) {
        $this->montantHSupComplExo = $montantHSupComplExo;
        return $this;
    }
}
