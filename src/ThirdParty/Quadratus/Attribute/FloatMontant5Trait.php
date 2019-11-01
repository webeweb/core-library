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
 * Montant5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontant5Trait {

    /**
     * Montant5.
     *
     * @var float
     */
    private $montant5;

    /**
     * Get the montant5.
     *
     * @return float Returns the montant5.
     */
    public function getMontant5() {
        return $this->montant5;
    }

    /**
     * Set the montant5.
     *
     * @param float $montant5 The montant5.
     */
    public function setMontant5($montant5) {
        $this->montant5 = $montant5;
        return $this;
    }
}
