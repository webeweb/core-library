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
 * Produit chimique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProduitChimiqueTrait {

    /**
     * Produit chimique.
     *
     * @var bool
     */
    private $produitChimique;

    /**
     * Get the produit chimique.
     *
     * @return bool Returns the produit chimique.
     */
    public function getProduitChimique() {
        return $this->produitChimique;
    }

    /**
     * Set the produit chimique.
     *
     * @param bool $produitChimique The produit chimique.
     */
    public function setProduitChimique($produitChimique) {
        $this->produitChimique = $produitChimique;
        return $this;
    }
}
