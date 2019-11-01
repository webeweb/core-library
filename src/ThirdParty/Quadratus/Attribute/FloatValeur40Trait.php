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
 * Valeur40 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur40Trait {

    /**
     * Valeur40.
     *
     * @var float
     */
    private $valeur40;

    /**
     * Get the valeur40.
     *
     * @return float Returns the valeur40.
     */
    public function getValeur40() {
        return $this->valeur40;
    }

    /**
     * Set the valeur40.
     *
     * @param float $valeur40 The valeur40.
     */
    public function setValeur40($valeur40) {
        $this->valeur40 = $valeur40;
        return $this;
    }
}
