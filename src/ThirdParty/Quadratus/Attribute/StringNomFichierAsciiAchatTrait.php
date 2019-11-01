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
 * Nom fichier ascii achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomFichierAsciiAchatTrait {

    /**
     * Nom fichier ascii achat.
     *
     * @var string
     */
    private $nomFichierAsciiAchat;

    /**
     * Get the nom fichier ascii achat.
     *
     * @return string Returns the nom fichier ascii achat.
     */
    public function getNomFichierAsciiAchat() {
        return $this->nomFichierAsciiAchat;
    }

    /**
     * Set the nom fichier ascii achat.
     *
     * @param string $nomFichierAsciiAchat The nom fichier ascii achat.
     */
    public function setNomFichierAsciiAchat($nomFichierAsciiAchat) {
        $this->nomFichierAsciiAchat = $nomFichierAsciiAchat;
        return $this;
    }
}
