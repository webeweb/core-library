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
 * Is fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIsFournisseurTrait {

    /**
     * Is fournisseur.
     *
     * @var string
     */
    private $isFournisseur;

    /**
     * Get the is fournisseur.
     *
     * @return string Returns the is fournisseur.
     */
    public function getIsFournisseur() {
        return $this->isFournisseur;
    }

    /**
     * Set the is fournisseur.
     *
     * @param string $isFournisseur The is fournisseur.
     */
    public function setIsFournisseur($isFournisseur) {
        $this->isFournisseur = $isFournisseur;
        return $this;
    }
}
