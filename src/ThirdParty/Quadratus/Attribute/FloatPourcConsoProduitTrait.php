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
 * Pourc conso produit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcConsoProduitTrait {

    /**
     * Pourc conso produit.
     *
     * @var float
     */
    private $pourcConsoProduit;

    /**
     * Get the pourc conso produit.
     *
     * @return float Returns the pourc conso produit.
     */
    public function getPourcConsoProduit() {
        return $this->pourcConsoProduit;
    }

    /**
     * Set the pourc conso produit.
     *
     * @param float $pourcConsoProduit The pourc conso produit.
     */
    public function setPourcConsoProduit($pourcConsoProduit) {
        $this->pourcConsoProduit = $pourcConsoProduit;
        return $this;
    }
}
