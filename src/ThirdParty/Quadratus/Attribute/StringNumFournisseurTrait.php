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
 * Num fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumFournisseurTrait {

    /**
     * Num fournisseur.
     *
     * @var string
     */
    private $numFournisseur;

    /**
     * Get the num fournisseur.
     *
     * @return string Returns the num fournisseur.
     */
    public function getNumFournisseur() {
        return $this->numFournisseur;
    }

    /**
     * Set the num fournisseur.
     *
     * @param string $numFournisseur The num fournisseur.
     */
    public function setNumFournisseur($numFournisseur) {
        $this->numFournisseur = $numFournisseur;
        return $this;
    }
}
