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
 * Acces saisie commande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesSaisieCommandeTrait {

    /**
     * Acces saisie commande.
     *
     * @var bool
     */
    private $accesSaisieCommande;

    /**
     * Get the acces saisie commande.
     *
     * @return bool Returns the acces saisie commande.
     */
    public function getAccesSaisieCommande() {
        return $this->accesSaisieCommande;
    }

    /**
     * Set the acces saisie commande.
     *
     * @param bool $accesSaisieCommande The acces saisie commande.
     */
    public function setAccesSaisieCommande($accesSaisieCommande) {
        $this->accesSaisieCommande = $accesSaisieCommande;
        return $this;
    }
}
