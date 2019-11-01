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
 * Valeur47 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur47Trait {

    /**
     * Valeur47.
     *
     * @var float
     */
    private $valeur47;

    /**
     * Get the valeur47.
     *
     * @return float Returns the valeur47.
     */
    public function getValeur47() {
        return $this->valeur47;
    }

    /**
     * Set the valeur47.
     *
     * @param float $valeur47 The valeur47.
     */
    public function setValeur47($valeur47) {
        $this->valeur47 = $valeur47;
        return $this;
    }
}
