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
 * Type compteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeCompteurTrait {

    /**
     * Type compteur.
     *
     * @var bool
     */
    private $typeCompteur;

    /**
     * Get the type compteur.
     *
     * @return bool Returns the type compteur.
     */
    public function getTypeCompteur() {
        return $this->typeCompteur;
    }

    /**
     * Set the type compteur.
     *
     * @param bool $typeCompteur The type compteur.
     */
    public function setTypeCompteur($typeCompteur) {
        $this->typeCompteur = $typeCompteur;
        return $this;
    }
}
