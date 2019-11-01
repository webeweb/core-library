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
 * Valeur15 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur15Trait {

    /**
     * Valeur15.
     *
     * @var float
     */
    private $valeur15;

    /**
     * Get the valeur15.
     *
     * @return float Returns the valeur15.
     */
    public function getValeur15() {
        return $this->valeur15;
    }

    /**
     * Set the valeur15.
     *
     * @param float $valeur15 The valeur15.
     */
    public function setValeur15($valeur15) {
        $this->valeur15 = $valeur15;
        return $this;
    }
}
