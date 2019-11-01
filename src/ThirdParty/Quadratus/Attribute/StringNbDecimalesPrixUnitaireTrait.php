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
 * Nb decimales prix unitaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbDecimalesPrixUnitaireTrait {

    /**
     * Nb decimales prix unitaire.
     *
     * @var string
     */
    private $nbDecimalesPrixUnitaire;

    /**
     * Get the nb decimales prix unitaire.
     *
     * @return string Returns the nb decimales prix unitaire.
     */
    public function getNbDecimalesPrixUnitaire() {
        return $this->nbDecimalesPrixUnitaire;
    }

    /**
     * Set the nb decimales prix unitaire.
     *
     * @param string $nbDecimalesPrixUnitaire The nb decimales prix unitaire.
     */
    public function setNbDecimalesPrixUnitaire($nbDecimalesPrixUnitaire) {
        $this->nbDecimalesPrixUnitaire = $nbDecimalesPrixUnitaire;
        return $this;
    }
}
