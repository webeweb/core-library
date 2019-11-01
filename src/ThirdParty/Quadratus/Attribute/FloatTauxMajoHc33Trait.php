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
 * Taux majo hc33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxMajoHc33Trait {

    /**
     * Taux majo hc33.
     *
     * @var float
     */
    private $tauxMajoHc33;

    /**
     * Get the taux majo hc33.
     *
     * @return float Returns the taux majo hc33.
     */
    public function getTauxMajoHc33() {
        return $this->tauxMajoHc33;
    }

    /**
     * Set the taux majo hc33.
     *
     * @param float $tauxMajoHc33 The taux majo hc33.
     */
    public function setTauxMajoHc33($tauxMajoHc33) {
        $this->tauxMajoHc33 = $tauxMajoHc33;
        return $this;
    }
}
