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
 * Gestion paie decalee oc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPaieDecaleeOcTrait {

    /**
     * Gestion paie decalee oc.
     *
     * @var bool
     */
    private $gestionPaieDecaleeOc;

    /**
     * Get the gestion paie decalee oc.
     *
     * @return bool Returns the gestion paie decalee oc.
     */
    public function getGestionPaieDecaleeOc() {
        return $this->gestionPaieDecaleeOc;
    }

    /**
     * Set the gestion paie decalee oc.
     *
     * @param bool $gestionPaieDecaleeOc The gestion paie decalee oc.
     */
    public function setGestionPaieDecaleeOc($gestionPaieDecaleeOc) {
        $this->gestionPaieDecaleeOc = $gestionPaieDecaleeOc;
        return $this;
    }
}
