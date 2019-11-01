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
 * Qws nom produit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQwsNomProduitTrait {

    /**
     * Qws nom produit.
     *
     * @var string
     */
    private $qwsNomProduit;

    /**
     * Get the qws nom produit.
     *
     * @return string Returns the qws nom produit.
     */
    public function getQwsNomProduit() {
        return $this->qwsNomProduit;
    }

    /**
     * Set the qws nom produit.
     *
     * @param string $qwsNomProduit The qws nom produit.
     */
    public function setQwsNomProduit($qwsNomProduit) {
        $this->qwsNomProduit = $qwsNomProduit;
        return $this;
    }
}
