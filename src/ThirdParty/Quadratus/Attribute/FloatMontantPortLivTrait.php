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
 * Montant port liv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantPortLivTrait {

    /**
     * Montant port liv.
     *
     * @var float
     */
    private $montantPortLiv;

    /**
     * Get the montant port liv.
     *
     * @return float Returns the montant port liv.
     */
    public function getMontantPortLiv() {
        return $this->montantPortLiv;
    }

    /**
     * Set the montant port liv.
     *
     * @param float $montantPortLiv The montant port liv.
     */
    public function setMontantPortLiv($montantPortLiv) {
        $this->montantPortLiv = $montantPortLiv;
        return $this;
    }
}
