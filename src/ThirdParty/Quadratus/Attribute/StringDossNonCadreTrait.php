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
 * Doss non cadre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossNonCadreTrait {

    /**
     * Doss non cadre.
     *
     * @var string
     */
    private $dossNonCadre;

    /**
     * Get the doss non cadre.
     *
     * @return string Returns the doss non cadre.
     */
    public function getDossNonCadre() {
        return $this->dossNonCadre;
    }

    /**
     * Set the doss non cadre.
     *
     * @param string $dossNonCadre The doss non cadre.
     */
    public function setDossNonCadre($dossNonCadre) {
        $this->dossNonCadre = $dossNonCadre;
        return $this;
    }
}
