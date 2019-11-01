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
 * Montant groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantGroupeTrait {

    /**
     * Montant groupe.
     *
     * @var float
     */
    private $montantGroupe;

    /**
     * Get the montant groupe.
     *
     * @return float Returns the montant groupe.
     */
    public function getMontantGroupe() {
        return $this->montantGroupe;
    }

    /**
     * Set the montant groupe.
     *
     * @param float $montantGroupe The montant groupe.
     */
    public function setMontantGroupe($montantGroupe) {
        $this->montantGroupe = $montantGroupe;
        return $this;
    }
}
