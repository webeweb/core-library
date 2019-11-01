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
 * Valeur41 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur41Trait {

    /**
     * Valeur41.
     *
     * @var float
     */
    private $valeur41;

    /**
     * Get the valeur41.
     *
     * @return float Returns the valeur41.
     */
    public function getValeur41() {
        return $this->valeur41;
    }

    /**
     * Set the valeur41.
     *
     * @param float $valeur41 The valeur41.
     */
    public function setValeur41($valeur41) {
        $this->valeur41 = $valeur41;
        return $this;
    }
}
