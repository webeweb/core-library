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
 * Debit fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDebitFournisseurTrait {

    /**
     * Debit fournisseur.
     *
     * @var float
     */
    private $debitFournisseur;

    /**
     * Get the debit fournisseur.
     *
     * @return float Returns the debit fournisseur.
     */
    public function getDebitFournisseur() {
        return $this->debitFournisseur;
    }

    /**
     * Set the debit fournisseur.
     *
     * @param float $debitFournisseur The debit fournisseur.
     */
    public function setDebitFournisseur($debitFournisseur) {
        $this->debitFournisseur = $debitFournisseur;
        return $this;
    }
}
