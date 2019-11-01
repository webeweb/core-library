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
 * Nom fichier ascii vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomFichierAsciiVenteTrait {

    /**
     * Nom fichier ascii vente.
     *
     * @var string
     */
    private $nomFichierAsciiVente;

    /**
     * Get the nom fichier ascii vente.
     *
     * @return string Returns the nom fichier ascii vente.
     */
    public function getNomFichierAsciiVente() {
        return $this->nomFichierAsciiVente;
    }

    /**
     * Set the nom fichier ascii vente.
     *
     * @param string $nomFichierAsciiVente The nom fichier ascii vente.
     */
    public function setNomFichierAsciiVente($nomFichierAsciiVente) {
        $this->nomFichierAsciiVente = $nomFichierAsciiVente;
        return $this;
    }
}
