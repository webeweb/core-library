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
 * Nom formateur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomFormateurTrait {

    /**
     * Nom formateur.
     *
     * @var string
     */
    private $nomFormateur;

    /**
     * Get the nom formateur.
     *
     * @return string Returns the nom formateur.
     */
    public function getNomFormateur() {
        return $this->nomFormateur;
    }

    /**
     * Set the nom formateur.
     *
     * @param string $nomFormateur The nom formateur.
     */
    public function setNomFormateur($nomFormateur) {
        $this->nomFormateur = $nomFormateur;
        return $this;
    }
}
