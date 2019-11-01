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
 * Fiche contradictoire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFicheContradictoireTrait {

    /**
     * Fiche contradictoire.
     *
     * @var bool
     */
    private $ficheContradictoire;

    /**
     * Get the fiche contradictoire.
     *
     * @return bool Returns the fiche contradictoire.
     */
    public function getFicheContradictoire() {
        return $this->ficheContradictoire;
    }

    /**
     * Set the fiche contradictoire.
     *
     * @param bool $ficheContradictoire The fiche contradictoire.
     */
    public function setFicheContradictoire($ficheContradictoire) {
        $this->ficheContradictoire = $ficheContradictoire;
        return $this;
    }
}
