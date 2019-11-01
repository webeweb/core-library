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
 * Nb commande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbCommandeTrait {

    /**
     * Nb commande.
     *
     * @var string
     */
    private $nbCommande;

    /**
     * Get the nb commande.
     *
     * @return string Returns the nb commande.
     */
    public function getNbCommande() {
        return $this->nbCommande;
    }

    /**
     * Set the nb commande.
     *
     * @param string $nbCommande The nb commande.
     */
    public function setNbCommande($nbCommande) {
        $this->nbCommande = $nbCommande;
        return $this;
    }
}
