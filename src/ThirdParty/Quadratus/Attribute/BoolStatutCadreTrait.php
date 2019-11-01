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
 * Statut cadre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolStatutCadreTrait {

    /**
     * Statut cadre.
     *
     * @var bool
     */
    private $statutCadre;

    /**
     * Get the statut cadre.
     *
     * @return bool Returns the statut cadre.
     */
    public function getStatutCadre() {
        return $this->statutCadre;
    }

    /**
     * Set the statut cadre.
     *
     * @param bool $statutCadre The statut cadre.
     */
    public function setStatutCadre($statutCadre) {
        $this->statutCadre = $statutCadre;
        return $this;
    }
}
