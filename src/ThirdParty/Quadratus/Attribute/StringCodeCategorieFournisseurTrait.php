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
 * Code categorie fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCategorieFournisseurTrait {

    /**
     * Code categorie fournisseur.
     *
     * @var string
     */
    private $codeCategorieFournisseur;

    /**
     * Get the code categorie fournisseur.
     *
     * @return string Returns the code categorie fournisseur.
     */
    public function getCodeCategorieFournisseur() {
        return $this->codeCategorieFournisseur;
    }

    /**
     * Set the code categorie fournisseur.
     *
     * @param string $codeCategorieFournisseur The code categorie fournisseur.
     */
    public function setCodeCategorieFournisseur($codeCategorieFournisseur) {
        $this->codeCategorieFournisseur = $codeCategorieFournisseur;
        return $this;
    }
}
