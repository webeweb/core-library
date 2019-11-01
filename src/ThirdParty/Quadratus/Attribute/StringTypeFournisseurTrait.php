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
 * Type fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeFournisseurTrait {

    /**
     * Type fournisseur.
     *
     * @var string
     */
    private $typeFournisseur;

    /**
     * Get the type fournisseur.
     *
     * @return string Returns the type fournisseur.
     */
    public function getTypeFournisseur() {
        return $this->typeFournisseur;
    }

    /**
     * Set the type fournisseur.
     *
     * @param string $typeFournisseur The type fournisseur.
     */
    public function setTypeFournisseur($typeFournisseur) {
        $this->typeFournisseur = $typeFournisseur;
        return $this;
    }
}
