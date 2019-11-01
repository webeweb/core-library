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
 * Montant allegement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAllegementTrait {

    /**
     * Montant allegement.
     *
     * @var float
     */
    private $montantAllegement;

    /**
     * Get the montant allegement.
     *
     * @return float Returns the montant allegement.
     */
    public function getMontantAllegement() {
        return $this->montantAllegement;
    }

    /**
     * Set the montant allegement.
     *
     * @param float $montantAllegement The montant allegement.
     */
    public function setMontantAllegement($montantAllegement) {
        $this->montantAllegement = $montantAllegement;
        return $this;
    }
}
