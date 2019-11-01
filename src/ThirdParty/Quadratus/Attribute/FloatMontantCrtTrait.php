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
 * Montant crt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCrtTrait {

    /**
     * Montant crt.
     *
     * @var float
     */
    private $montantCrt;

    /**
     * Get the montant crt.
     *
     * @return float Returns the montant crt.
     */
    public function getMontantCrt() {
        return $this->montantCrt;
    }

    /**
     * Set the montant crt.
     *
     * @param float $montantCrt The montant crt.
     */
    public function setMontantCrt($montantCrt) {
        $this->montantCrt = $montantCrt;
        return $this;
    }
}
