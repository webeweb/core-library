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
 * Fct balance fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctBalanceFournisseurTrait {

    /**
     * Fct balance fournisseur.
     *
     * @var bool
     */
    private $fctBalanceFournisseur;

    /**
     * Get the fct balance fournisseur.
     *
     * @return bool Returns the fct balance fournisseur.
     */
    public function getFctBalanceFournisseur() {
        return $this->fctBalanceFournisseur;
    }

    /**
     * Set the fct balance fournisseur.
     *
     * @param bool $fctBalanceFournisseur The fct balance fournisseur.
     */
    public function setFctBalanceFournisseur($fctBalanceFournisseur) {
        $this->fctBalanceFournisseur = $fctBalanceFournisseur;
        return $this;
    }
}
