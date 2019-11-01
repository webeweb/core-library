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
 * Nom fichier dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomFichierDadsuTrait {

    /**
     * Nom fichier dadsu.
     *
     * @var string
     */
    private $nomFichierDadsu;

    /**
     * Get the nom fichier dadsu.
     *
     * @return string Returns the nom fichier dadsu.
     */
    public function getNomFichierDadsu() {
        return $this->nomFichierDadsu;
    }

    /**
     * Set the nom fichier dadsu.
     *
     * @param string $nomFichierDadsu The nom fichier dadsu.
     */
    public function setNomFichierDadsu($nomFichierDadsu) {
        $this->nomFichierDadsu = $nomFichierDadsu;
        return $this;
    }
}
