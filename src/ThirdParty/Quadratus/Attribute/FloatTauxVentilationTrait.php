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
 * Taux ventilation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxVentilationTrait {

    /**
     * Taux ventilation.
     *
     * @var float
     */
    private $tauxVentilation;

    /**
     * Get the taux ventilation.
     *
     * @return float Returns the taux ventilation.
     */
    public function getTauxVentilation() {
        return $this->tauxVentilation;
    }

    /**
     * Set the taux ventilation.
     *
     * @param float $tauxVentilation The taux ventilation.
     */
    public function setTauxVentilation($tauxVentilation) {
        $this->tauxVentilation = $tauxVentilation;
        return $this;
    }
}
