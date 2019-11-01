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
 * Valeur38 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur38Trait {

    /**
     * Valeur38.
     *
     * @var float
     */
    private $valeur38;

    /**
     * Get the valeur38.
     *
     * @return float Returns the valeur38.
     */
    public function getValeur38() {
        return $this->valeur38;
    }

    /**
     * Set the valeur38.
     *
     * @param float $valeur38 The valeur38.
     */
    public function setValeur38($valeur38) {
        $this->valeur38 = $valeur38;
        return $this;
    }
}
