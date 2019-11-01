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
 * Nom adresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomAdresseTrait {

    /**
     * Nom adresse.
     *
     * @var string
     */
    private $nomAdresse;

    /**
     * Get the nom adresse.
     *
     * @return string Returns the nom adresse.
     */
    public function getNomAdresse() {
        return $this->nomAdresse;
    }

    /**
     * Set the nom adresse.
     *
     * @param string $nomAdresse The nom adresse.
     */
    public function setNomAdresse($nomAdresse) {
        $this->nomAdresse = $nomAdresse;
        return $this;
    }
}
