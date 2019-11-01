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
 * Montant cheque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantChequeTrait {

    /**
     * Montant cheque.
     *
     * @var float
     */
    private $montantCheque;

    /**
     * Get the montant cheque.
     *
     * @return float Returns the montant cheque.
     */
    public function getMontantCheque() {
        return $this->montantCheque;
    }

    /**
     * Set the montant cheque.
     *
     * @param float $montantCheque The montant cheque.
     */
    public function setMontantCheque($montantCheque) {
        $this->montantCheque = $montantCheque;
        return $this;
    }
}
