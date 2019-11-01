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
 * Nom categorie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomCategorieTrait {

    /**
     * Nom categorie.
     *
     * @var string
     */
    private $nomCategorie;

    /**
     * Get the nom categorie.
     *
     * @return string Returns the nom categorie.
     */
    public function getNomCategorie() {
        return $this->nomCategorie;
    }

    /**
     * Set the nom categorie.
     *
     * @param string $nomCategorie The nom categorie.
     */
    public function setNomCategorie($nomCategorie) {
        $this->nomCategorie = $nomCategorie;
        return $this;
    }
}
