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
 * Suivi annee recolte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnneeRecolteTrait {

    /**
     * Suivi annee recolte.
     *
     * @var bool
     */
    private $suiviAnneeRecolte;

    /**
     * Get the suivi annee recolte.
     *
     * @return bool Returns the suivi annee recolte.
     */
    public function getSuiviAnneeRecolte() {
        return $this->suiviAnneeRecolte;
    }

    /**
     * Set the suivi annee recolte.
     *
     * @param bool $suiviAnneeRecolte The suivi annee recolte.
     */
    public function setSuiviAnneeRecolte($suiviAnneeRecolte) {
        $this->suiviAnneeRecolte = $suiviAnneeRecolte;
        return $this;
    }
}
