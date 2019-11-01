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
 * Credit fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCreditFournisseurTrait {

    /**
     * Credit fournisseur.
     *
     * @var float
     */
    private $creditFournisseur;

    /**
     * Get the credit fournisseur.
     *
     * @return float Returns the credit fournisseur.
     */
    public function getCreditFournisseur() {
        return $this->creditFournisseur;
    }

    /**
     * Set the credit fournisseur.
     *
     * @param float $creditFournisseur The credit fournisseur.
     */
    public function setCreditFournisseur($creditFournisseur) {
        $this->creditFournisseur = $creditFournisseur;
        return $this;
    }
}
