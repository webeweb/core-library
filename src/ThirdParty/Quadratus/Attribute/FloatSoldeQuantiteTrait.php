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
 * Solde quantite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSoldeQuantiteTrait {

    /**
     * Solde quantite.
     *
     * @var float
     */
    private $soldeQuantite;

    /**
     * Get the solde quantite.
     *
     * @return float Returns the solde quantite.
     */
    public function getSoldeQuantite() {
        return $this->soldeQuantite;
    }

    /**
     * Set the solde quantite.
     *
     * @param float $soldeQuantite The solde quantite.
     */
    public function setSoldeQuantite($soldeQuantite) {
        $this->soldeQuantite = $soldeQuantite;
        return $this;
    }
}
