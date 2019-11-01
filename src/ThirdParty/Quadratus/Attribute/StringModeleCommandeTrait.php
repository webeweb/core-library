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
 * Modele commande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleCommandeTrait {

    /**
     * Modele commande.
     *
     * @var string
     */
    private $modeleCommande;

    /**
     * Get the modele commande.
     *
     * @return string Returns the modele commande.
     */
    public function getModeleCommande() {
        return $this->modeleCommande;
    }

    /**
     * Set the modele commande.
     *
     * @param string $modeleCommande The modele commande.
     */
    public function setModeleCommande($modeleCommande) {
        $this->modeleCommande = $modeleCommande;
        return $this;
    }
}
