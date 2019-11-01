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
 * Gestion plages horaires trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPlagesHorairesTrait {

    /**
     * Gestion plages horaires.
     *
     * @var bool
     */
    private $gestionPlagesHoraires;

    /**
     * Get the gestion plages horaires.
     *
     * @return bool Returns the gestion plages horaires.
     */
    public function getGestionPlagesHoraires() {
        return $this->gestionPlagesHoraires;
    }

    /**
     * Set the gestion plages horaires.
     *
     * @param bool $gestionPlagesHoraires The gestion plages horaires.
     */
    public function setGestionPlagesHoraires($gestionPlagesHoraires) {
        $this->gestionPlagesHoraires = $gestionPlagesHoraires;
        return $this;
    }
}
