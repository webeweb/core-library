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
 * Creation fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationFournisseurTrait {

    /**
     * Creation fournisseur.
     *
     * @var bool
     */
    private $creationFournisseur;

    /**
     * Get the creation fournisseur.
     *
     * @return bool Returns the creation fournisseur.
     */
    public function getCreationFournisseur() {
        return $this->creationFournisseur;
    }

    /**
     * Set the creation fournisseur.
     *
     * @param bool $creationFournisseur The creation fournisseur.
     */
    public function setCreationFournisseur($creationFournisseur) {
        $this->creationFournisseur = $creationFournisseur;
        return $this;
    }
}
