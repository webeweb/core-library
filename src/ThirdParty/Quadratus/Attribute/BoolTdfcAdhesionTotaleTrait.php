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
 * Tdfc adhesion totale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTdfcAdhesionTotaleTrait {

    /**
     * Tdfc adhesion totale.
     *
     * @var bool
     */
    private $tdfcAdhesionTotale;

    /**
     * Get the tdfc adhesion totale.
     *
     * @return bool Returns the tdfc adhesion totale.
     */
    public function getTdfcAdhesionTotale() {
        return $this->tdfcAdhesionTotale;
    }

    /**
     * Set the tdfc adhesion totale.
     *
     * @param bool $tdfcAdhesionTotale The tdfc adhesion totale.
     */
    public function setTdfcAdhesionTotale($tdfcAdhesionTotale) {
        $this->tdfcAdhesionTotale = $tdfcAdhesionTotale;
        return $this;
    }
}
