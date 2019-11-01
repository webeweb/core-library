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
 * Montant mini cde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantMiniCdeTrait {

    /**
     * Montant mini cde.
     *
     * @var float
     */
    private $montantMiniCde;

    /**
     * Get the montant mini cde.
     *
     * @return float Returns the montant mini cde.
     */
    public function getMontantMiniCde() {
        return $this->montantMiniCde;
    }

    /**
     * Set the montant mini cde.
     *
     * @param float $montantMiniCde The montant mini cde.
     */
    public function setMontantMiniCde($montantMiniCde) {
        $this->montantMiniCde = $montantMiniCde;
        return $this;
    }
}
