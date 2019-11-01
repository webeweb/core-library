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
 * Valeur43 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur43Trait {

    /**
     * Valeur43.
     *
     * @var float
     */
    private $valeur43;

    /**
     * Get the valeur43.
     *
     * @return float Returns the valeur43.
     */
    public function getValeur43() {
        return $this->valeur43;
    }

    /**
     * Set the valeur43.
     *
     * @param float $valeur43 The valeur43.
     */
    public function setValeur43($valeur43) {
        $this->valeur43 = $valeur43;
        return $this;
    }
}
