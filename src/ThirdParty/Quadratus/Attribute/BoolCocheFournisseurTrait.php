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
 * Coche fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCocheFournisseurTrait {

    /**
     * Coche fournisseur.
     *
     * @var bool
     */
    private $cocheFournisseur;

    /**
     * Get the coche fournisseur.
     *
     * @return bool Returns the coche fournisseur.
     */
    public function getCocheFournisseur() {
        return $this->cocheFournisseur;
    }

    /**
     * Set the coche fournisseur.
     *
     * @param bool $cocheFournisseur The coche fournisseur.
     */
    public function setCocheFournisseur($cocheFournisseur) {
        $this->cocheFournisseur = $cocheFournisseur;
        return $this;
    }
}
