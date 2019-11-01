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
 * Gestion jour ferie etab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionJourFerieEtabTrait {

    /**
     * Gestion jour ferie etab.
     *
     * @var bool
     */
    private $gestionJourFerieEtab;

    /**
     * Get the gestion jour ferie etab.
     *
     * @return bool Returns the gestion jour ferie etab.
     */
    public function getGestionJourFerieEtab() {
        return $this->gestionJourFerieEtab;
    }

    /**
     * Set the gestion jour ferie etab.
     *
     * @param bool $gestionJourFerieEtab The gestion jour ferie etab.
     */
    public function setGestionJourFerieEtab($gestionJourFerieEtab) {
        $this->gestionJourFerieEtab = $gestionJourFerieEtab;
        return $this;
    }
}
