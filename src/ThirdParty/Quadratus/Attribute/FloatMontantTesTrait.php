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
 * Montant tes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantTesTrait {

    /**
     * Montant tes.
     *
     * @var float
     */
    private $montantTes;

    /**
     * Get the montant tes.
     *
     * @return float Returns the montant tes.
     */
    public function getMontantTes() {
        return $this->montantTes;
    }

    /**
     * Set the montant tes.
     *
     * @param float $montantTes The montant tes.
     */
    public function setMontantTes($montantTes) {
        $this->montantTes = $montantTes;
        return $this;
    }
}
