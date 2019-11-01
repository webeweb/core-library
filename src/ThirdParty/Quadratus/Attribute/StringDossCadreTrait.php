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
 * Doss cadre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossCadreTrait {

    /**
     * Doss cadre.
     *
     * @var string
     */
    private $dossCadre;

    /**
     * Get the doss cadre.
     *
     * @return string Returns the doss cadre.
     */
    public function getDossCadre() {
        return $this->dossCadre;
    }

    /**
     * Set the doss cadre.
     *
     * @param string $dossCadre The doss cadre.
     */
    public function setDossCadre($dossCadre) {
        $this->dossCadre = $dossCadre;
        return $this;
    }
}
