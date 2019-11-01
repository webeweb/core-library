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
 * Code produit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeProduitTrait {

    /**
     * Code produit.
     *
     * @var string
     */
    private $codeProduit;

    /**
     * Get the code produit.
     *
     * @return string Returns the code produit.
     */
    public function getCodeProduit() {
        return $this->codeProduit;
    }

    /**
     * Set the code produit.
     *
     * @param string $codeProduit The code produit.
     */
    public function setCodeProduit($codeProduit) {
        $this->codeProduit = $codeProduit;
        return $this;
    }
}
