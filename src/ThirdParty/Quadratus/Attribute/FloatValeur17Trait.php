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
 * Valeur17 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur17Trait {

    /**
     * Valeur17.
     *
     * @var float
     */
    private $valeur17;

    /**
     * Get the valeur17.
     *
     * @return float Returns the valeur17.
     */
    public function getValeur17() {
        return $this->valeur17;
    }

    /**
     * Set the valeur17.
     *
     * @param float $valeur17 The valeur17.
     */
    public function setValeur17($valeur17) {
        $this->valeur17 = $valeur17;
        return $this;
    }
}
