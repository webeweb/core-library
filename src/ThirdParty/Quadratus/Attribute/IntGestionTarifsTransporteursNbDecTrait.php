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
 * Gestion tarifs transporteurs nb dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntGestionTarifsTransporteursNbDecTrait {

    /**
     * Gestion tarifs transporteurs nb dec.
     *
     * @var int
     */
    private $gestionTarifsTransporteursNbDec;

    /**
     * Get the gestion tarifs transporteurs nb dec.
     *
     * @return int Returns the gestion tarifs transporteurs nb dec.
     */
    public function getGestionTarifsTransporteursNbDec() {
        return $this->gestionTarifsTransporteursNbDec;
    }

    /**
     * Set the gestion tarifs transporteurs nb dec.
     *
     * @param int $gestionTarifsTransporteursNbDec The gestion tarifs transporteurs nb dec.
     */
    public function setGestionTarifsTransporteursNbDec($gestionTarifsTransporteursNbDec) {
        $this->gestionTarifsTransporteursNbDec = $gestionTarifsTransporteursNbDec;
        return $this;
    }
}
