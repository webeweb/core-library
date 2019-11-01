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
 * Nature produit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureProduitTrait {

    /**
     * Nature produit.
     *
     * @var string
     */
    private $natureProduit;

    /**
     * Get the nature produit.
     *
     * @return string Returns the nature produit.
     */
    public function getNatureProduit() {
        return $this->natureProduit;
    }

    /**
     * Set the nature produit.
     *
     * @param string $natureProduit The nature produit.
     */
    public function setNatureProduit($natureProduit) {
        $this->natureProduit = $natureProduit;
        return $this;
    }
}
