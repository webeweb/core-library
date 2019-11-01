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
 * Collectif def fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifDefFournisseurTrait {

    /**
     * Collectif def fournisseur.
     *
     * @var string
     */
    private $collectifDefFournisseur;

    /**
     * Get the collectif def fournisseur.
     *
     * @return string Returns the collectif def fournisseur.
     */
    public function getCollectifDefFournisseur() {
        return $this->collectifDefFournisseur;
    }

    /**
     * Set the collectif def fournisseur.
     *
     * @param string $collectifDefFournisseur The collectif def fournisseur.
     */
    public function setCollectifDefFournisseur($collectifDefFournisseur) {
        $this->collectifDefFournisseur = $collectifDefFournisseur;
        return $this;
    }
}
