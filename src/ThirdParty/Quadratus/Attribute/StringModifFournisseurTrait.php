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
 * Modif fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifFournisseurTrait {

    /**
     * Modif fournisseur.
     *
     * @var string
     */
    private $modifFournisseur;

    /**
     * Get the modif fournisseur.
     *
     * @return string Returns the modif fournisseur.
     */
    public function getModifFournisseur() {
        return $this->modifFournisseur;
    }

    /**
     * Set the modif fournisseur.
     *
     * @param string $modifFournisseur The modif fournisseur.
     */
    public function setModifFournisseur($modifFournisseur) {
        $this->modifFournisseur = $modifFournisseur;
        return $this;
    }
}
