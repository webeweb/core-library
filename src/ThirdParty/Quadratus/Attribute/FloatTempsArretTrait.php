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
 * Temps arret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTempsArretTrait {

    /**
     * Temps arret.
     *
     * @var float
     */
    private $tempsArret;

    /**
     * Get the temps arret.
     *
     * @return float Returns the temps arret.
     */
    public function getTempsArret() {
        return $this->tempsArret;
    }

    /**
     * Set the temps arret.
     *
     * @param float $tempsArret The temps arret.
     */
    public function setTempsArret($tempsArret) {
        $this->tempsArret = $tempsArret;
        return $this;
    }
}
