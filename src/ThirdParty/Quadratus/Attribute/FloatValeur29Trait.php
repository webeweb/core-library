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
 * Valeur29 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur29Trait {

    /**
     * Valeur29.
     *
     * @var float
     */
    private $valeur29;

    /**
     * Get the valeur29.
     *
     * @return float Returns the valeur29.
     */
    public function getValeur29() {
        return $this->valeur29;
    }

    /**
     * Set the valeur29.
     *
     * @param float $valeur29 The valeur29.
     */
    public function setValeur29($valeur29) {
        $this->valeur29 = $valeur29;
        return $this;
    }
}
