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
 * Produit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProduitTrait {

    /**
     * Produit.
     *
     * @var bool
     */
    private $produit;

    /**
     * Get the produit.
     *
     * @return bool Returns the produit.
     */
    public function getProduit() {
        return $this->produit;
    }

    /**
     * Set the produit.
     *
     * @param bool $produit The produit.
     */
    public function setProduit($produit) {
        $this->produit = $produit;
        return $this;
    }
}
