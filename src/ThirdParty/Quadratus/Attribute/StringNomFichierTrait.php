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
 * Nom fichier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomFichierTrait {

    /**
     * Nom fichier.
     *
     * @var string
     */
    private $nomFichier;

    /**
     * Get the nom fichier.
     *
     * @return string Returns the nom fichier.
     */
    public function getNomFichier() {
        return $this->nomFichier;
    }

    /**
     * Set the nom fichier.
     *
     * @param string $nomFichier The nom fichier.
     */
    public function setNomFichier($nomFichier) {
        $this->nomFichier = $nomFichier;
        return $this;
    }
}
