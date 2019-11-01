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
 * Montant ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantHtTrait {

    /**
     * Montant ht.
     *
     * @var float
     */
    private $montantHt;

    /**
     * Get the montant ht.
     *
     * @return float Returns the montant ht.
     */
    public function getMontantHt() {
        return $this->montantHt;
    }

    /**
     * Set the montant ht.
     *
     * @param float $montantHt The montant ht.
     */
    public function setMontantHt($montantHt) {
        $this->montantHt = $montantHt;
        return $this;
    }
}
