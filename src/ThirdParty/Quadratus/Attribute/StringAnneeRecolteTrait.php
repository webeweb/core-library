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
 * Annee recolte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAnneeRecolteTrait {

    /**
     * Annee recolte.
     *
     * @var string
     */
    private $anneeRecolte;

    /**
     * Get the annee recolte.
     *
     * @return string Returns the annee recolte.
     */
    public function getAnneeRecolte() {
        return $this->anneeRecolte;
    }

    /**
     * Set the annee recolte.
     *
     * @param string $anneeRecolte The annee recolte.
     */
    public function setAnneeRecolte($anneeRecolte) {
        $this->anneeRecolte = $anneeRecolte;
        return $this;
    }
}
