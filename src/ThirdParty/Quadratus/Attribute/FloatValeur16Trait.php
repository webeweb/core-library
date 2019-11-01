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
 * Valeur16 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur16Trait {

    /**
     * Valeur16.
     *
     * @var float
     */
    private $valeur16;

    /**
     * Get the valeur16.
     *
     * @return float Returns the valeur16.
     */
    public function getValeur16() {
        return $this->valeur16;
    }

    /**
     * Set the valeur16.
     *
     * @param float $valeur16 The valeur16.
     */
    public function setValeur16($valeur16) {
        $this->valeur16 = $valeur16;
        return $this;
    }
}
