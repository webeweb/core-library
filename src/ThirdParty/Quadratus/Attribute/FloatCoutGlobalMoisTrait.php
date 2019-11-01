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
 * Cout global mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoutGlobalMoisTrait {

    /**
     * Cout global mois.
     *
     * @var float
     */
    private $coutGlobalMois;

    /**
     * Get the cout global mois.
     *
     * @return float Returns the cout global mois.
     */
    public function getCoutGlobalMois() {
        return $this->coutGlobalMois;
    }

    /**
     * Set the cout global mois.
     *
     * @param float $coutGlobalMois The cout global mois.
     */
    public function setCoutGlobalMois($coutGlobalMois) {
        $this->coutGlobalMois = $coutGlobalMois;
        return $this;
    }
}
